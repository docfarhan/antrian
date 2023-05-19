@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12
        ">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="alert alert-light d-flex align-items-center mb-5" role="alert">
                            <i class="bi-info-circle text-success me-3 fs-3"></i>
                            <div>
                                Selamat Datang di <strong>Aplikasi Antrian Berbasis Web</strong>. Silahkan pilih halaman yang ingin ditampilkan.
                            </div>
                        </div>


                        <div class="row gx-5">
                            <!-- link halaman nomor antrian -->
                            <div class="col-lg-4 mb-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-5">
                                <div class="feature-icon-1 bg-success bg-gradient mb-4">
                                    <i class="bi-people"></i>
                                </div>
                                <h3>Cetak Nomor Antrian</h3>
                                <p></p>
                                <!-- <p class="mb-4">Halaman Nomor Antrian digunakan pengunjung untuk mengambil nomor antrian.</p> -->
                                <a href="{{ url('/nomor-antrian') }}" class="btn btn-success rounded-pill px-4 py-2">
                                    Tampilkan <i class="bi-chevron-right ms-2"></i>
                                </a>
                                </div>
                            </div>
                            </div>
                            <!-- link halaman panggilan antrian -->
                            <div class="col-lg-4 mb-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-5">
                                <div class="feature-icon-1 bg-success bg-gradient mb-4">
                                    <i class="bi-mic"></i>
                                </div>
                                <h3>Antrian PTSP</h3>
                                <p></p>
                                <!-- <p class="mb-4">Halaman Panggilan Antrian digunakan petugas loket untuk memanggil antrian pengunjung.</p> -->
                                <a href="{{ url('/panggilan-antrian') }}" class="btn btn-success rounded-pill px-4 py-2">
                                    Tampilkan <i class="bi-chevron-right ms-2"></i>
                                </a>
                                </div>
                            </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-5">
                                <div class="feature-icon-1 bg-success bg-gradient mb-4">
                                    <i class="bi-mic"></i>
                                </div>
                                <h3>Antrian Dukcapil</h3>
                                <p></p>
                                <!-- <p class="mb-4">Halaman Panggilan Antrian digunakan petugas loket untuk memanggil antrian pengunjung.</p> -->
                                <a href="panggilan-antrian/index_dukcapil.php" class="btn btn-success rounded-pill px-4 py-2">
                                    Tampilkan <i class="bi-chevron-right ms-2"></i>
                                </a>
                                </div>
                            </div>
                            </div>

                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
