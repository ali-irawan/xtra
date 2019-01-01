# xtra
Xtra Framework

## Goals
This framework is intended to help build most usually needed features

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
Run vendor publish command
```
php artisan vendor:publish
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
## Dependencies

* [Bootstrap CSS](https://getbootstrap.com/) version 4.2.1
* [jQuery](https://jquery.com/) version 3.2

## Contributors
[Ali Irawan](https://github.com/ali-irawan) ([boylevantz@gmail.com](mailto:boylevantz@gmail.com))

Any contributors please pm me!
