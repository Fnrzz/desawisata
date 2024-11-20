<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">DesaWisata.id</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article') }}">Artikel</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    const navbar = document.querySelector('.navbar');

    window.onscroll = () => {
        if (window.scrollY > 500) {
            navbar.classList.remove('navbar-dark');
            navbar.classList.add('navbar-light');
            navbar.classList.add('bg-white')
        } else {
            navbar.classList.remove('navbar-light');
            navbar.classList.add('navbar-dark');
            navbar.classList.remove('bg-white')
        }
    }
</script>
