@extends('layouts.master')

@section('title')
    Login Page
@endsection

@section('content')
    <h3>Login</h3>
    <hr>

    @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session()->get('msg') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Login
        </div>

        <div class="card-body">
            <form action="{{ route('user.login') }}" method="post">
                @csrf

                <div class="col-md-6 mb-3">
                    <label for="username">Email:</label>
                    <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="Email">
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="password   ">Password:</label>
                    <input type="text" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" placeholder="Password">
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>

        </div>
    </div>
@endsection