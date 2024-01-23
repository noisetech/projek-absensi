@extends('layouts.admin')

@section('title', 'Dapertemen')
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
                            <li class="breadcrumb-item active">Lokasi Kantor</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Lokasi Kantor</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->




        <div class="card shadow">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <span>List Lokasi Kantor</span>

                    <a href="{{ route('lokasi_kantor.tambah') }}" class="btn btn-sm btn-primary">
                        Tambah
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless" style="width: 100%" id="datatable">
                        <thead>
                            <tr>

                                <th>Dapertemen</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lokasi_kantor as $lokasi_kantor)
                            <tr>
                                <td>{{ $lokasi_kantor->dapertemen }}</td>
                                <td>{{ $lokasi_kantor->latitude }}</td>
                                <td>{{ $lokasi_kantor->longitude }}</td>
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
