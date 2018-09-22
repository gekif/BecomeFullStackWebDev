@extends('admin.layouts.master')

@section('page')
    Detil Produk
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Detil Produk</h4>
                    <p class="category">Daftar Semua Stok</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <tbody>

                        <tr>
                            <th>ID</th>
                            <td>{{ $product->id }}</td>
                        </tr>

                        <tr>
                            <th>Nama</th>
                            <td>{{ $product->name }}</td>
                        </tr>

                        <tr>
                            <th>Deskripsi</th>
                            <td>{{ $product->description }}</td>
                        </tr>

                        <tr>
                            <th>Harga</th>
                            <td>Rp. {{ number_format($product->price) }}</td>
                        </tr>

                        <tr>
                            <th>Dibuat</th>
                            <td>{{ $product->created_at->diffForHumans() }}</td>
                        </tr>

                        <tr>
                            <th>Diubah</th>
                            <td>{{ $product->updated_at->diffForHumans() }}</td>
                        </tr>

                        <tr>
                            <th>Gambar</th>
                            <td><img src="/uploads/{{ $product->image }}" alt="{{ $product->image }}" class="img-thumbnail" style="width: 150px;"></td>
                        </tr>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection