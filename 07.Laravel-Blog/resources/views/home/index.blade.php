@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('styles')
    <style>
        h2 {
            color: blue;
        }
    </style>
@endsection

@section('content')

    <div class="col-md-12">
        <h2>Welcome</h2>
        <p>This is welcome</p>

        {{--{{ $user }}--}}
{{--        {{ dd($data) }}--}}
        @foreach($data as $item)
               <li>{{ $item }}</li>
        @endforeach
    </div>

@endsection

@section('scripts')
    <script>
        // alert('Hello');
    </script>
@endsection