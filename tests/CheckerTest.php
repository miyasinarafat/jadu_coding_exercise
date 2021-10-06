<?php

namespace App\Tests;

use App\Checker;
use PHPUnit\Framework\TestCase;

class CheckerTest extends TestCase
{
    /** @test */
    public function it_should_check_the_string_is_palindrome()
    {
        $word = 'anna';
        $result = (new Checker())->isPalindrome($word);

        $this->assertEquals(true, $result);
    }

    /** @test */
    public function it_should_check_the_string_is_not_palindrome()
    {
        $word = 'Bark';
        $result = (new Checker())->isPalindrome($word);

        $this->assertEquals(false, $result);
    }

    /** @test */
    public function it_should_check_the_strings_is_anagram()
    {
        $word = 'coalface';
        $comparison = 'cacao elf';
        $result = (new Checker())->isAnagram($word, $comparison);

        $this->assertEquals(true, $result);
    }

    /** @test */
    public function it_should_check_the_strings_is_not_anagram()
    {
        $word = 'coalface';
        $comparison = 'dark elf';
        $result = (new Checker())->isAnagram($word, $comparison);

        $this->assertEquals(false, $result);
    }

    /** @test */
    public function it_should_check_the_string_is_pangram()
    {
        $sentence = 'The quick brown fox jumps over the lazy dog';
        $result = (new Checker())->isPangram($sentence);

        $this->assertEquals(true, $result);
    }

    /** @test */
    public function it_should_check_the_strings_is_not_pangram()
    {
        $sentence = 'The British Broadcasting Corporation (BBC) is a British public service broadcaster.';
        $result = (new Checker())->isPangram($sentence);

        $this->assertEquals(false, $result);
    }

}
