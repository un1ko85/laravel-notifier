# Easy Notification Messages for Laravel 5

## Installation

Add Notifier to your composer.json file:

```js
"require": {
    "pascal/laravel-notifier": "~1.0"
}
```

Now, run a composer update on the command line from the root of your project:

    composer update

### Registering the Package

Include the service provider within `app/config/app.php`.

```php
'providers' => [
    ...
    'Pascal\Notifier\NotifyServiceProvider'
    ...
];
```

Add the facade alias to this same file at the bottom:

```php
'aliases' => [
    ...
    'Notify' => 'Pascal\Notifier\NotifyFacade'
];
```

## Usage

## ToDo
  - make classes editable in config
  - render multiple messages
  - show flash messages in addition to alerts
  - make use of $config
  - improve documentation