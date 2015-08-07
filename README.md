File Info Library
=================

PHP >= 5.3.3

This library provides some classes to get file information.

Requirements
------------

* PHP >= 5.3.3

Installation
------------

Can be installed with Composer:

```
$ composer require ws/file-util
```

Usage
-----

### Mime Type

```php
use WS\Libraries\FileUtil\MimeType;

echo MimeType::guessMimeType('styles.css'); // text/css
echo MimeType::guessMimeType('scripts.js'); // application/javascript
echo MimeType::guessMimeType('trailer.mp4'); // video/mp4
```

License
-------

This library is release under [MIT license](LICENSE).
