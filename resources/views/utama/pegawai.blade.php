@extends('utama.main.main')
@section('container')
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Pegawai</h2>
                <h3 class="section-subheading text-muted">Ini adalah daftar pegawai Anterin.</h3>
            </div>
            <div class="row">
                @forelse ($pegawai as $k)
                    <div class="col-sm-3 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset($k->foto) }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $k->nama_pegawai }}</div>
                            </div>
                        </div>
                    </div>
            </div>
        @empty
            <div class="col-md-12">
                <div class="alert alert-warning">Belum ada data kurir</div>
            </div>
            @endforelse
        </div>
    </section>
@endsection
