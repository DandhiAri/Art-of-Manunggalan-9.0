@extends('layouts.admin')

@section('titlePage', 'E-Ticket | Dashboard')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard {{ $title }}</h1>
        </div>
        @php
            $role = request()->role ?: 'participants';
        @endphp
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('admin.users', ['role' => $role, 'status' => 'users']) }}" class="text-decoration-none">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pendaftar
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas  fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('admin.users', ['role' => $role, 'status' => 'rejected']) }}"
                    class="text-decoration-none">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Ditolak
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $rejected }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas  fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('admin.users', ['role' => $role, 'status' => 'confirmed']) }}"
                    class="text-decoration-none">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Terkonfirmasi
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $confirmed }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas  fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('admin.users', ['role' => $role, 'status' => 'presenced']) }}"
                    class="text-decoration-none">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Hadir</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $presenced }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="jumbotron  rounded">
                    <h1 class="display-4">Selamat datang!</h1>
                    <p class="lead">Ini adalah sistem informasi pembayaran tiket yang berfungsi memudahkan
                        memanajemen data pemesan tiket .</p>
                    <hr class="my-4">
                    <p>Klik tombol scan untuk melakukan proses penggunaan tiket.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{ route('admin.presence', $role) }}"
                            role="button">Scan</a>
                    </p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Belum Dikonfirmasi</h6>
                        <a href="{{ route('admin.users', ['role' => $role, 'status' => 'unconfirm']) }}"
                            class="m-0 btn">Lihat
                            Semua</a>
                    </div>
                    <!-- Card Body -->
                    @if ($unconfirm->count() > 0)
                        <table class="card-body table table-sm mx-1">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($unconfirm as $uncnfrm)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $uncnfrm->name }}</td>
                                        <td>{{ $uncnfrm->email }}</td>
                                    </tr>
                                @endforeach
                        </table>
                    @else
                        <div class="card-body">
                            <div class="text-center small">
                                <span>
                                    Tidak ada data
                                </span>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
@endsection
