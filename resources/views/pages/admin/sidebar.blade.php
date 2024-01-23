<ul class="side-nav mt-4">
    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks"
            class="side-nav-link collapsed">
            <i class="uil-clipboard-alt"></i>
            <span> Master </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarTasks" style="">
            <ul class="side-nav-second-level">

                <li>
                    <a href="{{ route('lokasi_kantor') }}">Lokasi Kantor</a>
                </li>
                <li>
                    <a href="{{ route('dapertemen') }}">Dapertemen</a>
                </li>

                <li>
                    <a href="{{ route('karyawan') }}">Karyawan</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#pengaturan" aria-expanded="false" aria-controls="pengaturan"
            class="side-nav-link collapsed">
            <i class="uil-clipboard-alt"></i>
            <span> Pengaturan </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="pengaturan" style="">
            <ul class="side-nav-second-level">

                <li>
                    <a href="{{ route('jam_kerja') }}">Jam Kerja</a>
                </li>

            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a href="apps-chat.html" class="side-nav-link">
            <i class="uil-book-alt"></i>
            <span> Data Izin/Sakit </span>
        </a>
    </li>

    <li class="side-nav-item">
        <a href="{{ route('monitoring_presensi') }}" class="side-nav-link">
            <i class="uil-monitor"></i>
            <span> Monitoring Presensi </span>
        </a>
    </li>


    <li class="side-nav-item">
        <a href="apps-chat.html" class="side-nav-link">
            <i class="uil-chart-line"></i>
            <span> Laporan </span>
        </a>
    </li>


    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#manajemenUser" aria-expanded="false" aria-controls="manajemenUser"
            class="side-nav-link collapsed">
            <i class="uil-clipboard-alt"></i>
            <span> Manajemen User </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="manajemenUser" style="">
            <ul class="side-nav-second-level">

                <li>
                    <a href="#">Permission</a>
                </li>

                <li>
                    <a href="#">Role</a>
                </li>

                <li>
                    <a href="#">User</a>
                </li>

            </ul>
        </div>
    </li>



</ul>
