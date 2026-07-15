# Bug Descriptions

## Bug 1 – bug1.php
**Intended Behavior**: Check if the age is greater than or equal to 18 and return the corresponding status.  
**Issue Type**: Syntax error.  
**Notes**: The `if` statement is missing a closing parenthesis `)` after the condition, causing a PHP parse/syntax error.

## Bug 2 – bug2.php
**Intended Behavior**: Calculate and return the correct average of three numbers.  
**Issue Type**: Logical error.  
**Notes**: Due to operator precedence in PHP, the division `/` is executed before the addition `+`. The formula should be wrapped in parentheses: `($num1 + $num2 + $num3) / 3`.

## Bug 3 – bug3.php
**Intended Behavior**: Divide the first number by the second number and return the result.  
**Issue Type**: Runtime exception.  
**Notes**: Passing `0` as the second argument causes a fatal `DivisionByZeroError` exception during execution.


## Bug 4 – bug4.php
**Intended Behavior**: Iterate through the array and print each color name.  
**Issue Type**: Off-by-one / loop logic issue.  
**Notes**: The loop uses `<= $total` which causes it to run 4 times on a 3-element array. This results in an "Undefined array key" warning on the final iteration.

## Bug 5 – bug5.php
**Intended Behavior**: Check if a string starts with a specific prefix.  
**Issue Type**: Misuse of data types or libraries.  
**Notes**: `strpos()` returns `0` when the prefix is at the very beginning. Because PHP's loose comparison `==` treats `0` as `false`, the function wrongly reports that the prefix was not found. It should use strict comparison `=== false`.