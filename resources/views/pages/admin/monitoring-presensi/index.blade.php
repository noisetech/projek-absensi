@extends('layouts.admin')

@section('title', 'Monitoring Presensi')
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
                            <li class="breadcrumb-item active">Monitoring Presensi</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Monitoring Presensi</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->





        <div class="card shadow">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <span>List Presensi</span>

                    <a href="{{ route('dapertemen.tambah') }}" class="btn btn-sm btn-primary">
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
                                <th>Jabatan</th>
                                <th>Tanggal Absensi</th>
                                <th>Absen Masuk</th>
                                <th>Lokasi</th>
                                <th>Foto In</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $data->karyawan }}</td>
                                    <td>{{ $data->jabatan }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->tgl_presensi)->translatedFormat('d F Y') }}</td>
                                    <td>{{ $data->jam_in }}</td>
                                    <td>{{ $data->lokasi }}</td>

                                    <td>
                                        <img src="{{ Storage::url('upload/presensi/'. $data->foto_in) }}" alt="" class="img-thumbnail" width="150">
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start">

                                            <a href="" class="btn btn-sm btn-primary">
                                                <i class="uil-check-circle"></i> Approval
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
