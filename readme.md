# SuitePanel

[![Join the chat at https://gitter.im/ghermans/suitecrm_laravel](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/ghermans/suitecrm_laravel?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)
[![Latest Version](https://img.shields.io/github/tag/Ghermans/suitecrm_laravel.svg?style=flat&label=release)](https://github.com/ghermans/suitecrm_laravel/tags)
[![Build Status](https://travis-ci.org/idevelopment/suitecrm_laravel.svg?branch=master)](https://travis-ci.org/idevelopment/suitecrm_laravel)
[![dependency Status](https://img.shields.io/david/dev/idevelopment/suitecrm_laravel.svg?style=flat)](https://david-dm.org/idevelopment/suitecrm_laravel#info=Dependencies)


SuitePanel is the Advanced Open Portal integrated in Laravel 5 (original Joomla component https://github.com/salesagility/SuiteCRM-Portal-Joomla)

# Requirements
* PHP >= 5.4
* MCrypt PHP Extension
* As of PHP 5.5, some OS distributions may require you to manually install the PHP JSON extension.
  When using Ubuntu, this can be done via apt-get install php5-json.


# Installation guide
* http://suitecm-laravel-portal.readthedocs.org/

# Quick start
```
composer install
```

```
edit .env_example and save as .env
```

```
php artisan migrate
```

```
php artisan db:seed
```

# Graph of work completed
[![Throughput Graph](https://graphs.waffle.io/idevelopment/suitecrm_laravel/throughput.svg)](https://waffle.io/idevelopment/suitecrm_laravel/metrics) 
