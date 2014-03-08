<?php
require 'vendor/autoload.php';
require 'CustomTransporter.php';

use Ratchet\WebSocket\WsServer;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\Server\FlashPolicy;
use React\EventLoop\Factory;
use React\Socket\Server as Reactor;

// Creating a Factory
$loop = Factory::create();

// WebSocket
$webSocket = new Reactor($loop);
$webSocket->listen(8080, '0.0.0.0');
$server = new IoServer(
    new HttpServer(
        new WsServer(
            new CustomTransporter()
        )
    ),
    $webSocket
);

// Same socket for IE Support
$flashSocket = new Reactor($loop);
$flashSocket->listen(843, '0.0.0.0');
$policy = new FlashPolicy;
$policy->addAllowedAccess('*', 80);
$policy->addAllowedAccess('*', 8080);
$server = new IoServer(
    $policy,
    $flashSocket
);

// Go!!!
$loop->run();