<div class="pro-container">
    @foreach ($kategori as $hasil)
    @if($kategori->isNotEmpty())
    <div class="pro">
        <a href="/shop_by_kategori/{{ $hasil->id }}">
            <img src="{{ asset('global/kategori') }}/{{ $hasil->category_image }}" width="30%" margin="20px" alt="">
            <div class="des">
                <h5 style="text-align:center">{{ $hasil->category_name }}</h5>
            </div>
        </a>


    </div>
    @endif
    @endforeach
</div>