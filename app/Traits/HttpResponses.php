<?php

namespace app\Traits;

trait HttpResponses {

    protected function success($data, $message = null, $code = 200){

        return response([
            'status' => 'Request was succesful',
            'message' => $message,
            'data' => $data
        ], $code);

    }

    protected function error($data, $message = null, $code){

        return response([
            'status' => 'Error has occurred',
            'message' => $message,
            'data' => $data
        ], $code);

    }
}