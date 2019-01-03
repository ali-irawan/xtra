# xtra
Xtra Framework

[![Build Status](https://travis-ci.org/ali-irawan/xtra.svg?branch=master)](https://travis-ci.org/ali-irawan/xtra)
[![Download](https://poser.pugx.org/ali-irawan/xtra/d/total.svg)](https://poser.pugx.org/ali-irawan/xtra/d/total.svg)
[![Stable](https://poser.pugx.org/ali-irawan/xtra/v/stable.svg)](https://poser.pugx.org/ali-irawan/xtra/v/stable.svg)
[![Unstable](https://poser.pugx.org/ali-irawan/xtra/v/unstable.svg)](https://poser.pugx.org/ali-irawan/xtra/v/unstable.svg)
[![License](https://poser.pugx.org/ali-irawan/xtra/license.svg)](https://poser.pugx.org/ali-irawan/xtra/license.svg)


## Goals
This framework is intended to help build most usually needed features. The main goal is getting works done faster.

* Works for most popular CSS Frameworks (Bootstrap, etc.)
* Authentication UI (Login, Register, etc. compatibles with Laravel Users)
* Role Permission Management UI
* User / Group Management UI
* Support single or multiple tenancy using [Laravel tenancy](https://github.com/hyn/multi-tenant) - **coming soon**
* Administration Panel
* Code Generator

## Requirements

* Laravel (5.x)
* PHP 7.1.3+

## Installations
### Laravel 5.2 to 5.6
Not tested yet! :(

### Laravel 5.7+
```
composer require ali-irawan/xtra
```
Run vendor publish command, for the first time
```
php artisan vendor:publish --tag=xtra
```
Then run your application
```
php artisan serve
```
Then open this URL on your browser
```
http://localhost:8000/xtra-login
```
For more guide see the wiki [Xtra Framework Wiki](https://github.com/ali-irawan/xtra/wiki)

## Documentation
I am using [phpDoc](https://phpdoc.org), you will need to download the PHAR and place it in the root of your project folder

Run this command to specify **src** as the source folder and **docs** as the output folder
```
php phpDocumentor.phar -d src -t docs --template="responsive-twig" --cache-folder CACHE_DIR
```
## Dependencies

* [Bootstrap CSS](https://getbootstrap.com/) version 4.2.1
* [jQuery](https://jquery.com/) version 3.2

## Contributors
[Ali Irawan](https://github.com/ali-irawan) ([boylevantz@gmail.com](mailto:boylevantz@gmail.com))

Any contributors (features, code, or documentation) please pm me!
