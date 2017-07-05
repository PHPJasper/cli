#!/usr/bin/env php

<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use PHPJasperCommand\CheckLatestReleaseCommand;
use PHPJasperCommand\CheckBranchesCommand;

$app = new Application();

$app->add(new CheckLatestReleaseCommand());
$app->add(new CheckBranchesCommand());

$app->run();
