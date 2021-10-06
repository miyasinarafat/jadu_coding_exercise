<?php


namespace App\Command;


use App\Checker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckerIsPangram extends Command
{
    protected static $defaultName = 'checker:is-pangram';

    protected function configure(): void
    {
        $this
            ->addArgument('phrase', InputArgument::REQUIRED, 'The phrase of string is required.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $result = (new Checker())->isPangram($input->getArgument('phrase'));
        $output->writeln('The phrase is pangram: ' . ($result ? 'Yes' : 'No'));
        return Command::SUCCESS;
    }
}