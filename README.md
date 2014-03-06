labs
====

Sockets using 'http://socketo.me/'

Installation
-------------

## For Push

$ sudo apt-get install libzmq-dev
$ sudo pecl install channel://pecl.php.net/zmq-1.1.2
- Update `php.ini` file with `extension=zmq.so`

`$ php composer.phar install`

Example: 1 - CLI
----------------
(terminal 1)
`$ php server.php`

(terminal 2)
`S telnet localhost 8080`

(terminal 3)
`S telnet localhost 8080`

Type something in terminal 2 & 3..... Simple chat!!!


Example: 2 - WEB
----------------
(terminal 1)
`$ php httpServer.php`

(Browser/Tab 1)

In console
```
var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
};
```

(Browser/Tab 2)
- Do same as above
- Then,
`conn.send('hey there');`
- Check in tab 1


Example: 3 - PUSH Based
--------------------------
--TODO--

