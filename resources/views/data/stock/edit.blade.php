
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('update.data-stock', $inventory->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" name="name" class="form-control" value="{{$inventory->name}}" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah Barang</label>
                                    <input type="number" name="stock" class="form-control" value="{{$inventory->stock}}" id="">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="submit" class="btn btn-warning">Cancel</button>
                                <a href="{{route('data.stock')}}" class="btn btn-secondary">Back</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection