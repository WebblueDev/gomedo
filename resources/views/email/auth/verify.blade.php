@extends('email.master')

@section('content')

    <h4 class="h4" style="text-align: center;">@lang('email.account.verify.title')</h4>
    @lang('email.account.verify.text', ['user' => $user->name])
    <br />
    &nbsp;
    <div>
        <table border="0" cellpadding="20" cellspacing="1" height="70" width="561">
            <tbody>
            <tr>
                <td style="width: 30px;">&nbsp;</td>
                <td style="background-color: #159272;text-align: center;">
                    <a style="color: #fff;" href="{{route('user.verify', ['token' => $user->email_verification_token])}}">@lang('email.account.verify.click')</a></td>
                <td style="width: 30px;">&nbsp;</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection