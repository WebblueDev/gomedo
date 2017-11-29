@extends('frontend.master.popup.master')

@section('content')
    <div class="px-popUpHeader">
        <h2>Anfrage versendet</h2>
    </div>
    <div class="px-popUpContent">
        Um dein Passwort zurücksetzen zu können, musst du die Anfrage bestätigen. Wir haben dir eine E-Mail mit einem
        Bestätigungs-Link und allen weiteren Informationen zugeschickt.
    </div>
    <div class="px-popUpFooter">
        <a href="#" class="btn popup_close btn-primary">@lang('main.form.buttons.close')</a>
    </div>
@endsection