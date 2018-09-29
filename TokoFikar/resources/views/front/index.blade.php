@extends('front.layouts.master')

@section('content')
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h5 class="display-3"><strong>Selamat Datang,</strong></h5>
        <p class="display-4"><strong>Diskon Sampai Dengan 99%</strong></p>
        <p class="display-4">&nbsp;</p>
        <a href="#" class="btn btn-warning btn-lg float-right">BELANJA SEKARANG!</a>
    </header>

    <div class="row text-center">


        @foreach($products as $product)

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="uploads/{{ $product->image }}" alt="{{ $product->image }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">
                        {{ $product->description }}
                    </p>
                </div>
                <div class="card-footer">
                    <strong>Rp. {{ number_format($product->price) }}</strong> &nbsp;
                    <a href="#" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Tambah Belanja</a>
                </div>
            </div>
        </div>

        @endforeach


    </div>
@endsection