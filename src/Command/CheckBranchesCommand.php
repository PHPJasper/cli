<?php

namespace PHPJasperCommand;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckBranchesCommand extends Command
{
    protected function configure()
    {
        $this->setName("Branches:list")
            ->setDescription("List all available branches.")
            ->setHelp('This command list all available branches - ' . '{ Branches:list }');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $check = new Branches();

        $result = $check->listBranchesAvailable();
        $output->writeln('Branches available:');
        $output->writeln($result);
    }
}