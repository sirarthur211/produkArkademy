@extends('layout.master')

@section('content')
<br>
    <div class="container">
        <h4>Edit Data Produk</h4>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="row">
            <div class="col=-lg-12">
                <form action="/produk/{{$produk->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="InputProduk" class="form-label">Nama Produk</label>
                        <input name ="nama_produk" type="text" class="form-control" id="InputProduk" aria-describedby="" value="{{$produk->nama_produk}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputKeterangan" class="form-label">Keterangan</label>
                        <input name="keterangan" class="form-control" id="InputKeterangan" value="{{$produk->keterangan}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputHarga" class="form-label">Harga</label>
                        <input name="harga" class="form-control" id="InputHarga" value="{{$produk->harga}}">
                    </div>
                    <div class="mb-3">
                        <label for="InputJumlah" class="form-label">Jumlah</label>
                        <input name="jumlah" class="form-control" id="InputHarga" value="{{$produk->jumlah}}">
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection