@extends('admin.layouts.master')

 @section('page')
   Lihat Produk
 @endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.layouts.message')
            <div class="card">
                <div class="header">
                    <h4 class="title">Semua Produk</h4>
                    <p class="category">Daftar Semua Stok</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td><img src="/uploads/{{ $product->image }}" alt="{{ $product->image }}" class="img-thumbnail"
                                         style="width: 50px"></td>
                                <td>
                                    {{ Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) }}
                                        {{ Form::button('<span class="fa fa-trash"></span>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("Mau dihapus produk ini?")']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection