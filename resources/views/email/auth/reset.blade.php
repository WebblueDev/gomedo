@extends('email.master')

@section('content')

    <h4 class="h4" style="text-align: center;">@lang('email.account.reset.title')</h4>
    @lang('email.account.reset.text')
    <div style="margin: 12px 0;">
        <table border="0" cellpadding="20" cellspacing="1" height="70" width="561">
            <tbody>
            <tr>
                <td style="width: 30px;">&nbsp;</td>
                <td style="background-color: #159272;text-align: center;">
                    <a style="color: #fff;" href="{{route('user.reset', ['token' => $token])}}">@lang('email.account.reset.click')</a></td>
                <td style="width: 30px;">&nbsp;</td>
            </tr>
            </tbody>
        </table>
    </div>
    @lang('email.account.reset.text_sub')

@endsection