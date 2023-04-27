<?php
require_once __DIR__ . '/vendor/autoload.php';

use swentel\nostr\Key\Key;
use swentel\nostr\Event\Event;
use swentel\nostr\Sign\Sign;
use swentel\nostr\Message\EventMessage;
use swentel\nostr\Relay\Relay;

$public_key = 'npub10elfcs4fr0l0r8af98jlmgdh9c8tcxjvz9qkw038js35mp4dma8qzvjptg';
$key = new Key();
$hex = $key->convertToHex($public_key);
var_dump($hex);

$nsec = '';
$private_key = $key->convertToHex($nsec);

$event = new Event();
$event->setContent('Hello world');
$event->setKind(1);
$signer = new Sign();
$signer->signEvent($event, $private_key);
$eventMessage = new EventMessage($event);

$websocket = 'wss://example.com';
$relay = new Relay($websocket, $eventMessage);
$result = $relay->send();
