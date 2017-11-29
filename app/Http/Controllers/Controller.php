<?php

namespace Gomedo\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getJsonError($message, $code = 400) {
        return Response::json([
            'error' => true,
            'message' => $message,
            'code' => $code
        ], $code);
    }

    public function getJsonSuccess($html = 'success', $code = 200) {
        return Response::json([
            'error' => false,
            'code' => $code,
            'data' => $html
        ], $code);
    }
}
