@extends('utama.main.main')
@section('container')
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Kurir</h2>
                <h3 class="section-subheading text-muted">Jenis Jenis Jasa Pengiriman.</h3>
            </div>
            <div class="row">
                @forelse ($kurir as $k)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset($k->foto) }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $k->nama_kurir }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $k->jenis }}</div>
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
