# php-ie-detector
Parses a user agent string to detect Internet Explorer.

A bare-bones minimal way of detecting IE6, IE7 or IE8.

# Usage

```php
<?php

use webignition\IEDetector\IEDetector;

$ie6UserAgent = 'Mozilla/4.0 (MSIE 6.0; Windows NT 5.0)';

if (UserAgentDetector::isIE6()) {
    // ...
}
```
