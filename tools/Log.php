<?php

//This class is intended to be used as an easy logging tool. 
    Class Log 
    {

        //This function is for normal messages and accepts 3 arguments:
            //Source: The source of the message.
            //msg: The message to send.
            //Filename: The file to log it in. If no filename is provided, it will automatically log in robin.log.
        static function norm($source, $msg, $filename = 'robin')
        {
                file_put_contents($filename . '.log', '[' . $source . ']: ' . $msg . "\n", FILE_APPEND);
        }
    }




?>