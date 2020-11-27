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
                        <h3 class="font-weight-bold">Data Barang</h3>
                    </div>
                    <div class="pt-4">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <td>Kode Barang</td>
                                    <td>Nama Barang</td>
                                    <td>Jumlah Barang</td>
                                    <td>ACTION</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inventorys as $in)
                                <tr>
                                    <td>{{$in->code}}</td>
                                    <td>{{$in->name}}</td>
                                    <td>{{$in->stock}}</td>
                                    <td>
                                        <form action="{{route('delete.data-stock', $in->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                            <a href="{{route('edit.data-stock', $in->id)}}" type="submit" class="btn btn-outline-primary">Edit</a>
                                            <a href="{{route('data.keluar')}}" type="submit" class="btn btn-outline-success">Buy</a>
                                        </form>
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