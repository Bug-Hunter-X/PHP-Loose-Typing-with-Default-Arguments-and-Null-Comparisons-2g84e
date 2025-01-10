```php
function my_function($arg1, $arg2 = null) {
  if (!isset($arg2)) {
    $arg2 = 'default';
  } elseif ($arg2 === '') {
    // Handle empty string case separately 
    $arg2 = 'emptyString';
  }
  // ...
}

my_function(1); // Works as expected
my_function(1, null); // Works as expected
my_function(1, ''); // Now handles empty string correctly
```