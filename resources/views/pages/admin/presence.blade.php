@extends('layouts.admin')

@section('titlePage', 'E-Ticket | Presence')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Scan Tiket {{ $title }}</h1>
        <p class="mb-4"></p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Scan Tiket {{ $title }}</h6>
            </div>
            <form method="POST">
                @csrf
                @method('POST')
                <div class="card-body">
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">Barcode</label>
                        <div class="col-sm-10">
                            <input tabindex="1" type="text" class="form-control" name="code" id="code"
                                placeholder="Code" autocomplete="off" autofocus="true"
                                onkeyup="if(this.value.length >= 12) {this.form.submit()}" onfocus="this.form.reset()">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        @if ($user)
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Diri</h6>
                </div>
                <div class="card-body row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input readonly type="text" value="{{ $user->name }}" class="form-control">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="nohp">Nomor HP</label>
                                <input readonly type="tel" class="form-control" value="{{ $user->telp }}">
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Email</label>
                                <input readonly type="email" class="form-control" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Sebagai</label>
                            <input readonly type="text" value="{{ $title }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="code">Barcode</label>
                            @php
                                $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                            @endphp
                            <div class="text-center">
                                <img class="img-fluid w-100"
                                    src="data:image/png;base64,{{ base64_encode($generator->getBarcode(strtoupper($user->code), $generator::TYPE_CODE_128)) }}"
                                    alt="">
                                <small class="font-weight-bold">{{ strtoupper($user->code) }}</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">No Reference</label>
                            <input readonly id="no_reference" type="text" name="no_reference"
                                value="{{ $user->no_reference }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" >
                            <label for="name">Bukti Pembayaran</label>
                            <img src="{{ asset($user->payment) }}" class="d-block w-50 rounded">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="button" tabindex="1" class="btn btn-primary" data-dismiss="modal" data-toggle="modal"
                        data-target="#modalConfirmPresence">
                        Gunakan Tiket
                    </button>
                </div>

                {{-- konfirmasi modal --}}
                <div class="modal fade" id="modalConfirmPresence" data-backdrop="static" data-keyboard="false"
                    aria-labelledby="modalConfirmPresenceLabel" aria-hidden="true" tabindex="1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalConfirmPresenceLabel">Yakin</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST">
                                @csrf
                                @method('POST')
                                <div class="modal-body">
                                    <input readonly hidden type="text" name="presenced" value="1">
                                    <input readonly hidden type="text" name="code"
                                        value="{{ strtoupper($user->code) }}">
                                    Yakin ingin menggunakan tiket ini ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" tabindex="1"
                                        data-toggle="modal">
                                        Kembali
                                    </button>
                                    <button type="submit" name="confirm" value="3" tabindex="1"
                                        class="btn btn-primary">Gunakan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection
