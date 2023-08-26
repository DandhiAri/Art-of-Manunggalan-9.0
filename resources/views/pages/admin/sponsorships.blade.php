@extends('layouts.admin')
@section('titlePage', 'E-Ticket | Sponsorship')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Sponsorship</h1>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Sponsorship</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.sponsorship.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" placeholder="" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="logo" class="form-label">Logo (max 1 mb)</label>
                                    <input type="file" class="form-control" id="logo" placeholder="Logo" name="logo">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="form-control btn btn-primary" value="Tambahkan">
                                </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Sponsorships</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5">No</th>
                                        <th>Nama</th>
                                        <th>Logo</th>
                                        <th align="center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sponsorships as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$data->name}}</td>
                                        <td><img src="{{url($data->logo)}}" alt="" srcset="" height="50px"></td>
                                        <td><a href="{{route('admin.sponsorship.destroy',$data->id)}}"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                                            <a href=""><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
