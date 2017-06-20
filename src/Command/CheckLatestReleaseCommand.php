<?php

namespace PHPJasperCommand;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckLatestReleaseCommand extends Command
{

    protected function configure()
    {
        $this->setName("Release:check")
            ->setDescription("Check the latest stable version.")
            ->setHelp('This command check the latest stable version - ' . '{ Release:check }');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $check = new CheckApi();
        $result = $check->showLatestRelease();
        $output->writeln('The latest PHPJasper version: ' . $result);
    }

}