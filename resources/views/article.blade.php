@extends('layouts.layout')

@section('content')
    <section id="jumbotron">
        <div class="container">
            <div class="row align-items-center justify-content-center vh-100">
                <div class="col-12 col-md-6 text-center">
                    <h3 class="fw-bold text-white">Selamat datang di halaman artikel DesaWisata.id</h3>
                    <p class="fw-light mt-3 text-white">
                        Temukan berbagai informasi menarik seputar destinasi wisata desa, panduan perjalanan, tips
                        eksplorasi, hingga rekomendasi tempat-tempat tersembunyi yang wajib dikunjungi. Di sini, kamu bisa
                        menikmati cerita-cerita seru dari setiap sudut Indonesia, mulai dari pegunungan hingga pantai, dan
                        mengenal lebih dekat budaya lokal yang unik. Mari jelajahi lebih dalam dan temukan inspirasi
                        petualanganmu berikutnya!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="article">
        <div class="container py-5">
            <div class="row mb-3">
                <div class="col">
                    <h3 class="fw-bold">Artikel</h3>
                </div>
            </div>
            <div class="row mb-3 justify-content-end">
                <div class="col-lg-3 col-12">
                    <form action="{{ route('article') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" value="{{ request('search') }}"
                                placeholder="Cari artikel">
                            <button class="btn btn-primary">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($articles as $article)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('storage/images/' . $article->image) }}" class="card-img-top"
                                alt="{{ $article->title }}" style="height: 250px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                            </div>
                            <div class="card-footer bg-white border-0 py-3">
                                <p class="card-text text-muted">{{ $article->category->name }}</p>
                                <a href="{{ route('article.show', $article->id) }}"
                                    class="text-primary text-decoration-none">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
