<?php

namespace App\Traits;

trait ApiTrait
{
    public function sendResponse($message, $data = null, $code = 200)
    {
        $response = ['code' => $code, 'message' => $message];
        if ($data) $response = array_merge($response, ['data' => $data]);

        return response()->json($response, $code);
    }
}
