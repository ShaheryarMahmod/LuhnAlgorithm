# Luhn Algorithm - PHP

Luhn Algorithm Implementation in PHP to validate Debit &amp; Credit Cards &amp; IMEI numbers.

### Composer
```
composer require shaheryarmahmod/luhnalgorithm
```

## Example

```php
<?php
require_once 'vendor/autoload.php';

use ShaheryarMahmod\LuhnAlgorithm;

$number = 4111111111111111;

// Check digit calculation
var_dump(LuhnAlgorithm::checksum($number));  // int(1)

// Validate numbers
var_dump(LuhnAlgorithm::isValid($number));   // bool(true)
```
