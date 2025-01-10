# PHP Loose Typing with Default Arguments and Null Comparisons

This example showcases a potential pitfall in PHP related to loose typing when dealing with default function arguments and null comparisons.

The `my_function` is defined with a default argument value for `$arg2`. The intention is to provide a fallback value if `$arg2` is not explicitly passed, or if it's explicitly set to null. 

However, passing an empty string ('') can lead to unexpected results as PHP's loose typing does not always strictly compare '' to null. This could result in unintended behavior within the function's logic.

The `bug.php` file demonstrates this issue. The `bugSolution.php` file offers a solution to address this behavior. 
