@extends('layout.master')

@section('content')
            <br>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses') }}
            </div>
            @endif
            <div class="row">
                <div class="col-6">
                    <h2>Data Produk</h2>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data Produk
                    </button>
                </div>        
                <table class="table table-success table-hover">
                    <tr>
                        <th>NAMA PRODUK</th> 
                        <th>KETERANGAN</th>
                        <th>HARGA</th>
                        <th>JUMLAH</th>
                        <th></th>
                    </tr>
                    @foreach($data_produk as $produk)
                    <tr>
                        <td>{{$produk->nama_produk}}</td>
                        <td>{{$produk->keterangan}}</td>
                        <td>{{$produk->harga}}</td>
                        <td>{{$produk->jumlah}}</td>
                        <td>
                            <a href="/produk.{{$produk->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/produk.{{$produk->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <nav aria-label="Page navigation example ">
                    <ul class="pagination justify-content-center ">
                        <li class="page-item disabled">
                            <strong><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a></strong>
                        </li>
                        <li class="page-item"><strong><a class="page-link" href="#">1</a></strong></li>
                        <li class="page-item"><strong><a class="page-link" href="#">2</a></strong></li>
                        <li class="page-item"><strong><a class="page-link" href="#">3</a></strong></li>
                        <li class="page-item">
                            <strong><a class="page-link" href="#">Next</a></strong>
                        </li>
                    </ul>
                </nav>
            </div> 
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/produk/create" method="POST">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="Inputproduk" class="form-label">Nama Produk</label>
                                <input name="nama_produk" type="text" class="form-control" id="InputNIK" aria-label="NamaProduk" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputKeterangan" class="form-label">Keterangan</label>
                                <input name="keterangan" type="text" class="form-control" id="InputKeterangan" aria-label="Keterangan" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputTempatTanggalLahir" class="form-label">Harga</label>
                                <input name="harga" type="Text" class="form-control" id="InputHarga" aria-label="Harga" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="InputTempatTanggalLahir" class="form-label">Jumlah</label>
                                <input name="jumlah" type="Text" class="form-control" id="InputJumlah" aria-label="Jumlah" placeholder="">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection