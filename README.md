## Monobank API

### Installation

```bash
composer require mcmatters/monobank-api
```

### Official Documentation

https://api.monobank.ua/docs/

### Usage

This library only for personal usage

```php
<?php

require 'vendor/autoload.php';

$client = new \McMatters\MonobankApi\MonobankClient('PERSONAL_TOKEN');

$currencies = $client->currency()->list();

$yourInfo = $client->client()->getInfo();
$anotherPersonInfo = $client->client()->getInfo('ANOTHER_PERSON_TOKEN');
$statement = $client->client()->getStatement('0', 1546304461);
```
