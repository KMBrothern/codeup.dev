<?php
class Log
{
    public $filename = '';
    public $handle = '';
    // public $prefix = '';

    public function __construct($prefix = 'log')
    {

        $this->filename = $prefix .'-'. date('Y-m-d').".log";
        $this->handle = fopen($this->filename, 'a');
        // fwrite($this->handle, PHP_EOL. $logString." "."[$logLevel]"." ".$message);
        echo "file has been opened for writing, __construct scripts are finished running. \n";
    }

    
    public function __destruct()
    {
        fclose($this->handle);
        echo "__destruct begins, closing appended file.";


    }

    public function logMessage($logLevel, $message) 
    {
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $logString = $date." ".$time;
        fwrite($this->handle, PHP_EOL. $logString." "."[$logLevel]"." ".$message);
        echo "file has been written \n";
    }


    public function logInfo($message)
    {
        $this->logMessage("INFO", $message);
    }

    public function logError($message)
    {
        $this->logMessage("ERROR", $message);
    }

}
