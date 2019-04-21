<?php
/**
 * Created by PhpStorm.
 * User: ahmadalsodani
 * Date: 2019-04-21
 * Time: 21:16
 */

namespace App\Contracts;


interface Loggable
{

    public function write_log( $content ) : bool ;

    public function get_log_in_html() : string ;


}
