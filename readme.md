# Shopavel Demo / Development Site

Working towards [alpha1](https://github.com/shopavel/shopavel/issues?milestone=1&state=open), due March 31st.

Comprises of [products](https://github.com/shopavel/products), [categories](https://github.com/shopavel/categories) and [themes](https://github.com/shopavel/themes) as well as the required [core framework](https://github.com/shopavel/shopavel).

## Development

When developing locally on multiple packages it can be useful to override the namespaces to your local copies of each package. This allows you to more easily develop and test.

To do this create a `bootstrap/local.php` file like so:

```php
<?php

$autoloader = require __DIR__.'/../vendor/autoload.php';

$autoloader->set('Shopavel',           '/path/to/shopavel/packages/common/src');
$autoloader->set('Shopavel\\Products', '/path/to/shopavel/packages/products/src');
$autoloader->set('Shopavel\\Themes',   '/path/to/shopavel/packages/themes/src');
```

Add additional packages as needed, then run `composer dump-autoload`. You will now be able to checkout any branch you wish for these packages and work directly on them without needing to push and update.