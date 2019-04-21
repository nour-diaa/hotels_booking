<?php
/**
 * Created by PhpStorm.
 * User: ahmadalsodani
 * Date: 2019-04-21
 * Time: 21:03
 */

namespace App\Abstracts;


abstract class Error
{

    private $title;
    private $message;
    private $error_code;

    /**
     * Error constructor.
     * @param $title
     * @param $message
     * @param $error_code
     */
    public function __construct($title, $message, $error_code)
    {
        $this->title = $title;
        $this->message = $message;
        $this->error_code = $error_code;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    public function toArray()
    {
        return [
            'title' => $this->title,
            'message' => $this->message,
            'error_code' => $this->error_code
        ];
    }

}
