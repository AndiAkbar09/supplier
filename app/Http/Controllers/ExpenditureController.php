<?php

namespace App\Http\Controllers;

use App\Expenditure;
use Illuminate\Http\Request;

class ExpenditureController extends Controller
{
    public function index()
    {
        $expenditures = Expenditure::all();
        return view('data.pengeluaran.index', compact('expenditures'));
    }

    public function create()
    {
        return view('data.pengeluaran.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'          => 'required',
            'a_n'           => 'required',
            'price'         => 'required',
            'stock'         => 'required',
            'address'       => 'required',
            'information'   => 'required',
        ]);

        $expenditure = Expenditure::create([
            'name'          => $request->name,
            'a_n'           => $request->a_n,
            'price'         => $request->price,
            'stock'         => $request->stock,
            'address'       => $request->address,
            'information'   => $request->information,
        ]);

        $expenditure->save();
        return redirect()->back()->with(['success' => 'Barang berhasil dibeli']);
    }

    public function show($id)
    {
        $expenditure = Expenditure::find($id);
        return view('data.pengeluaran.show', compact('expenditure'));
    }

    public function destroy($id)
    {
        $expenditure = Expenditure::find($id);

        $expenditure->delete($expenditure->all());

        return redirect()->back();
    }
}
