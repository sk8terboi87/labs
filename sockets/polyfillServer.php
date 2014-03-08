<?php

require 'vendor/autoload.php';

use Ratchet\WebSocket\WsServer;
use Ratchet\Server\IoServer;
use Ratchet\Server\FlashPolicy;

$flash = new FlashPolicy;
$flash->addAllowedAccess('*', 80);
$flash->addAllowedAccess('*', 8080); // Allow all Flash Sockets from any domain to connect on port 8080
$server = IoServer::factory($flash, 843);

$server->run();