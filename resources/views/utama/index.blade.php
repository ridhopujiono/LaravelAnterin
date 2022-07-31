@extends('utama.main.main')
@section('container')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Bersama Kita!</div>
            <div class="masthead-heading text-uppercase"> Pengantaran Sangat Cepat</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#layanan">TELLO</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="layanan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Layanan</h2>
                <h3 class="section-subheading text-muted">Kemanapun Di seluruh indonesia pakai <b>ANTERIN</b></h3>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-people-carry fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Pengiriman Barang</h4>
                    <p class="text-muted">Kirim barang kemapapun di seluluruh indonesia sangan cepat hanya menggunakan
                        jasa <b><i>ANTERIN</i></b></p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-truck fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Jemput Paket</h4>
                    <p class="text-muted">Penjemputan paket dimanapun dengan <b><i>ANTERIN</i></b> </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-sm-12 my-12">
                    <a href="https://facebook.com/sutraganda"><img class="img-fluid img-brand d-block mx-auto"
                            src="{{ asset('assets/img/logos/facebook.svg') }}" alt="facebook sutra ganda" /></a>
                </div>
            </div>
        </div>
    </div>
@endsection
