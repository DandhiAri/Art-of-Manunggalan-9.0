@extends('layouts.auth')

@section('titlePage', 'E-Ticket | Register')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8 col-md-8">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
                        <div class="col-lg-12">
                            <div class="p-3">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Form Pendaftaran!</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('register') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input id="name" type="text" name="name" value="{{ old('name') }}"
                                            class="form-control  @error('name') is-invalid @enderror"
                                            placeholder="Masukkan nama lengkap...">
                                        @error('name')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="nohp">Nomor HP</label>
                                            <input type="tel" class="form-control" id="nohp" name="nohp"
                                                placeholder="08912312131">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="example@gmail.com">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="payment">Bukti Pembayaran</label>
                                        <input type="file" class="form-control" id="payment" name="payment"
                                            accept="image/png, image/jpeg" placeholder="Nama lengkap">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="password_confirm">Konfirmasi Password</label>
                                            <input type="password" class="form-control" id="password_confirm"
                                                name="password_confirmation" placeholder="Konfirmasi Password">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Daftar
                                    </button>
                                </form>
                                <hr>
                                {{-- <div class="text-center">
                                    <a class="small" href="{{ route('forgot-password') }}">Lupa password?</a>
                                </div> --}}
                                <div class="text-center">
                                    <small>Sudah mendaftar ?</small> <a class="small" href="{{ route('login') }}"> Login
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
