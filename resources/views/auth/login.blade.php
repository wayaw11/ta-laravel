@extends('auth.layout')
@section('content')
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Login</h3>
        </div>
        <div class="card-body">
            <form action="/login" method="POST">
                @csrf
                @method('POST')
                <div class="form-floating mb-3">
                    <input class="form-control" id="username" type="text" name="username" placeholder="Username" />
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Password" />
                    <label for="password">Password</label>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center py-3">
            <div class="small"><a href="#">Daftar</a></div>
        </div>
    </div>
@endsection
