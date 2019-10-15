<?php
/**
 * Send task to rabbit mq
 */
require_once "_import_general.php";
$taskQueue = new TaskQueue();
for($i=0;$i<1000;$i++){
    $taskQueue->sendTask($i);
    sleep (1);
}

