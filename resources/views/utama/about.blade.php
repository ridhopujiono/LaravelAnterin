@extends('utama.main.main')
@section('container')
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Perjalanan ANTERIN</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('assets/img/about/1.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009-2011</h4>
                            <h4 class="subheading">Awal Kami yang sederhana</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Awal Mula Berdirinya Perusahaan ANTERIN ini dulu berada di kota Tuban
                                Provinsi Jawatimur, kami mulai mengantar dari rumah ke rumah!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('assets/img/about/2.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">Sebuah Agensi lagi</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Dimana Pada tahun ini kami resmi Mendirikan perusahaan ANTERIN dan sudah
                                mulai mengantarkan barang keluar kota!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('assets/img/about/3.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Perubahan ke Pelayanan Penuh</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Yang dimana pada akhir tahun 2015 kami menambahkan beberapa layanan
                                pengiriman sehingga asyarakat dapat memilih berbagai layanan pengiriman!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('assets/img/about/4.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Ekspansi fase ke 2</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Pada tahun ini kami sudah mulai mengantarkan paket ke luar negri</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Menjadi Bagian
                            <br />
                            dari kami
                            <br />
                            Segera!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
