@extends('layouts.admin')

@section('title', 'Karyawan')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li> --}}
                            <li class="breadcrumb-item active">Karyawan</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Karyawan</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->



        <form action="" method="GET">
            @csrf

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-3">

                        <input type="text" name="nama" class="form-control" placeholder="Masukan nama">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mb-3">

                        <select name="" class="form-control">
                            <option value="">-Pilih Dapertemen-</option>
                            @foreach ($dapertemen as $dapertemen)
                            <option value="{{ $dapertemen->id }}">{{ $dapertemen->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group mb-3">
                        <button class="btn btn-sm btn-primary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39M11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7" />
                            </svg>
                            Cari
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="card shadow">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <span>List Karyawan</span>

                    <a href="{{ route('karyawan.tambah') }}" class="btn btn-sm btn-primary">
                        Tambah
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless" style="width: 100%" id="datatable">
                        <thead>
                            <tr>

                                <th>Nama</th>
                                <th>Dapertemen</th>
                                <th>Divisi</th>
                                <th>Jabatan</th>
                                <th>No telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $karyawan)
                                <tr>
                                    <td>{{ $karyawan->nama }}</td>
                                    <td>{{ $karyawan->dapertemen }}</td>
                                    <td>{{ $karyawan->divisi }}</td>
                                    <td>{{ $karyawan->jabatan }}</td>
                                    <td>{{ $karyawan->no_telepon }}</td>
                                    <td>{{ $karyawan->alamat }}</td>
                                    <td>
                                        <div class="d-flex justify-content-start">
                                            <a href="" class="btn btn-sm btn-primary mx-1">
                                                Edit
                                            </a>

                                            <a href="" class="btn btn-sm btn-primary">
                                                Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
