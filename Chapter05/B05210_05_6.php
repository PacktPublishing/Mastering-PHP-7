<?php

namespace Foggyline\Console\Command;

use Symfony\Component\Console\{
  Command\Command,
  Input\InputInterface,
  Output\OutputInterface
};

class CustomerStatusSetCommand extends Command
{
  protected function configure()
  {
    $this->setName('customer:status:set')
    ->setDescription('Enables of disables existing customer.');
  }

  protected function execute(InputInterface $input, OutputInterface
    $output)
  {
    // Some imaginary logic here...
    $output->writeln('Customer disabled.');
  }
}
