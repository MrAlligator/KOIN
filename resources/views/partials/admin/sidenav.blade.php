<div class="min-height-300 bg-primary position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/administrator" target="_blank">
            <div class="text-center">
                <img src="/assets/assets-user/img/logo.png" class="navbar-brand-img h-500" alt="main_logo">
            </div>
        </a>
    </div>
    <hr class="horizontal dark mt-1">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Selamat Datang</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $is_active === 'adm' ? 'active' : '' }}" href="/administrator">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Kontrol Data</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $is_active === 'imp' ? 'active' : '' }}" href="/administrator/importir">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Importir</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $is_active === 'inq' ? 'active' : '' }}" href="/administrator/permintaan">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Permintaan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $is_active === 'art' ? 'active' : '' }}" href="/administrator/artikel">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Artikel</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Kontrol Forum</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tanggapan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Komentar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pertanyaan</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Kontrol Halaman</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/profile.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/sign-in.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Kontrol Log</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/sign-up.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <style type="text/css">
                h1,
                h2,
                p,
                a {
                    font-family: sans-serif;
                    font-weight: normal;
                }

                .jam_analog_malasngoding {
                    background: #e7f2f7;
                    position: relative;
                    width: 160px;
                    height: 160px;
                    border: 12px solid #52b6f0;
                    border-radius: 50%;
                    padding: 10px;
                    margin: 10px auto;
                }

                .xxx {
                    height: 100%;
                    width: 100%;
                    position: relative;
                }

                .jarum {
                    position: absolute;
                    width: 50%;
                    background: #232323;
                    top: 50%;
                    transform: rotate(90deg);
                    transform-origin: 100%;
                    transition: all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1);
                }

                .lingkaran_tengah {
                    width: 18px;
                    height: 18px;
                    background: #232323;
                    border: 4px solid #52b6f0;
                    position: absolute;
                    top: 55%;
                    left: 55%;
                    margin-left: -16px;
                    margin-top: -16px;
                    border-radius: 50%;
                }

                .jarum_detik {
                    height: 2px;
                    border-radius: 1px;
                    background: #F0C952;
                }

                .jarum_menit {
                    height: 4px;
                    border-radius: 4px;
                }

                .jarum_jam {
                    height: 8px;
                    border-radius: 4px;
                    width: 35%;
                    left: 15%;
                }
            </style>
            <div class="jam_analog_malasngoding">
                <div class="xxx">
                    <div class="jarum jarum_detik"></div>
                    <div class="jarum jarum_menit"></div>
                    <div class="jarum jarum_jam"></div>
                    <div class="lingkaran_tengah"></div>
                </div>
                &nbsp;&nbsp;
                <div class="text-center">
                    <h6>{{ date('d-m-Y H:i') }} WIB</h6>
                </div>
            </div>
        </div>
    </div>
</aside>
