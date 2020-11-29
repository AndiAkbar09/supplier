<?php

namespace App\Http\Controllers;

use App\Income;
use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function __construct()

    {
        $this->inventory = new Inventory();
    }

    public function index()
    {
        $inventorys = Inventory::all();
        $incomes = Income::all();
        return view('data.stock.index', compact('inventorys', 'incomes'));
    }

    public function create()
    {
        return view('data.stock.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required',
            'stock'     => 'required',
        ]);

        $inventory = Inventory::create([
            'name'      => $request->name,
            'stock'     => $request->stock,
        ]);

        $inventory->save();
        return redirect()->back()->with(['success' => 'Penambahan Data Sukses']);
    }

    public function edit($id)
    {
        $income = Income::find($id);
        return view('data.stock.edit', compact('income'));
    }

    public function update(Request $request, $id)
    {
        $income = Income::find($id);

        $income->update($request->all());

        return redirect()->back()->with(['success' => 'Data Berhasil Diubah']);
    }
    
    public function destroy($id)
    {
        $income = Income::find($id);

        $income->delete($income->all());

        return redirect()->back();
    }
}
