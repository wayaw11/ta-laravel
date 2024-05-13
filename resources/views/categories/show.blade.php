@extends('frame.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/categories"><i class="fa-solid fa-arrow-left"></i></a> Data Kategori {{ $data->name }}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4">
                        <h3>{{ $data->name }}</h3>
                        <p>{{ $data->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
