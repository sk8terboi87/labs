Labs
====

Sockets using 'http://socketo.me/' & 'https://github.com/gimite/web-socket-js'

Works in IE 8, 9 and Other Modern Browsers.
- Tested in IE 9, Pending in IE 8 (I don't have IE 8 currently :( )

Tutorial:

- http://code.xplorate.com/2014/03/php-socket-programming-part-ii.html
- http://code.xplorate.com/2014/03/php-socket-programming-using-rachet-part-i.html


Example: 1  (1_flash_support_example)
---------------------------------------

## Installation

`$ php composer.phar install`

## Starting Server

$ php httpServer.php

- Open '1_flash_support_example'
-- Connect the server and send some message
- Open one more 'tab/window' of the same and give connect
- You can see the socket thingy working awesomely!!


Example: 2  (2_push_example)  **TODO**
---------------------------------------

## Installation

$ sudo apt-get install libzmq-dev
$ sudo pecl install channel://pecl.php.net/zmq-1.1.2
- Update `php.ini` file with `extension=zmq.so`

- Update composer.json with below

{
    "require": {
        "cboden/Ratchet": "0.3.*",
        "react/zmq": "0.2.*"
    }
}

`$ php composer.phar install`

--TODO--

Example: 3 - CLI
----------------
(terminal 1)
`$ php server.php`

(terminal 2)
`S telnet localhost 8080`

(terminal 3)
`S telnet localhost 8080`

Type something in terminal 2 & 3..... Simple chat!!!


TODO:
=====
- To Perform database insert and pass message to the subscribers
- Find out why its not working with http://autobahn.ws/
- Experimenting the same with **NodeJs**


REFERENCES:
============
- http://www.dummies.com/how-to/content/html5-and-web-sockets.html
- https://github.com/gimite/web-socket-js
- http://socketo.me/
