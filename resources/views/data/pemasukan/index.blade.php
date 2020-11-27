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
                                <td>Harga</td>
                                <td>Jumlah</td>
                                <td>Alamat</td>
                                <td>Option</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($incomes as $in)
                            <tr>
                                <td>{{$in->code}}</td>
                                <td>{{$in->name}}</td>
                                <td>{{$in->price}}</td>
                                <td>{{$in->stock}}</td>
                                <td>{{$in->address}}</td>
                                <td>
                                    <button type="submit" class="btn btn-outline-success">Show</button>
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
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