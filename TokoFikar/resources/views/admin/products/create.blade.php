@extends('admin.layouts.master')

@section('page')
    Tambah Produk
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-10 col-md-10">
            <div class="card">
                <div class="header">
                    <h4 class="title">Tambah Produk</h4>
                </div>
                <div class="content">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('product_name', 'Nama Produk') }}
                                    {{ Form::text('product', '',['class' => 'form-control border-input', 'placeholder' => 'Kacang Goreng']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('product_price', 'Harga Produk') }}
                                    {{ Form::text('price', '', ['class' => 'form-control border-input', 'placeholder' => 'Rp.5000']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('product_description', 'Deskripsi Produk') }}
                                    {{ Form::textarea('desc', '', ['class' => 'form-control border-input', 'cols' => '30', 'rows' => '10', 'placeholder' => 'Deskripsi Produk']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('product_image', 'Gambar Produk') }}
                                    {{ Form::file('image', ['class' => 'form-control border-input', 'style' => 'padding-bottom:45px']) }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::submit('Tambah Produk', ['class' => 'btn btn-info btn-fill btn-wd']) }}
                        </div>

                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection