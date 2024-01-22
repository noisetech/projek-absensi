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


        <div class="card shadow">
            <div class="card-header">
                <div class="d-flex justify-content-between">
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
                                <th>Jabatal</th>
                                <th>No telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $karyawan)
                            <tr>
                                <td>{{ $karyawan->nama }}</td>
                                <td>{{ $karyawan->jabatan }}</td>
                                <td>{{ $karyawan->no_hp }}</td>
                                <td>{{ $karyawan->alamat_pribadi }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>

                                    <a href="" class="btn btn-sm btn-primary">
                                        Hapus
                                    </a>
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
