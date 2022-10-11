<?php
namespace Ahmedeid46\APIResponse\Traits;

use Illuminate\Http\JsonResponse;
Trait setVariable{
    protected $data;
    protected $message;
    protected $statusCode = Response::HTTP_OK;

    function data($data) {
        $this->data = $data;
    }
    function statusCode($statusCode) {
        $this->statusCode = $statusCode;
    }
    function message($message) {
        $this->message = $message;
    }
}