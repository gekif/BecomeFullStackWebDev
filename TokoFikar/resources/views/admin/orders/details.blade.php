@extends('admin.layouts.master')

@section('page')
    Detil Pesanan
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Product Detail</h4>
                    <p class="category">List of all stock</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <tbody>

                        <tr>
                            <th>ID</th>
                            <td>1</td>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td>Samsung</td>
                        </tr>

                        <tr>
                            <th>Description</th>
                            <td>This is some text for the product</td>
                        </tr>

                        <tr>
                            <th>Price</th>
                            <td>$1200</td>
                        </tr>

                        <tr>
                            <th>Created At</th>
                            <td>12 days ago</td>
                        </tr>

                        <tr>
                            <th>Updated At</th>
                            <td>5 days ago</td>
                        </tr>

                        <tr>
                            <th>Image</th>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail" style="width: 150px;"></td>
                        </tr>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection