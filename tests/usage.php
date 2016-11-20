#!/usr/bin/env php
<?php

namespace Cormy;

require __DIR__.'/../vendor/autoload.php';

use Cormy\Server\Fixtures\RequestHandler;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\ServerRequest;

$sut = new RequestHandler();
$response = $sut(new ServerRequest());

exit($response instanceof ResponseInterface ? 0 : 1);
