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

            </div>
            <div class="card-body">
                <form action="{{ route('jam_kerja.simpan') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label">Kode:</label>
                                <input type="text" name="kode_jk" class="form-control" placeholder="Masukan kode">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label">Nama:</label>
                                <input type="text" name="nama_jk" class="form-control" placeholder="Masukan nama">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Awal Jam Masuk:</label>
                                <input type="time" class="form-control" name="awal_jam_masuk" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Jam Masuk:</label>
                                <input type="time" class="form-control" name="jam_masuk" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Jam Akhir Masuk:</label>
                                <input type="time" class="form-control" name="akhir_jam_masuk" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Jam Pulang:</label>
                                <input type="time" class="form-control" name="jam_pulang" class="form-control">
                            </div>
                        </div>
                    </div>



                    <button class="btn btn-sm btn-primary" type="submit">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
