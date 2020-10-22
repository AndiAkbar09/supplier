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
        $addCode = $this->income->newCode();
        return view('data.pemasukan.create', compact('addCode'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_barang'   => 'required',
            'nama_barang'   => 'required',
            'harga_beli'    => 'required',
            'pt_menjual'    => 'required',
            'pt_membeli'    => 'required',
            'jumlah_barang' => 'required',
            'alamat'        => 'required',
            'tanggal'       => 'required',
            'informasi'     => 'required',
        ]);

        $income = Income::create([
            'kode_barang'   => $request->kode_barang,
            'nama_barang'   => $request->nama_barang,
            'harga_beli'    => $request->harga_beli,
            'pt_menjual'    => $request->pt_menjual,
            'pt_membeli'    => $request->pt_membeli,
            'jumlah_barang' => $request->jumlah_barang,
            'alamat'        => $request->alamat,
            'tanggal'       => $request->tanggal,
            'informasi'     => $request->informasi,
        ]);

        $income->save();
        return redirect()->back()->with(['success' => 'Penambahan barang berhasil.... ']);
    }
}
