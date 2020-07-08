<?php

namespace App\Tools;

use Illuminate\Support\Str;

class ResponseTool
{
    public static function success($params = null, $code = 200)
    {
        return response()->json([
            'status' => true,
            'data' => $params
        ], $code);
    }

    public static function failure($params = null, $code = 403)
    {
        return response()->json([
            'status' => false,
            'message' => $params
        ], $code);
    }
}
