#!/usr/bin/env php

<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use PHPJasperCommand\CheckLatestReleaseCommand;

$app = new Application();

$app->add(new CheckLatestReleaseCommand());

$app->run();
