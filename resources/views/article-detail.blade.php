@extends('layouts.layout')

@section('content')
    <section id="jumbotron">
        <div class="container">
            <div class="row align-items-center justify-content-center vh-100">
                <div class="col-12 col-md-6 text-center">
                    <h3 class="fw-bold text-white">Baca Lebih Lanjut di Detail Artikel DesaWisata.id</h3>
                    <p class="fw-light mt-3 text-white">
                        Nikmati ulasan lengkap tentang destinasi wisata, tips perjalanan, dan keunikan lokal yang belum
                        banyak diketahui. Di halaman ini, kamu akan menemukan informasi mendalam, foto-foto inspiratif,
                        serta panduan praktis untuk merencanakan petualanganmu. Yuk, jelajahi setiap detailnya dan temukan
                        pengalaman wisata yang lebih autentik di setiap sudut desa Indonesia!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="article">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <img src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->title }}"
                        class="w-100 mb-3 rounded-4">

                    <h5 class="fw-bold text-primary">{{ $article->category->name }}</h5>
                    <h3 class="fw-bold">{{ $article->title }}</h3>
                    <p class="fw-light mt-3 text-muted text-justify">
                        {{ $article->body }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
