@extends('layouts.layout')

@section('content')
    <section id="jumbotron">
        <div class="container">
            <div class="row align-items-center justify-content-center vh-100">
                <div class="col-12 col-md-6 text-center">
                    <h3 class="fw-bold text-white">Selamat Datang di DesaWisata.id</h3>
                    <p class="fw-light mt-3 text-white">
                        Temukan keindahan tersembunyi desa-desa wisata di seluruh Indonesia. Jelajahi alam yang asri, budaya
                        yang kaya, dan keramahan lokal yang tak terlupakan. Mulai petualangan Anda sekarang dan rasakan
                        pengalaman wisata yang autentik hanya di DesaWisata.id!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-lg-2 align-items-center">
                <div class="col">
                    <h3 class="fw-bold">Tentang Kami</h3>
                    <p class="fw-light mt-3">
                        DesaWisata.id adalah platform digital yang menghubungkan para wisatawan dengan keindahan desa-desa
                        wisata di seluruh Indonesia. Melalui situs ini, kami menyediakan informasi lengkap tentang
                        destinasi, kegiatan, budaya lokal, akomodasi, dan kuliner khas dari berbagai desa. Dengan fokus pada
                        pengalaman otentik dan mendukung pariwisata berkelanjutan, DesaWisata.id membantu wisatawan
                        menemukan pesona desa Indonesia yang belum banyak terjamah, sambil mendukung perekonomian lokal dan
                        menjaga kelestarian lingkungan. Temukan petualangan baru dan jelajahi pesona tersembunyi di
                        desa-desa wisata terbaik Indonesia bersama kami!
                    </p>
                </div>
                <div class="col">
                    <img src="{{ asset('images/parkesit.jpg') }}" class="img-fluid rounded-4 w-100 " alt="About Us">
                </div>
            </div>
        </div>
    </section>
    <section id="mengapa">
        <div class="container py-5">
            <div class="row text-center">
                <h3 class="fw-bold text-white">Mengapa DesaWisata.id?</h3>
                <p class="text-white mt-3 fw-light">
                    DesaWisata.id adalah pilihan terbaik untuk menjelajahi pesona otentik desa-desa wisata Indonesia. Kami
                    menawarkan pengalaman yang unik dengan berfokus pada keindahan alam, budaya lokal, serta keramahan
                    masyarakat setempat. Dengan akses informasi yang mudah dan terpercaya, kami mempermudah perjalanan Anda
                    untuk menemukan destinasi yang belum banyak terjamah. Selain itu, melalui platform kami, Anda juga turut
                    mendukung perekonomian lokal dan upaya pelestarian lingkungan di desa-desa yang Anda kunjungi. Pilih
                    DesaWisata.id untuk perjalanan yang lebih bermakna dan autentik!
                </p>
                <div>
                    <a href="" class="btn btn-primary mt-3 rounded-4 py-2 px-3">Lihat Rekomendasi Destinasi</a>
                </div>
            </div>
        </div>
    </section>
@endsection
