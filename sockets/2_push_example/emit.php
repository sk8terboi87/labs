<?php
$entryData = array(
    'category'     => 'kitty'
  , 'title'   => 'meow is here'
  , 'article' => 'Life of Cats & Kittens'
  , 'when'    => time()
);
// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://localhost:5555");

print_r($entryData);
echo 'sending...';
$socket->send(json_encode($entryData));