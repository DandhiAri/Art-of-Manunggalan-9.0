@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
                <div class="card">
                    @if (Auth::User()->no_reference != null && Auth::User()->confirm == '2')
                        <div class="card-header">
                            <h4 class="text-center font-weight-bold">E-Ticket | Art Of Manunggalan</h4>
                        </div>
                    @else
                        <div class="card-header">{{ __('Dashboard') }}</div>
                    @endif
                    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        @php
                            $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                        @endphp
                        @if (Auth::User()->no_reference == null)
                            @if (Auth::User()->role=='USR-V')
                                @if ($countViewer<50)
                                    @foreach ($preSale as $item)
                                        {!!$item->description!!}
                                        <strong>Pre-sale untuk 50 orang tercepat</strong><br> slot tersisa <strong>{{50-$countViewer}}</strong>
                                    @endforeach
                                @else
                                    @foreach ($sale as $item)
                                        {!!$item->description!!}
                                    @endforeach
                                @endif
                            @elseif (Auth::User()->role=='USR-P')
                                @foreach ($participant as $item)
                                    {!!$item->description!!}
                                @endforeach
                            @endif

                            @if (Auth::User()->confirm == '1')
                                <span class="text-danger">Pembayaran anda ditolak <br></span>
                                <span>Silahkan masukan nomor referensi dan bukti transfer yang valid!</span>
                            @endif
                            <form class="mt-3" action="{{ route('payment', Auth::user()->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="no_reference" class="form-label">Nomor Referensi</label>
                                    <input id="no_reference" type="text"
                                        class="form-control @error('no_reference') is-invalid @enderror" name="no_reference"
                                        value="{{ old('no_reference') }}" required autocomplete="no_reference" autofocus>
                                    @error('no_reference')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="payment" class="form-label">Bukti Pembayaran (max 1 mb)</label>
                                    <input id="payment" type="file"
                                        class="form-control @error('payment') is-invalid @enderror" name="payment"
                                        value="{{ old('payment') }}" required autocomplete="payment" autofocus>
                                    @error('payment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="form-control btn btn-primary" value="Kirim">

                                </div>
                            </form>
                        @elseif(Auth::User()->no_reference != null && Auth::User()->confirm == '0')
                            Tunggu konfrmasi <a class="btn btn-success" href="{{ url(Auth::User()->payment) }}"
                                target="_blank" rel="noopener noreferrer">Lihat bukti pembayaran</a>
                        @elseif(Auth::User()->no_reference != null && Auth::User()->confirm == '2')
                            <div class="container">
                                <div class="text-center">
                                    <img class="img-fluid mx-auto mb-3" width="120px"
                                        src="{{ asset('assets\img\logo_aom.png') }}">
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 col-12 col-sm-12">
                                        <form>
                                            <div class="form-group row font-weight-bold">
                                                <label for="staticEmail" class="col-sm-4 col-5 col-form-label">Nama
                                                    Lengkap </label>
                                                <div class="col-sm-8 col-7 ">
                                                    <p class="form-control-plaintext text-right font-weight-bold">
                                                        {{ Auth::User()->name }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row font-weight-bold">
                                                <label for="staticEmail"
                                                    class="col-sm-4 col-5 col-form-label text-wrap">Tanggal Pemesanan
                                                </label>
                                                <div class="col-sm-8 col-7 ">
                                                    <p class="form-control-plaintext text-right font-weight-bold">
                                                        {{ Auth::User()->updated_at }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row font-weight-bold">
                                                <label for="staticEmail" class="col-sm-4 col-5 col-form-label">Kategori
                                                </label>
                                                <div class="col-sm-8 col-7 ">
                                                    <input type="text" readonly
                                                        class="form-control-plaintext text-right font-weight-bold"
                                                        value="VIP">
                                                </div>
                                            </div>
                                            <div class="form-group row font-weight-bold">
                                                <label for="staticEmail" class="col-sm-4 col-5 col-form-label">Kode
                                                    Referensi</label>
                                                <div class="col-sm-8 col-7 ">
                                                    <p class="form-control-plaintext text-right font-weight-bold">
                                                        {{ Auth::User()->no_reference }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group mt-2 text-center">
                                                <label class="font-weight-bold">===== Barcode =====</label>
                                                <div class="text-center">
                                                    <img class="d-block mx-auto w-80 img-fluid"
                                                        src="data:image/png;base64,{{ base64_encode($generator->getBarcode(strtoupper(Auth::User()->code), $generator::TYPE_CODE_128)) }}"
                                                        alt="">
                                                    <small
                                                        class="font-weight-bold">{{ strtoupper(Auth::User()->code) }}</small>
                                                </div>
                                            </div>
                                            @if (Auth::User()->presence == 1)
                                                <div class="form-group mt-2 text-center">
                                                    <div class="text-center">
                                                        <span class="badge badge-success">Sudah Digunakan</span>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="form-group mt-2 text-center">
                                                    <div class="text-center">
                                                        <span class="badge badge-warning text-white">Belum Digunakan</span>
                                                    </div>
                                                </div>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>

                    @if (Auth::User()->no_reference != null && Auth::User()->confirm == '2')
                        <div class="card-footer text-center">
                            <small class="text-muted">Copyright © E-Ticket 2022</small>
                        </div>
                    @endif
                </div>
        </div>
    </div>
@endsection
