@extends('layouts.app')

@section('content')
    <div class="container form">
        <div class="row justify-content-center">
            <div class="col card">
                <div class="side-logo">
                    <img class="logo-auth" src="/img/logo/polije-logo.png" alt="">
                    <img class="logo-auth" src="/img/logo/jti-logo.png" alt="">
                    <img class="logo-auth" src="/img/logo/hmjti-logo.png" alt="">
                </div>
                <div class="banner-regis">
                    <h1 class="">Art of Manunggalan 9.0</h1>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Daftar') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="telp"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Telp') }}</label>

                                <div class="col-md-6">
                                    <input id="telp" type="text"
                                        class="form-control @error('telp') is-invalid @enderror" name="telp"
                                        value="{{ old('telp') }}" required autocomplete="telp" autofocus>

                                    @error('telp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tiket') }}</label>
                                <div class="col-md-6">
                                    <input id="tiket" type="radio" class="@error('tiket') is-invalid @enderror"
                                        name="tiket" value="USR-V" required> Penonton
                                    <input id="tiket" type="radio" class="@error('tiket') is-invalid @enderror"
                                        name="tiket" value="USR-P" required> Peserta Bazar

                                    @error('tiket')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kata Sandi') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Kata Sandi') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Daftar') }}
                                    </button>
                                </div>
                                <div class="col-md-6 offset-md-4 mt-3">
                                    Sudah mendaftar? <a href="{{ route('login') }}">Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
