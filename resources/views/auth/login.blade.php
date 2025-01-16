@extends('template.master')

@section('title')
FAST - Login
@endsection

@section('styles')
<style>
body {
    background-color: #C9FFDA !important;
}

.card {
    background-color: rgb(236, 236, 235) !important;
}

.btn-login {
    background-color: #4DA1A9 !important;
    color: white !important;
    font-weight: 5px !important;
    cursor: pointer;
}

.btn-login:active {
    background-color: #3b7d7f !important;
}
</style>
@endsection

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <div class="card border border-0 shadow p-3 mb-5">
            <div class="text-center mt-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="max-height: 100px;">
            </div>
            <div class="card-body pb-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">Udomain:</label>
                        <input type="text" class="text-form form-control mt-2 mb-3" id="username" name="username"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="text-form form-control mt-2 mb-3" id="password" name="password"
                            required>
                        @if ($errors->has('login'))
                        <span class="text-danger">{{ $errors->first('login') }}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-login w-100 mt-3">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection