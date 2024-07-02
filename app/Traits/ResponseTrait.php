<?php

namespace App\Traits;

trait ResponseTrait
{
    /**
     * Success response
     *
     * @param string $message
     * @param string $action
     * @param int|null $id
     * @param int|null $code
     * @param string|null $token
     * 
     * @return void
     */
    private function success($message, $action, $id = null, $code = null, $token = null)
    {
        $response = [];

        if (!is_null($id)) {
            $response['id'] = $id;
        }

        if (!is_null($token)) {
            $response['token'] = $token;
        }

        $response['message'] = "$message has been $action successfully.";

        return response()->json($response, ($code) ? $code : 200);
    }

    /**
     * Fail response
     *
     * @param string $message
     * @param int $code
     * 
     * @return void
     */
    private function fail($message, $code)
    {
        return response()->json([
            'message' => $message
        ], $code);
    }

    private function error()
    {
        return response()->json([
            'message' => 'Something went wrong. Please contact an administrator.'
        ], 500);
    }

    private function unauthorized()
    {
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }
}
