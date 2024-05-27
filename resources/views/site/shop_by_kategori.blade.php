@extends('layout.main')

@section('content')

<section id="page-header">
    <h2>Segera Dapatkan Produk Kami !</h2>
    <p>Dapatkan Penawaran Menarik di Setiap Pembelian</p>
</section>

<section id="product1" class="section-p1">
    <h2>Kategori Terkait</h2>
    <p>Produk terbaru di bulan Juni</p>
    @include('site.produk_by_kategori')'
</section>

@endsection