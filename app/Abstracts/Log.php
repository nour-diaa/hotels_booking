<?php
/**
 * Created by PhpStorm.
 * User: ahmadalsodani
 * Date: 2019-04-21
 * Time: 21:18
 */

namespace App\Abstracts;


use App\Contracts\Loggable;
use App\Utilities\LogFile;

abstract class Log implements Loggable {

    private $logFile;

    /**
     * Log constructor.
     * @param $logFile
     */
    public function __construct( LogFile $logFile)
    {
        $this->logFile = $logFile;
    }

    public function write_log($content): bool
    {
        // TODO: Implement write_log() method.
    }

    public function get_log_in_html(): string
    {
        // TODO: Implement get_log_in_html() method.
    }


}
