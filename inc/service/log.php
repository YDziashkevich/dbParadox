<?php

function errorLog($error = "")
{
    $urlLog = APP_BASE_URL."log/log.txt";
    $error = "\n".date("Y-m-d H:i:s")." | ".$error;
    file_put_contents($urlLog,$error,FILE_APPEND);
}