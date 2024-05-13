@extends('frame.main')
@section('content')
    <!-- <h1><a href="/products"><i class="fa-solid fa-arrow-left"></i></a>Data Produk {{ $data->name }}</h1> -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/products"><i class="fa-solid fa-arrow-left"></i></a> Data Produk {{ $data->name }}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/products-img/' . $data->img) }}" alt="{{ $data->name }}" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h3>{{ $data->name }}</h3>
                        <p>{{ $data->description }}</p>
                        <p>Harga: Rp {{ $data->price }}</p>
                        <!-- Add more details here if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
