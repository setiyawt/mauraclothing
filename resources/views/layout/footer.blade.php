<footer class="section-p1">
    <div class="col">
    <img class="logo" src="{{ asset('global/css/img') }}/logowithtitle.png" alt="Maura Clothing Logo">
    <h4>Contact</h4>
    <p><strong>Alamat: </strong><a href="https://goo.gl/maps/FpfkipchQeSgZRYK9" target="_blank">Gegerkalong, Bandung</a></p>
    <p><strong>Nomor Telepon: </strong><a href="tel:+62222010423"> +62 22 2010423</a></p>
        <div class="follow">
            <h4>Ikuti Kami</h4>
            <div class="icon">
                <a href="https://twitter.com/KamuKenalLoh"><i class="fab fa-twitter"></i></a>
                <a href="https://web.facebook.com/ariq.bagussugiharto/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/ariq_b.s/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('contact') }}">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="{{ route('login') }}">Sign In</a>
        <a href="{{ route('register') }}">Register</a>
        <a href="{{ route('logout') }}">Logout</a>
    </div>

    <div class="copyright">
        <p>© 2023 Maura Clothing. All rights reserved.</p>
    </div>
</footer>
