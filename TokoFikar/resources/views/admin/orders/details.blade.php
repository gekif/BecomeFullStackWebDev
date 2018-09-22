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
                                <th>Tanggal Pesan</th>
                                <th>Status</th>
                            </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection