<section id="header">
    <a href="{{ route('index') }}">
        <img class="logo" src="{{ asset('global/css/img') }}/logowithtitle.png" alt="Maura Clothing Logo">
    </a>
    <div>
        <ul id="navbar">
            <li><a href="{{ route('index') }}" class="{{Request::is('/')?'active':''}}">Home</a></li>
            <li><a href="{{ route('shop') }}" class="{{Request::is('shop')?'active':''}}">Shop</a></li>
            <li><a href="{{ route('about') }}" class="{{Request::is('about')?'active':''}}">About</a></li>
            <li><a href="{{ route('contact') }}" class="{{Request::is('contact')?'active':''}}">Contact</a></li>
            @if(!Auth::check())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @else
            <li style="padding:0px 10px 0px 0px;">
                <a href="/profileuser/{{ auth()->user()->id }}"><img src="{{ asset('global/user') }}/{{ auth()->user()->image }}" width="40px" height="40px" style="border-radius: 100%;display:inline-block;"></a>
            </li>
            <div class="dropdown">
                <li style="padding:25px 0px 0px 0px;">
                    <a href="/profileuser/{{ auth()->user()->id }}">{{ auth()->user()->name }}</a>
                </li>
                <li></li>
                <div class="dropdown-content" style="background-color: #fff;">
                    <a href="/profileuser/{{ auth()->user()->id }}">Profil</a>
                    <a href="{{ route('logout') }}">Keluar</a>
                </div>
            </div>
            @endif
        </ul>
    </div>
    <div id="mobile">
        <i id="bar" class="fas fa-outdent"></i>
        <ul id="mobile-menu" class="dropdown-menu">
            <li><a href="{{ route('index') }}" class="{{Request::is('/')?'active':''}}">Home</a></li>
            <li><a href="{{ route('shop') }}" class="{{Request::is('shop')?'active':''}}">Shop</a></li>
            <li><a href="{{ route('about') }}" class="{{Request::is('about')?'active':''}}">About</a></li>
            <li><a href="{{ route('contact') }}" class="{{Request::is('contact')?'active':''}}">Contact</a></li>
            @if(!Auth::check())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @else
            <li><a href="/profileuser/{{ auth()->user()->id }}">Profil</a></li>
            <li><a href="{{ route('logout') }}">Keluar</a></li>
            @endif
        </ul>
    </div>
</section>

<style>
    #mobile {
        position: relative;

    }

    #mobile-menu {
        display: none;
        position: absolute;
        top: 100%;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 5px 0;
        list-style: none;
        justify-content: center;
    }

    .dropdown-menu li a {
        margin: 30px;
    }

    #mobile-menu.active {
        display: block;
    }

    #bar {
        cursor: pointer;
        margin: 20px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var barIcon = document.getElementById('bar');
        var mobileMenu = document.getElementById('mobile-menu');

        barIcon.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
        });
    });
</script>