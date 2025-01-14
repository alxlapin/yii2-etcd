# Yii2 etcd component

[![Latest Stable Version](https://poser.pugx.org/s1lver/yii2-etcd/v/stable.svg)](https://packagist.org/packages/s1lver/yii2-etcd)
[![Total Downloads](http://poser.pugx.org/s1lver/yii2-etcd/downloads)](https://packagist.org/packages/s1lver/yii2-etcd)

Interaction component with `etcd` (A distributed, reliable key-value store for the most critical data of a distributed system) for `Yii2`.

https://etcd.io

## Required

- PHP: >= 8.0
- grpc - for RPC (in developing)
- protobuf - for RPC (in developing)

## Install

```bash
composer require s1lver/yii2-etcd "^1.0.0"
```

or add

```
"s1lver/yii2-etcd": "^1.0.0"
```

to the require section of your composer.json file.

## Supported etcd API version

- v3

## Supported etcd methods

- `version`
- `range`
- `put`
- `authenticate`


## How to use

Configure

```php
$config = [
    'components' => [
        'etcd' => [
            'class' => \S1lver\Etcd\Etcd::class,
            'host' => 'etcd:2379',
            'user' => 'username',
            'password' => 'password',
        ],
    ],
];
```

Get key value
```php
Yii::$app->etcd->getKey('hello')->firstKeyValue;

// Hello
```

Get etcd version

```php
Yii::$app->etcd->version;

// {"etcdserver":"3.5.8","etcdcluster":"3.5.0"}
```
