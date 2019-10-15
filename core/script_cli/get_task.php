<?php
/**
 * Send task to rabbit mq
 */
require_once "_import_general.php";
$taskQueue = new TaskQueue();
$callback = function ($msg) {
    echo ' [x] Received ', $msg->body, "\n";
};
$taskQueue->getTask($callback);
