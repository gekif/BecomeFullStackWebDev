<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {{ Form::label('product_name', 'Nama Produk') }}
    {{ Form::text('name', '',['class' => 'form-control border-input', 'placeholder' => 'Kacang Goreng']) }}
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
    {{ Form::label('product_price', 'Harga Produk') }}
    {{ Form::text('price', '', ['class' => 'form-control border-input', 'placeholder' => 'Rp.5000']) }}
    <span class="text-danger">{{ $errors->has('price') ? $errors->first('price') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    {{ Form::label('product_description', 'Deskripsi Produk') }}
    {{ Form::textarea('description', '', ['class' => 'form-control border-input', 'cols' => '30', 'rows' => '10', 'placeholder' => 'Deskripsi Produk']) }}
    <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    {{ Form::label('product_image', 'Gambar Produk') }}
    {{ Form::file('image', ['class' => 'form-control border-input', 'style' => 'padding-bottom:45px', 'id' => 'image']) }}
    <div id="thumb-output"></div>
    <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
</div>