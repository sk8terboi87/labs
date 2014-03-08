<?php
require 'vendor/autoload.php';
require 'CustomTransporter.php';

use Ratchet\Server\IoServer;


    $server = IoServer::factory(
        new CustomTransporter(),
        8080
    );

    $server->run();