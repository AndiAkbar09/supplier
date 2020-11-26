@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="px-4 py-3">
                        <h3 class="font-weight-bold">Data Keluar</h3>
                    </div>
                    <div class="pt-4">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <td>Kode Barang</td>
                                    <td>Nama Barang</td>
                                    <td>Harga</td>
                                    <td>Alamat</td>
                                    <td>Option</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($expenditures as $exp)
                                <tr>
                                    <td>{{$exp->code}}</td>
                                    <td>{{$exp->name}}</td>
                                    <td>{{$exp->price}}</td>
                                    <td>{{$exp->address}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-outline-success">Lihat</button>
                                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
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
</div>

@endsection