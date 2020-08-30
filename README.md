# Luhn Algorithm - PHP

Luhn Algorithm Implementation in PHP to validate Debit &amp; Credit Cards &amp; IMEI numbers.

## Example

```php
<?php

use ShaheryarMahmod\LuhnAlgorithm;

$number = 4111111111111111;

// Check digit calculation
var_dump(Luhn::checksum($number));  // int(1)

// Validate numbers
var_dump(Luhn::isValid($number));   // bool(true)
```
