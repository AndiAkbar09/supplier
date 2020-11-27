<?php

namespace App\Http\Controllers;

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
        return view('data.stock.index', compact('inventorys'));
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
        $inventory = Inventory::find($id);
        return view('data.stock.edit', compact('inventory'));
    }

    public function update(Request $request, $id)
    {
        $inventory = Inventory::find($id);

        $inventory->update($request->all());

        return redirect()->back()->with(['success' => 'Data Berhasil Diubah']);
    }
    
    public function destroy($id)
    {
        $inventory = Inventory::find($id);

        $inventory->delete($inventory->all());

        return redirect()->back();
    }
}
