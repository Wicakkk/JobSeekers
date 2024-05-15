<div class="container">
    <!-- Main box -->
    <div class="main-box">
        <!--Nav Outer -->
        <div class="nav-outer d-flex justify-content-between align-items-center">
            <div class="logo-box">
                @if(Request::is('/'))
                    <div class="logo"><a href="/"><img src="{{ asset('images/logo-didamelid-1.png') }}" alt="" title=""></a></div>
                @else
                    <div class="logo"><a href="/"><img src="{{ asset('images/logo-didamelid-2.png') }}" alt="" title=""></a></div>
                @endif
            </div>
            <div class="outer-box ml-auto">
                <nav class="nav main-menu">
                    <ul class="navigation" id="navbar">
                        <li class="">
                            <a href="/">Beranda</a>
                        </li>
                        <li class="">
                            <a href="/job">Lowongan Pekerjaan</a>
                        </li>
                    </ul>
                </nav>
                <div class="btn-box">
                    @if (Request::is('/'))
                        @auth
                            <a href="{{ route('dashboard') }}"><span class="user-name" style="color: white">{{ Auth::user()->name }}</span></a>
                        @else
                            <a href="{{ route('login') }}" class="theme-btn btn-style-three">Login</a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Main Box -->

<!-- Sticky Header  -->
<div class="sticky-header">
    <div class="auto-container">
        <div class="main-box">
            <div class="logo-box">
                <div class="sticky-logo"><a href="/"><img src="{{ asset('images/logo-didamelid-2.png') }}" alt="" title=""></a></div>
            </div>
            <!--Keep This Empty / Menu will come through Javascript-->
        </div>
    </div>
</div>
<!-- End Sticky Menu -->

<!-- Mobile Header -->
<div class="mobile-header">
    <div class="logo"><a href="/"><img src="{{ asset('images/logo-didamelid-2.png') }}" alt="" title=""></a></div>
    <!--Nav Box-->
    <div class="nav-outer clearfix">
        <div class="outer-box">
            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
        </div>
    </div>
</div>

<!-- Mobile Nav -->
<div id="nav-mobile"></div>
