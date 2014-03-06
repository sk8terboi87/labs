<?php
require 'vendor/autoload.php';
require 'chat.php';

use Ratchet\Server\IoServer;


    $server = IoServer::factory(
        new Chat(),
        8080
    );

    $server->run();