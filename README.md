# Tigris: Telegram Bot API Client #

[![Build Status](https://travis-ci.org/tigris-php/telegram-bot-api.svg?branch=master)](https://travis-ci.org/tigris-php/tigris)
[![Join the chat at https://gitter.im/tigris-php/tigris](https://badges.gitter.im/tigris-php/tigris.svg)](https://gitter.im/tigris-php/tigris?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/tigris-php/tigris/master/LICENSE.md)

Lightweight PHP7 client for a Telegram Bot API

## Overview

Current API version: **3.2**

Requirements: 
* PHP 7
* Guzzle 6

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require tigris/telegram-bot-api
```

or add

```
"tigris/telegram-bot-api": "*"
```

to the require section of your ```composer.json```

## Usage

### Getting started

*First you need to create **api client** instance*
```php
$httpClient = new \GuzzleHttp\Client();
$apiClient = new \Tigris\Telegram\ApiClient($httpClient);
$apiClient->setApiToken('CHANGEME');
```
*Create **api wrapper** instance*
```php
$apiWrapper = new \Tigris\Telegram\ApiWrapper($apiClient);
```
*Use **api wrapper** methods mapped directly to the Telegram Bot API*
```php
$apiWrapper->sendChatAction([
    'chat_id' => 123,
    'action' => \Tigris\Telegram\Helpers\ChatAction::TYPING,
]);
$apiWrapper->sendMessage([
    'chat_id' => 123
    'text' => 'Hello, World!',
    'parse_mode' => \Tigris\Telegram\Helpers\ParseMode::HTML,
]);                        
```

### Type mapping
Please note that every method call response call is being parsed into the
corresponding *type*. We offer PHP classes for all of the API objects. 
For example, `sendMessage()` call would return an instance of 
`\Tigris\Telegram\Types\Message` objects. Objects, arrays, nested arrays, scalar values
are fully supported by the type parser.

### Getting updates
```php
// Get array of the \Tigris\Telegram\Types\Updates\Update
$updates = $apiWrapper->getUpdates([
    'offset' => $this->offset,
]);

// Process received updates
foreach ($updates as $update) {
    $this->offset = $update->update_id + 1;
    $this->setLastOffset($this->offset);
    $this->processUpdate($update);
}                     
```
### Handling errors
By default every mapped method returns `null` value if an error occurs.
You can change this behavior by adding *callable* error handler to your ApiWrapper instance.

```php
$apiWrapper->setErrorHandler(function (\Exception $e) use ($logger) {
    $logger->log($e);         
});
```


### Going further
Please feel free to investigate the source code. All the api methods and types are 
fully documented. Please contact us in the gitter chat channel:
https://gitter.im/tigris-php/tigris

## License

MIT

