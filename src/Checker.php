<?php

declare(strict_types=1);

namespace App;


/**
 * Pangrams, anagrams and palindromes
 *
 * Implement each of the functions of the Checker class.
 * Aim to spend about 10 minutes on each function.
 */
class Checker
{
    /**
     * A palindrome is a word, phrase, number, or other sequence of characters
     * which reads the same backward or forward.
     *
     * @param string $word
     * @return bool
     */
    public function isPalindrome(string $word): bool
    {
        if (strrev($word) == $word) {
            return true;
        }

        return false;
    }

    /**
     * An anagram is the result of rearranging the letters of a word or phrase
     * to produce a new word or phrase, using all the original letters
     * exactly once.
     *
     * @param string $word
     * @param string $comparison
     * @return bool
     */
    public function isAnagram(string $word, string $comparison): bool
    {
        if (count_chars($word, 1) == count_chars(str_replace(' ', '', $comparison), 1)) {
            return true;
        }

        return false;
    }

    /**
     * A Pangram for a given alphabet is a sentence using every letter of the
     * alphabet at least once.
     *
     * @param string $phrase
     * @return bool
     */
    public function isPangram(string $phrase): bool
    {
        $alphabet = range('a', 'z');
        $sentence = str_split(strtolower($phrase));

        return empty(array_diff($alphabet, $sentence));
    }
}