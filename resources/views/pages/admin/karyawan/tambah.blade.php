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

            </div>
            <div class="card-body">
                <form action="{{ route('karyawan.simpan') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label class="form-label">Nama:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan nama">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Jabatan:</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Masukan jabatan">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">No hp:</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukan no hp">
                    </div>



                    <div class="form-group mb-3">
                        <label class="form-label">Alamat:</label>
                        <textarea name="alamat_pribadi" class="form-control" cols="30" rows="10"></textarea>
                    </div>


                    <div class="form-group mb-3">
                        <label class="form-label">Dapertemen:</label>
                        <select name="dapertemen_id" class="form-control">
                            <option value="">-Pilih Dapertemen-</option>
                            @foreach ($dapertemen as $dapertemen)
                            <option value="{{ $dapertemen->id }}">{{ $dapertemen->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Divisi:</label>
                        <input type="text" name="divisi" class="form-control" placeholder="Masukan divi">
                    </div>

                    <button class="btn btn-sm btn-primary" type="submit">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
