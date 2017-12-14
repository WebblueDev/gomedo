<header id="page-header">
    <nav id="main-nav">
        <div class="container">
            <a id="logo">
                <img src="{{asset('images/frontend/logo/logo.svg')}}" />
            </a>
            <div id="search">
                <input class="search-input" type="text" placeholder="@lang('main.page.header.search')">
            </div>
            <div id="account-menu">
                @if(Auth::check())
                    <a class="button button-m button-primary button-naked" href="{{route('user.logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{trans('main.page.header.account.logout')}}</a>
                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>

                @else
                    <a class="button button-m button-primary" href="{{route('user.login')}}" data-popup="login">{{trans('main.page.header.account.login')}}</a>
                    <a class="button button-m button-primary button-naked" href="{{route('user.register')}}" data-popup="register">{{trans('main.page.header.account.register')}}</a>
                @endif
            </div>
        </div>
    </nav>
    <nav id="secondary-nav">
        <div class="container">
            <ul class="list-hor">
                <li>
                    <a href="/" title="">
                        <span class="icon-windows"></span> Windows
                    </a>
                </li>
                <li>
                    <a href="/" title="">
                        <span class="icon-apple"></span> Mac
                    </a>
                </li>
                <li>
                    <a href="/" title="">
                        <span class="icon-gamepad"></span> Konsole
                    </a>
                </li>
                <li>
                    <a href="/" title="">
                     <span class="icon-xbox"></span> Xbox
                    </a>
                </li>
                <li>
                    <a href="/" title="">
                        <span class="icon-playstation"></span> Playstation
                    </a>
                </li>
                <li>
                    <a href="/" title="">
                        <span class="icon-star"></span> Gamecards
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>