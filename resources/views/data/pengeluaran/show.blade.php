@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pt-3">
                <h3 class="text-dark">Data Pengeluaran</h3>
            </div>
            <div class="card border-0">
                <div class="card-body">
                    <form action="" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kode Barang</label>
                                    <input type="text" name="code" id="" class="form-control" value="{{$expenditure->code}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" name="name" id="" class="form-control" value="{{$expenditure->name}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Atas Nama</label>
                                    <input type="text" name="a_n" class="form-control" value="{{$expenditure->a_n}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="address" class="form-control" value="{{$expenditure->address}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah Barang</label>
                                    <input type="number" name="stock" class="form-control" value="{{$expenditure->stock}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Harga Beli</label>
                                    <input type="text" name="price" class="form-control" value="{{$expenditure->price}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Informasi</label>
                                    <textarea name="information" id="" readonly class="form-control">{{$expenditure->information}}</textarea> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-end">
                            <div>
                                <a href="{{route('data.pengeluaran')}}" class="btn btn-outline-secondary">
                                    <svg baseProfile="tiny" height="26px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12,9.059V6.5c0-0.256-0.098-0.512-0.293-0.708C11.512,5.597,11.256,5.5,11,5.5s-0.512,0.097-0.707,0.292L4,12l6.293,6.207  C10.488,18.402,10.744,18.5,11,18.5s0.512-0.098,0.707-0.293S12,17.755,12,17.5v-2.489c2.75,0.068,5.755,0.566,8,3.989v-1  C20,13.367,16.5,9.557,12,9.059z"/></svg>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection