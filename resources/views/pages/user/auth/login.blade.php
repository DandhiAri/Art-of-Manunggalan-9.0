@extends('layouts.auth')

@section('titlePage', 'E-Ticket | Login')

@section('content')
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-8">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
                        <div class="col-md-12">
                            <div class="p-3">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-0">Selamat Datang!</h1>
                                    <p class="small mb-4">Silahkan login terlebih dahulu untuk melanjutkan
                                        sesi.</p>
                                </div>
                                <form class="user" action="{{ route('login') }}">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="example@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Masukkan password...">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" name="remember_me"
                                                id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('forgot-password') }}">Lupa password?</a>
                                </div>
                                <div class="text-center">
                                    <small class="small">Belum Daftar ?</small> <a class="small"
                                        href="{{ route('register') }}">Daftar
                                        Disini!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
