<?php

namespace KTC\LaravelCore;

use Illuminate\Support\Facades\Response;

class RepositoryResponse {
    
    public $success;
    public $code;
    public $message;
    public $data;

    public function __construct($success, $code, $message, $data) {
        $this->success = $success;
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }

    public function toResponse() {
        return Response::json([
            'code' => $this->code,
            'success' => $this->success,
            'message' => $this->message,
            'data' => $this->data], 200);
    }


    public static function notFound($id, $message = null)
    {
      return new RepositoryResponse(false, 404, $message == null ? 'Model id '.$id.' not found' : $message, null);
    }

    public static function success($data, $message = 'ok')
    {
      return new RepositoryResponse(true, 1, $message, $data);
    }
  
    public static function error($message)
    {
      return new RepositoryResponse(false, 0, $message, null);
    }

}