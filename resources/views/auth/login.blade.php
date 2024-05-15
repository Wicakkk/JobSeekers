@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center d-flex align-items-center" style="height:80vh;">
        <div class="col-md-5">

            <form method="POST" action="{{ route('login') }}" class="p-4 bg-white rounded shadow">
                <h1 class="h2 mb-4 fw-normal text-center text-primary">Login</h1>
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="name@example.com" value="{{ old('email') }}" required
                        autocomplete="email" autofocus>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password"
                        required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                </div>
                Belum Punya Akun?
                <a href="{{ route('register') }}">
                        {{ __('Daftar Sekarang!') }}
                    </a>
            </form>

            <div class="text-center">
                <small class="text-muted">
                    <a href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                </small>
            </div>

        </div>
    </div>

</div>
@endsection

