@extends('layouts.blank')

@section('content')
    <style>
        .webcam-capture,
        .webcam-capture video {
            display: inline-block;
            width: 100% !important;
            margin: auto;
            height: auto !important;
            border-radius: 15px;
        }
    </style>

    <div class="row" style="margin-top: 70px">
        <div class="col">
            <input type="hidden" id="lokasi">
            <div class="webcam-capture"></div>
        </div>
    </div>

    <div class="row justify-content-center">
        <button id="takeAbsen" class="btn btn-sm btn-primary">
            <ion-icon name="camera-outline"></ion-icon> Absen Masuk
        </button>
    </div>

    <div class="row mt-5">
        <div class="col">
            <div id="map" style="height: 380px; width: 400px">

            </div>
        </div>
    </div>
@endsection


@push('script')
    <script>
        // CAMERA SETTINGS.
        Webcam.set({
            width: 480,
            height: 500,
            image_format: 'jpeg',
            jpeg_quality: 80
        });
        Webcam.attach('.webcam-capture');

        var lokasi = document.getElementById('lokasi');

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        }

        function successCallback(position) {
            lokasi.value = position.coords.latitude + "," + position.coords.longitude;
            var map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 16);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            var marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);

            var circle = L.circle([{{ $lokasi_karyawan->latitude }}, {{ $lokasi_karyawan->longitude }}], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 20
            }).addTo(map);
        }

        function errorCallback() {

        }

        $('#takeAbsen').click(function(e) {
            Webcam.snap(function(uri) {
                image = uri
            });

            var lokasi = $('#lokasi').val();


            $.ajax({
                url: '/simpan/presensi',
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    image: image,
                    lokasi: lokasi
                },
                cache: false,
                success: function(response) {
                    if (response.status == 'success') {
                        Swal.fire({
                            icon: response.status,
                            title: response.title,
                            text: response.text,
                            showConfirmButton: true,
                            confirmButtonText: "OK",
                            timer: 3000,
                        }).then(function() {
                            window.location.href = '/dashboard';
                        });
                    }
                    if (response.status == 'error radius') {
                        Swal.fire({
                            icon: "error",
                            title: response.title,
                            text: response.text,
                        });
                    }

                }
            });
        })
    </script>
@endpush
