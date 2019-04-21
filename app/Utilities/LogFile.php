<?php
/**
 * Created by PhpStorm.
 * User: ahmadalsodani
 * Date: 2019-04-21
 * Time: 21:19
 */

namespace App\Utilities;


class LogFile{

    private $fileName;

    /**
     * LogFile constructor.
     * @param $fileName
     */
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }


}
