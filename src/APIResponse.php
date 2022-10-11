<?php

namespace Ahmedeid46\APIResponse;

use Ahmedeid46\APIResponse\Traits\setVariable;
use http\Client\Response;


class APIResponse
{
    use setVariable;
    public function respondNotFound()
    {
        $array =[
            'status'=>false,
            'message' => $this->message
        ];
        if ($this->data !=null){
            $array['data'] = $this->data;
        }
        return response()->json($array)->setStatusCode(Response::HTTP_NOT_FOUND);
    }
    public function respondOK()
    {
        $array =[
            'status'=>true,
            'message' => $this->message
        ];
        if ($this->data !=null){
            $array['data'] = $this->data;
        }
        return response()->json($array)->setStatusCode(Response::OK);
    }
    public function serverErorr()
    {
        $array =[
            'status'=>false,
            'message' => 'server error',
        ];
        return response()->json($array)->setStatusCode(Response::ServerError);
    }
    public function validationFailed(){
        $array =[
            'status'=>false,
        ];
        if ($this->message != null){
            $array['message'] = $this->message;
        }else{
            $array['message'] = 'Validation Failed';
        }
        if ($this->data != null){
            foreach($this->data as $key=>$value){
                $array['error']['$key'] = $value[1];
            }
        }
        return response()->json($array)->setStatusCode(Response::BADREQUEST);
    }


}
