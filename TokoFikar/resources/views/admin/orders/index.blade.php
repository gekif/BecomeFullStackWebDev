@extends('admin.layouts.master')


@section('page')
    Pesanan
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">

            @include('admin.layouts.message')

            <div class="card">
                <div class="header">
                    <h4 class="title">Pesanan</h4>
                    <p class="category">Daftar Semua Pesanan</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pengguna</th>
                            <th>Produk</th>
                            <th>Kuantitas</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            @foreach($orders as $order)
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>
                                    @foreach($order->products as $item)
                                        {{ $item->name }}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($order->orderItems as $item)
                                        {{ $item->quantity }}
                                    @endforeach
                                </td>
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

                                {{ link_to_route('orders.show', 'Detil', $order->id, ['class' => 'btn btn-success btn-sm']) }}
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