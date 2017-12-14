@extends('email.master')

@section('content')

    <h4 class="h4" style="text-align: center;">@lang('email.auth.welcome.title')</h4>
    @lang('email.auth.welcome.text', ['user' => $user->name])

@endsection