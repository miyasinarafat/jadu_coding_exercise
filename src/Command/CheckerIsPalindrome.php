<?php


namespace App\Command;


use App\Checker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckerIsPalindrome extends Command
{
    protected static $defaultName = 'checker:is-palindrome';

    protected function configure(): void
    {
        $this
            ->addArgument('word', InputArgument::REQUIRED, 'The word of string is required.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $result = (new Checker())->isPalindrome($input->getArgument('word'));
        $output->writeln('The word is palindrome: ' . ($result ? 'Yes' : 'No'));
        return Command::SUCCESS;
    }
}