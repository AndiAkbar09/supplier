@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('data.penambahan')}}" class="btn btn-outline-primary">Tambah Barang</a>
            </div>
            
            <div class="card border-0">
                <div class="px-5 py-3">
                    <h4 class="font-weight-bold">Data Pemasukan</h4>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td>Kode Barang</td>
                                <td>Nama Barang</td>
                                <td>Nama Perusaaan</td>
                                <td>Harga</td>
                                <td>Alamat</td>
                                <td>Tanggal</td>
                                <td>Option</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($incomes as $in)
                            <tr>
                                <td>{{$in->kode_barang}}</td>
                                <td>{{$in->nama_barang}}</td>
                                <td>{{$in->pt_membeli}}</td>
                                <td>{{$in->harga_beli}}</td>
                                <td>{{$in->alamat}}</td>
                                <td>{{$in->tanggal}}</td>
                                <td>
                                    <button type="submit" class="btn btn-success">Show</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection