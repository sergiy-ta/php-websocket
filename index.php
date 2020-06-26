<?php 

require __DIR__ . "/vendor/autoload.php";

$worker = new \Workerman\Worker('websocket://0.0.0.0:8001');
$worker->count = 4;

$worker->onConnect = function($connection) {
    $connection->send("message hello");
};

\Workerman\Worker::runAll();