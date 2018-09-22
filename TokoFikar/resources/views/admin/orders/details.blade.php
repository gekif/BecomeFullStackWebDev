@extends('admin.layouts.master')

@section('page')
    Detil Pesanan
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Detil Pesanan</h4>
                    <p class="category">Daftar Semua Pesanan</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Kuantitas</th>
                                <th>Alamat</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->date }}</td>
                                <td>{{ $order->orderItems[0]->quantity }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->orderItems[0]->price }}</td>
                                <td>
                                    @if($order->status)
                                        <span class="label label-success">Terkonfirmasi</span>
                                    @else
                                        <span class="label label-warning">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($order->status)
                                        {{ link_to_route('order.pending', 'Pending', $order->id, ['class' => 'btn btn-warning btn-sm']) }}
                                    @else
                                        {{ link_to_route('order.confirm', 'Konfirmasi', $order->id, ['class' => 'btn btn-success btn-sm']) }}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">Detil Pemesan</h4>
                    <p class="category">Detil Pemesan</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <tbody>

                        <tr>
                            <th>ID</th>
                            <td>{{ $order->user->id }}</td>
                        </tr>

                        <tr>
                            <th>Nama</th>
                            <td>{{ $order->user->name }}</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>{{ $order->user->email }}</td>
                        </tr>

                        <tr>
                            <th>Terdaftar Sejak</th>
                            <td>{{ $order->user->created_at->diffForHumans() }}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">Detil Produk</h4>
                    <p class="category">Detil Produk</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <tbody>

                        <tr>
                            <th>ID</th>
                            <td>{{ $order->products[0]->id }}</td>
                        </tr>

                        <tr>
                            <th>Nama</th>
                            <td>{{ $order->products[0]->name }}</td>
                        </tr>

                        <tr>
                            <th>Harga</th>
                            <td>{{ $order->products[0]->price }}</td>
                        </tr>

                        <tr>
                            <th>Image</th>
                            <td>
                                <a href="{{ url('uploads', $order->products[0]->image ) }}" alt="{{ $order->products[0]->image }}" target="_blank"/><img src="{{ url('uploads',$order->products[0]->image ) }}" alt="{{ $order->products[0]->image }}" class="img-thumbnail" style="width: 150px;"></td>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

<a href="{{ url('admin/orders') }}" class="btn btn-success">Kembali Ke Pesanan</a>
@endsection