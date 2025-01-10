```php
function my_function($arg1, $arg2 = null) {
  if ($arg2 === null) {
    $arg2 = 'default'; 
  }
  // ...
}

my_function(1); // Works fine
my_function(1, null); // Also works fine
my_function(1, ''); // Unexpected behavior
```