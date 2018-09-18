<div class="form-group">
    {{ Form::label('product_name', 'Nama Produk') }}
    {{ Form::text('name', '',['class' => 'form-control border-input', 'placeholder' => 'Kacang Goreng']) }}
</div>

<div class="form-group">
    {{ Form::label('product_price', 'Harga Produk') }}
    {{ Form::text('price', '', ['class' => 'form-control border-input', 'placeholder' => 'Rp.5000']) }}
</div>

<div class="form-group">
    {{ Form::label('product_description', 'Deskripsi Produk') }}
    {{ Form::textarea('description', '', ['class' => 'form-control border-input', 'cols' => '30', 'rows' => '10', 'placeholder' => 'Deskripsi Produk']) }}
</div>

<div class="form-group">
    {{ Form::label('product_image', 'Gambar Produk') }}
    {{ Form::file('image', ['class' => 'form-control border-input', 'style' => 'padding-bottom:45px']) }}
</div>