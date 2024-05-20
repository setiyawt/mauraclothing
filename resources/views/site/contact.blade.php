@extends('layout.main')

@section('content')

    <section id="page-header" class="about-header">
        <h2>Kontak Kami</h2>
        <p>Kirim Pesan Kepada Kami !</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Datang ke pop-up store kami untuk melihat produk secara langsung</h2>
            <h3>Wilayah Jualan Kami</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p><a href="https://goo.gl/maps/FpfkipchQeSgZRYK9" target="_blank">Gegerkalong, Bandung</a></p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p><a href="mailto:mauraclothing@gmail.com">mauraclothing@gmail.com</a></p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p><a href="tel:+62222010423">+62 22 2010423</a></p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Senin - Jumat : 09.00 - 17.00 WIB</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17065.76764200585!2d107.5787603403374!3d-6.870052464052503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e697751c843d%3A0xf1b8a7867349f7a3!2sGegerkalong%2C%20Sukasari%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1683689866017!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            @if(!Auth::check())
                <h2>We love to hear from you</h2>
                <input type="text" placeholder="Your Name">
                <input type="text" placeholder="E-mail">
                <input type="text" name="judul" placeholder="Subject">
                <textarea name="pesan" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <button class="normal">Submit</button>
            @else
                <h2>We love to hear from you {{ auth()->user()->name }}!</h2>
                <input type="text" name="judul" placeholder="Subject">
                <textarea name="pesan" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <button class="normal">Submit</button>
            @endif
        </form>
    </section>

@endsection
