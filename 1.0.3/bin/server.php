<?php

/**
 * gomoob/php-websocket-server
 *
 * @copyright Copyright (c) 2016, GOMOOB SARL (http://gomoob.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE.md file)
 */
use Gomoob\WebSocket\Auth\ApplicationsAuthManager;
use Gomoob\WebSocket\Message\MessageParser;
use Gomoob\WebSocket\Server\WebSocketServer;

require __DIR__ . '/vendor/autoload.php';

echo "WebSocket server started, enter Ctrl+C to stop server." . PHP_EOL . PHP_EOL;
WebSocketServer::factory(
    [
    	'messageParser' => new MessageParser(),
    	'authManager' => new ApplicationsAuthManager(
    	    [
    	    	'configurationFile' => '/etc/auth.yml'
    	    ]
    	),
    	'port' => 80,
    	'address' => '0.0.0.0'
    ]
)->run();
