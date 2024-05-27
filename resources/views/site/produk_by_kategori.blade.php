<div class="pro-container">
    @foreach ($produk as $hasil)
    @if($hasil->category_id == $category_id)
    <div class="pro">
        <img src="{{ asset('global/produk') }}/{{ $hasil->product_image }}" width="30%" margin="20px" alt="">
        <div class="des">
            <h5>{{ $hasil->product_name }}</h5>
            <div>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>Rp. <span>{{ number_format($hasil->product_price, 2) }}</span></h4>
        </div>
        <a href="/shop/{{ $hasil->id }}/detailproduk"><i class="fal fa-shopping-cart cart"></i></a>
    </div>
    @endif
    @endforeach
</div>