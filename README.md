## Yii1 project for creating popups

## Technical Requirements & Installation

[PHP 8.3](https://www.php.net/releases/8.3/en.php)
[Composer (System Requirements)](https://getcomposer.org/doc/00-intro.md#system-requirements)
[Yii 2.0.51](https://www.yiiframework.com/doc/guide/2.0/en/start-installation)
[MySQL 9.1.0](https://hub.docker.com/r/mysql/mysql-server#!)

## Settings

#### Make Composer install the project's dependencies into vendor/

```
composer install
```

#### Set actual db users' login/pwd in config

```
nano config/db.php
```

#### Run migrations
```bash
php yii migrate
```