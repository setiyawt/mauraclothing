@extends('layout.main')

@section('content')

<section id="hero">
    <h4>Penawaran Terbaru</h4>
    <h2>Dapatkan produk terbaru</h2>
    <h1>Di bulan Juni</h1>
    <p>Segera beli sebelum kehabisan!</p>
    <button onclick="location.href='/shop'" type="button">Belanja Sekarang</button>
</section>

<br>

<section id="product1" class="section-p1">
    <h2>Kategori Produk</h2>
    <p>Segera miliki koleksi terbaru dari Maura Clothing</p>
    @include('site.kategori')

</section>


<section id="banner" class="section-1">
    <!-- <h4>Repair Service</h4>
        <h2>Up to <span>30% Off</span> - All items</h2>
        <button class="normal">Explore More</button> -->
</section>

<section id="product1" class="section-p1">
    <h2>Produk Terbaru</h2>
    <p>Cari tahu produk terbaru kami yang akan membuat Anda selalu terdepan dalam tren terkini. Dapatkan pengalaman terbaik dengan produk-produk terbaru yang selalu memenuhi selera Anda</p>
    @include('site.produk')
</section>

@endsection