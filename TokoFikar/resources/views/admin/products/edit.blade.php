@extends('admin.layouts.master')

@section('page')
    Ubah Produk
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-10 col-md-10">
            @include('admin.layouts.message')
            <div class="card">
                <div class="header">
                    <h4 class="title">Ubah Produk</h4>
                </div>

                <div class="content">
                    {!! Form::open(['url' => ['/products', $product->id], 'files' => 'true', 'method' => 'put']) !!}
                    <div class="row">
                        <div class="col-md-12">
                            @include('admin.products._fields')
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::submit('Ubah Produk', ['class' => 'btn btn-info btn-fill btn-wd']) }}
                    </div>

                    <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection