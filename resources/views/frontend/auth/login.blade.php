<div class="modal is-medium">
    <header>
        <h3>{{trans('user.auth.login.title')}}</h3>
        <button class="modal-hide"></button>
    </header>
    <div class="body">
        <form id="form-login" class="form" method="POST" action="{{ route('user.login') }}">
            {{ csrf_field() }}

            <div class="field">
                <label class="label" for="email">{{trans('user.auth.login.form.email')}}</label>
                <div class="control">
                    <input id="email" type="email" class="input" name="email" required autofocus>
                </div>
            </div>

            <div class="field">
                <label class="label" for="password">{{trans('user.auth.login.form.password')}}</label>
                <div class="control">
                    <input id="password" type="password" class="input" name="password" required autofocus>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button form-submit is-primary">
                        {{trans('user.auth.login.submit')}}
                    </button>
                </div>
            </div>
        </form>
    </div>
    <footer>
        <a class="btn is-text" href="{{ route('user.forgot') }}">
            {{trans('user.auth.login.forgot')}}
        </a>
    </footer>

    <script>
        $('#form-login').ajaxForm({
            reloadSuccess: true
        })
    </script>
</div>