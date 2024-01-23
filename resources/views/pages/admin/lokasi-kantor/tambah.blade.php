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
                <form action="{{ route('lokasi_kantor.simpan') }}" method="POST">
                    @csrf


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
                        <label class="form-label">Latitude:</label>
                        <input type="text" name="latitude" class="form-control" placeholder="Masukan latitude">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Longitude:</label>
                        <input type="text" name="longitude" class="form-control" placeholder="Masukan longitude">
                    </div>



                    <button class="btn btn-sm btn-primary" type="submit">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
