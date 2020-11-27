<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function __construct()

    {
        $this->income = new Income();
    }

    public function index()
    {
        $incomes = Income::all();
        return view('data.pemasukan.index', compact('incomes'));
    }

    public function create()
    {
        return view('data.pemasukan.create');
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

        $income = Income::create([
            'name'          => $request->name,
            'a_n'           => $request->a_n,
            'price'         => $request->price,
            'stock'         => $request->stock,
            'address'       => $request->address,
            'information'   => $request->information,
        ]);

        $income->save();
        return redirect()->back()->with(['success' => 'Penambahan barang berhasil.... ']);
    }

    
}
