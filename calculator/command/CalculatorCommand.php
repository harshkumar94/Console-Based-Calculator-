<?php

 namespace calculator\command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;

class CalculatorCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'calculator';

    protected function configure()
    {
        // ...
        $this
        ->addArgument('operation',InputArgument::REQUIRED)
        ->addArgument('argument1',InputArgument::REQUIRED)
        ->addArgument('argument2',InputArgument::REQUIRED)
    ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ...
         $argument1 = $input->getArgument('argument1');
         $argument2= $input->getArgument('argument2');
         $operation= $input->getArgument('operation');
       
            if($operation=='add' )
            {
               $add=$argument1+$argument2;
               
              $output->writeln("Addition".'='.$add);
            }
            else if($operation=='sub' )
            {
               $sub=$argument1-$argument2;
               
              $output->writeln("Subtraction".'='.$sub);
            }
            else if($operation=='mul')
            {
                $mul=$argument1*$argument2;
               
              $output->writeln("Multiplication".'='.$mul);
            }
            else if($operation=='div' )
            {
                if($argument2!=0) {

                $div=$argument1/$argument2;
                $output->writeln("Division".'='.$div);
             }
                else {
                    $output->writeln("Error");
                }
              
            }
    }
}