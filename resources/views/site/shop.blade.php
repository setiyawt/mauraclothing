@extends('layout.main')

@section('content')

    <section id="page-header">
        <h2>Segera Dapatkan Produk Kami !</h2>
        <p>Dapatkan Penawaran Menarik di Setiap Pembelian</p>
    </section>

    <section id="product1" class="section-p1">
        <h2>Produk Terkait</h2>
        <p>Produk terbaru di bulan Juni</p>
        @include('site.produk')
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>

@endsection
