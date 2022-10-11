<?php

namespace Ahmedeid46\APIResponse;

use Ahmedeid46\APIResponse\Traits\setVariable;
use http\Client\Response;


class APIResponse
{
    public function respondNotFound()
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
        ]);
    }

}
