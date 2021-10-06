# Jadu Engineer Code Exercise

## Dependency required
- PHP Version: `>=7.2.5`
- Composer


## Installation

**Clone the repository or Download**
```bash
git clone git@github.com:iarafat/jadu_coding_exercise.git
```
To install dependencies open the project directory into terminal and run this command.
```bash
composer install
```


## Usage With Commands
**Check palindrome:**
```bash
php bin/console checker:is-palindrome anna
Output:- The word is palindrome: Yes
```

```bash
php bin/console checker:is-palindrome Bark
Output:- The word is palindrome: No
```

**Check anagram:**
```bash
php bin/console checker:is-anagram "coalface" "cacao elf"
Output:- The comparison of words is anagram: Yes
```

```bash
php bin/console checker:is-anagram "coalface" "dark elf"
Output:- The comparison of words is anagram: No
```

**Check pangram:**
```bash
php bin/console checker:is-pangram "The quick brown fox jumps over the lazy dog"
Output:- TThe phrase is pangram: Yes
```

```bash
php bin/console checker:is-pangram "The British Broadcasting Corporation (BBC) is a British public service broadcaster."
Output:- The phrase is pangram: No
```

## Testing
```bash
php bin/phpunit
```


## Credits

- [MD Iyasin Arafat](https://github.com/iarafat)