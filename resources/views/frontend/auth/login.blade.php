<div class="popup popup-m">
    <header>
        <h3>{{trans('user.auth.login.title')}}</h3>
        <button class="popup-hide"></button>
    </header>
    <div class="body">
        <form id="form-login" class="form" method="POST" action="{{ route('user.login') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="field">
                    <input id="email" type="email" class="input" name="email" required autofocus>
                    <label for="email">{{trans('user.auth.login.form.email')}}</label>
                </div>
            </div>

            <div class="form-group">
                <div class="field">
                    <input id="password" type="password" class="input" name="password" required autofocus>
                    <label for="password">{{trans('user.auth.login.form.password')}}</label>
                </div>
            </div>

            <div class="form-group last">
                <button type="submit" class="button form-submit button-primary button-block">
                    <span>{{trans('user.auth.login.submit')}}</span>
                </button>
            </div>
        </form>
    </div>
    <footer>
        <a class="btn btn-link" data-popup="forgot-pw" href="{{ route('user.forgot') }}">
            {{trans('user.auth.login.forgot')}}
        </a>
    </footer>

    <script>
        $('#form-login').ajaxForm({
            reloadSuccess: true
        })
    </script>
</div>