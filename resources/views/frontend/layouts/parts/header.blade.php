<header id="page-header">
    <div class="container">
        <nav id="main-nav">
            <a href="/" id="logo">
                <img src="{{asset('frontend/images/logo/logo.svg')}}" />
            </a>
            <div id="categories">
                <div class="opener">
                    <span class="icon icon-th"></span> Categories
                </div>
                <ul>
                    <li>Blub</li>
                </ul>
            </div>
            <div id="search">
                <div class="control has-icon has-icon-right">
                    <input class="input search-input" type="text" placeholder="@lang('main.page.header.search')">
                    <span class="icon icon-search"></span>
                </div>
            </div>
            <div id="account-menu">
                @if(Auth::check())
                    <a class="button button-m button-primary button-naked" href="{{route('user.logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{trans('main.page.header.account.logout')}}</a>
                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>

                @else
                    <a class="button is-primary" href="{{route('user.login')}}" data-modal="login">{{trans('main.page.header.account.login')}}</a>
                    <a class="button is-primary is-outlined" href="{{route('user.register')}}" data-modal="register">{{trans('main.page.header.account.register')}}</a>
                @endif
            </div>
        </nav>
    </div>
</header>