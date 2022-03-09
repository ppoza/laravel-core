<?php

namespace Kleetec\LaravelCore;

class KTCApiController extends KTCBaseController {
    
    function errorResponse($code, $message, $data = null) {
        return response()->json([
            'code' => $code,
            'success' => false,
            'message' => $message,
            'data' => $data], 200);
    }

    function successfulResponse($code, $message, $data) {
        return response()->json([
            'code' => $code,
            'success' => true,
            'message' => $message,
            'data' => $data], 200);
    }

    function successful($message, $data) {
        return response()->json([
            'code' => 1,
            'success' => true,
            'message' => $message,
            'data' => $data], 200);
    }

    function error($message, $data = null) {
        return response()->json([
            'code' => 0,
            'success' => false,            
            'message' => $message,
            'data' => $data], 200);
    }

    function unauthorizedResponse() {
        return response()->json([
            'code' => 0,
            'success' => true,
            'message' => 'Unauthorized',
            'data' => null], 401);
    }


    function apiResponse(KTCServiceResponse $serviceResponse) {
        return response()->json([
            'code' => $serviceResponse->code,
            'success' => $serviceResponse->success,
            'message' => $serviceResponse->message,
            'data' => $serviceResponse->data], 200);
    }

    
}
