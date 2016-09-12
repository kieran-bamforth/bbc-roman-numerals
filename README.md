#BBC Coding Kata
##The approach
Using PHP, I chose to use the "composer package manager" so that I can depend on / lock version libraries without having to commit them to the source code. Composer also gives us a nice autoloader for PHP projects.

With composer installed, the first thing I required was PHPUnit for two reasons:

1. Testing becomes much quicker; I have a vim keyboard shortcut that will run the current test, thus reducing time taken to test.
2. Code robustness: if the code breaks, I'll know.

Now that PHPUnit was installed, I first read up on how roman numerals worked, and then created the tests. With the tests in place, I could go about implementing the generate function.

For the generate function, I decided to use a ```while``` loop. The concept is simple, start with the largest numeral value and see how many times the numeral value can fit into the given number. Record this amount, append it to our final string, and then subtract it from the number we are looping on. We do this for every numeral value stored in an array until we are eventually left with 0, and that result is returned in upper case.
##Running the project
1. Clone the repository 
```git clone https://github.com/kieran-bamforth/bbctc```
2. In the project root...
```cd bbctc```
3. Download composer with the following command:
```curl -sS https://getcomposer.org/installer | sudo php```
4. Install the composer dependencies
```composer install```
5. Run PHPUnit
``` ./vendor/bin/phpunit ```
6. See that all tests pass. Feel free to add your own tests:
```vim src/Tests/RomanNumeralGeneratorTest.php```
