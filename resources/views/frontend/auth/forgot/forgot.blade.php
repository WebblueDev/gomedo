@extends('frontend.master.popup.master')

@section('content')
    <div class="px-popUpHeader">
        <h2>Passwort vergessen?</h2>
    </div>
    <form id="forgot-form" role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="px-popUpContent">
            <div class="popup-error"></div>
            <p>
                <input id="pw-form-email" type="text" name="email" placeholder="Deine Mailadresse" required>
            </p>
        </div>
        <div class="px-popUpFooter">
            <button type="submit" class="btn btn-primary">Passwort zurücksetzen</button>
        </div>
    </form>

    <script>
        $('#forgot-form').ajaxForm({});
    </script>
@endsection