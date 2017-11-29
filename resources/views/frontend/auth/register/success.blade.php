@extends('frontend.master.popup.master')

@section('content')
    <div class="px-popUpHeader">
        <h2>Account wurde erstellt</h2>
    </div>
    <div class="px-popUpContent">
        {{$user->firstName}}, dein Account wurde erstellt. Dieser muss nun allerdings noch bestätigt werden. Wir haben
        dir eine Mail mit allen weiteren Informationen an {{$user->email}} geschickt.
    </div>
    <div class="px-popUpFooter">
        <a href="#" class="btn popup_close btn-primary">@lang('main.form.buttons.close')</a>
    </div>
@endsection