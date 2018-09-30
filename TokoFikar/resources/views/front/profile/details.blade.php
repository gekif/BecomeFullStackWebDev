@extends('front.layouts.master')

@section('content')
    <h2>User Order Details Page</h2>
    <hr>
    <div class="row">

        <div class="col-md-12">
                <h4 class="title"></h4>
                <div class="content table-responsive table-full-width">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th colspan="7">Detil Pesanan</th>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Kuantitas</th>
                            <th>Alamat</th>
                            <th>Harga</th>
                            <th>Status</th>
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
                                    <span class="badge badge-success">Terkonfirmasi</span>
                                @else
                                    <span class="badge badge-warning">Pending</span>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>

        <div class="col-md-6">
                <h4 class="title">Detil Pemesan</h4>
                <hr>
                <div class="content table-responsive table-full-width">
                    <table class="table table-bordered table-striped">
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

        <div class="col-md-6">
                <h4 class="title">Detil Produk</h4>
                <hr>
                <div class="content table-responsive table-full-width">
                    <table class="table table-bordered table-striped">
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
                            <td>Rp. {{ number_format($order->products[0]->price) }}</td>
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
@endsection