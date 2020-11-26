@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('isi.data-stock')}}" class="btn btn-outline-primary">Tambah Barang</a>
            </div>
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="px-4 pt-4">
                        <h3 class="font-weight-bolder">Data Barang</h3>
                    </div>
                    <div class="pt-4">
                        <table class="table table-stripped table-dark">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Barang</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inventorys as $in)
                                <tr>
                                    <td>{{$in->code}}</td>
                                    <td>{{$in->name}}</td>
                                    <td>{{$in->stock}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-outline-primary">Edit</button>
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        <a href="{{route('data.keluar')}}" type="submit" class="btn btn-outline-success">Buy</a>
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