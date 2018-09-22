@extends('front.layouts.master')

@section('content')
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