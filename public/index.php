<?php

define('KIRBY_HELPER_DUMP', false);

require __DIR__ . '/../kirby/bootstrap.php';

$base = dirname(__DIR__);
$storage = $base . '/storage';

$kirby = new Kirby([
  'roots' => [
    'index'     => __DIR__,
    'site'      => $base . '/site',
    'content'   => $base . '/content',
    'accounts'  => $storage . '/accounts',
    'cache'     => $storage . '/cache',
    'sessions'  => $storage . '/sessions',
    'logs'      => $storage . '/logs',
  ]
]);

echo $kirby->render();
