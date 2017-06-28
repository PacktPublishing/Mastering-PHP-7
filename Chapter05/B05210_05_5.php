<?php

namespace Foggyline\Console\Command;

use Symfony\Component\Console\{
  Command\Command,
  Input\InputInterface,
  Output\OutputInterface
};

class CustomerRegisterCommand extends Command
{
  protected function configure()
  {
    $this->setName('customer:register')
    ->setDescription('Registers new customer.');
  }

  protected function execute(InputInterface $input, OutputInterface
    $output)
  {
    // Some imaginary logic here...
    $output->writeln('Customer registered.');
  }
}
