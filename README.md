#BBC Coding Kata
##The approach
- Using PHP, I chose to use the "composer package manager" so that I can depend on / lock version libraries without having to commit them to the source code.
- Also, Composer gives us a nice autoloader for PHP projects.
- With composer installed, the first thing I required was PHPUnit tests for two reasons:
-- Testing becomes much quicker; I have a vim keyboard shortcut that will run the current test, thus reducing time taken to test.
-- Code robustness, if the code breaks, I'll know.
- I create the tests, then implement the generate function.
