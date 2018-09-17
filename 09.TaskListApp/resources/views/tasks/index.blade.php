@extends('layouts.master')

@section('content')

    <div class="row mt-5">
        <div class="col-md-6">


            @if(session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif

            @if(session()->has('delete'))
                <div class="alert alert-danger">{{ session()->get('delete') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    Tambah Tugas
                </div>

                <div class="card-body">
                    <form action="{{ route('task.create') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="task">Tugas</label>
                            <input type="text" name="title" id="title" placeholder="Masukan Tugas" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">
                            <div class="invalid-feedback">
                                {{ $errors->has('title') ? $errors->first('title') : '' }}
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Tambah">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-5">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Liat Tugas
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                             <th>Tugas</th>
                             <th style="width: 2em;">Aksi</th>
                        </tr>

                        @foreach($tasks as $task)

                            <tr>
                                <th>{{ $task->title }}</th>
                                <th>
                                    <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </th>
                            </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
