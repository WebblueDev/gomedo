@extends('frontend.master.master')

@section('assets.css')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/frontend/entry.css') }}">
@stop

@section('body')
    <div id="px-pageLogin" class="px-wrapper">
        @include('frontend.partials.flash-message')
        <section class="px-centerSection">

            <div class="px-centerSectionWrapper">

                <div class="px-centerSectionInner">
                    <div id="px-regWrapper" class="row row-eq-height ">
                        <div id="px-pw-reset" class="col-sm-12">
                            <div class="col">
                                <h1>Passwort ändern</h1>
                                <hr class="px-whitespace">
                                <form role="form" method="POST" action="{{ route('password.request') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <p>
                                        <input id="email" type="text" name="email" placeholder="Deine Mailadresse" value="{{ $email or old('email') }}" required autofocus>
                                        @include('frontend.partials.form-error', ['field' => 'email'])
                                    </p>
                                    <p>
                                        <input id="password" type="password" name="password" placeholder="Dein neues Passwort" required>
                                        @include('frontend.partials.form-error', ['field' => 'password'])
                                    </p>
                                    <p>
                                        <input id="password-confirm" type="password" name="password_confirmation" placeholder="Neues Passwort wiederholen" required>
                                        @include('frontend.partials.form-error', ['field' => 'password_confirmation'])
                                    </p>

                                    <hr class="px-whitespace">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Passwort ändern</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection