@extends('layouts.admin')

@section('title', 'Jam Kerja')
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
                            <li class="breadcrumb-item active">Jam Kerja</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Jam Kerja</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->




        <div class="card shadow">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <span>List Jam Kerja</span>

                    <a href="{{ route('jam_kerja.tambah') }}" class="btn btn-sm btn-primary">
                        Tambah
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless" style="width: 100%" id="datatable">
                        <thead>
                            <tr>

                                <th>Kode</th>
                                <th>Nama JK</th>
                                <th>Awal Jam Masuk</th>
                                <th>Jam Masuk</th>
                                <th>Akhir Jam Masuk</th>
                                <th>Jam Pulang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jam_kerja as $item)
                                <tr>
                                    <td>{{ $item->kode_jk }}</td>
                                    <td>{{ $item->nama_jk }}</td>
                                    <td>{{ $item->awal_jam_masuk }}</td>
                                    <td>{{ $item->jam_masuk }}</td>
                                    <td>{{ $item->akhir_jam_masuk }}</td>
                                    <td>{{ $item->jam_pulang }}</td>
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
