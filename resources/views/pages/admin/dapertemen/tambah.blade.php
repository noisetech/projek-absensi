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
                            <li class="breadcrumb-item active">Dapertemen</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dapertemen</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="card shadow">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form action="{{ route('dapertemen.simpan') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label class="form-label">Nama:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan nama">
                    </div>




                    <button class="btn btn-sm btn-primary" type="submit">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
