@extends('email.master')

@section('content')

    <h4 class="h4" style="text-align: center;">@lang('email.account.welcome.title')</h4>
    @lang('email.account.welcome.text', ['user' => $user->firstName])

@endsection