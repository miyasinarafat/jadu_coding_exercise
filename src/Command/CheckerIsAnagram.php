<?php


namespace App\Command;


use App\Checker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckerIsAnagram extends Command
{
    protected static $defaultName = 'checker:is-anagram';

    protected function configure(): void
    {
        $this
            ->addArgument('word', InputArgument::REQUIRED, 'The word of string is required.')
            ->addArgument('comparison', InputArgument::REQUIRED, 'The comparison of string is required.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $result = (new Checker())->isAnagram($input->getArgument('word'), $input->getArgument('comparison'));
        $output->writeln('The comparison of words is anagram: ' . ($result ? 'Yes' : 'No'));
        return Command::SUCCESS;
    }
}