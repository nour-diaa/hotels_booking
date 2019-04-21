<?php
/**
 * Created by PhpStorm.
 * User: ahmadalsodani
 * Date: 2019-04-21
 * Time: 21:04
 */

namespace App\Utilities;

use Illuminate\Http\Response;
use App\Abstracts\Error;

class UserError extends Error {

    public function userNotFound()
    {
        $error = $this->toArray();
        $error['data'] = [];
        $error['error'] = true;
        return new Response( $error ) ;
    }

}
