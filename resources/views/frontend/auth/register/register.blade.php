<div class="modal is-large">
    <header>
        <h3>{{trans('user.auth.register.title')}}</h3>
        <button class="modal-hide"></button>
    </header>
    <div class="body">
        <form id="form-register" class="form" method="POST" action="{{ route('user.register') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="field">
                    <input id="name" type="text" class="input" name="name" required autofocus>
                    <label for="name">{{trans('user.auth.register.form.name')}}</label>
                </div>
            </div>

            <div class="form-group">
                <div class="field">
                    <input id="email" type="email" class="input" name="email" required>
                    <label for="email">{{trans('user.auth.register.form.email')}}</label>
                </div>
            </div>

            <div class="form-group">
                <div class="field">
                    <input id="password" type="password" class="input" name="password" required autofocus>
                    <label for="password">{{trans('user.auth.register.form.password')}}</label>
                </div>
            </div>

            <div class="form-group">
                <div class="field">
                    <input id="password_confirmation" type="password" class="input" name="password_confirmation" required autofocus>
                    <label for="password_confirmation">{{trans('user.auth.register.form.password_confirmation')}}</label>
                </div>
            </div>

            <div class="form-group last">
                <button type="submit" class="button form-submit is-primary">
                    <span>{{trans('user.auth.register.submit')}}</span>
                </button>
            </div>
        </form>
    </div>

    <script>
        $('#form-register').ajaxForm({
            closeTimeout: true,
            closeTimeoutTime: 1000,
        })
    </script>
</div>