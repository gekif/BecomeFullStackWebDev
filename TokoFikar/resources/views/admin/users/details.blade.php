@extends('admin.layouts.master')

@section('page')
    Detil Pesanan Pengguna
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Pesanan {{ $orders[0]->user->name }}</h4>
                    <p class="category">Seluruh Daftar Belanja Pengguna Aplikasi</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Nama Produk</th>
                            <th>Alamat</th>
                            <th>Kuantitas</th>
                            <th>Total Harga</th>
                            <th>Tanggal Pesan</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->products[0]->name }}</td>
                                    <td>{{ $order->address }}</td>
                                    <td>{{ $order->orderItems[0]->quantity }}</td>
                                    <td>{{ $order->orderItems[0]->price }}</td>
                                    <td>{{ $order->date }}</td>
                                    <td>
                                        @if($order->status)
                                            <span class="label label-success">Terkonfirmasi</span>
                                        @else
                                            <span class="label label-warning">Pending</span>
                                        @endif
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