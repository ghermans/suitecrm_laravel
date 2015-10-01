# suitecrm_laravel

[![Join the chat at https://gitter.im/ghermans/suitecrm_laravel](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/ghermans/suitecrm_laravel?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Advanced Open Portal integrated in Laravel 5 ([original Joomla component](https://github.com/salesagility/SuiteCRM-Portal-Joomla))

# Requirements
PHP >= 5.4

MCrypt PHP Extension

As of PHP 5.5, some OS distributions may require you to manually install the PHP JSON extension.
When using Ubuntu, this can be done via apt-get install php5-json.


# Installation
```
composer update
```

```
composer install
```



```
php artisan migrate
```

## Versioning 

For transparency into our release cycle and in striving to maintain backward compatibility, laravel_suitecrm 
is maintained under the Semantic Versioning guidelines. Sometimes we screw up, but we'll adhere to 
those rules whenever possible.

See the Releases section of our github project for changelogs for each release version pf laravel_suitecrm 
