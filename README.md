<a href="#">
  <div align="center">
    <img src="https://user-images.githubusercontent.com/1675033/84406764-a7091300-ac12-11ea-8250-774a8f0697fe.jpg" width='128'/>
  </div>
</a>
<h1 align="center">Trackmage - A tracking page for your store. Beautiful, branded, customizable.</h1>


# TrackMage SDK for php

[![Total Downloads](https://poser.pugx.org/trackmage/trackmage-sdk-php/downloads)](https://packagist.org/packages/trackmage/trackmage-sdk-php)

TrackMage is your most automated shipment tracking tool ever.
Discover the simple way to show your customers where their parcels are, provide support and get more great reviews


## Getting Started

1. **Create a TrackMage account** – First of all, you need to
   [sign up](https://app.trackmage.com) for a TrackMage account
   and retrieve your clientId and clientSecret.
2. **Minimum requirements** – To run the SDK you need to have installed **PHP >= 5.6**.
   We highly recommend using v7.2 or higher. 
3. **Install the SDK** – Using [Composer] is the recommended way to install the
   TrackMage SDK for PHP. The SDK is available on Packagist as the
   [`trackmage/trackmage-sdk-php`](http://packagist.org/packages/trackmage-sdk-php) package
   ```
   composer require trackmage/trackmage-sdk-php
   ```
4. **See the docs** There are [API documentation](https://docs.trackmage.com/docs/) and [the Swagger reference](https://api.trackmage.com/)

## Quick examples

### Create a client

```
use TrackMage\Client\TrackMageClient;

$clientId = '<client-it>';
$clientSecret = '<client-secret>';
$client = new TrackMageClient($clientId, $clientSecret);
```

### Posting a tracking number

```
$workspaceId = 100;

$response = $client->request('POST', '/shipments', ['json' => [
    'workspace' => '/workspaces/'.$workspaceId,
    'trackingNumber' => 'TN-1',
]]);

$response = $client->request('GET', '/workspaces/'.self::$workspaceId.'/shipments');
$data = json_decode($response->getBody()->getContents(), true);
```

### Get workspaces list

```
$response = $client->request('GET', '/workspaces/'.$workspaceId.'/shipments');
$data = json_decode($response->getBody()->getContents(), true);
```

### Get carriers list

```
$response = $client->request('GET', '/public/carriers');
$data = json_decode($response->getBody()->getContents(), true);
```

### Create webhook

Here is [the webhook handler example](examples/webhook-handler.php) that you need to make accessible on your side.

```php
<?php
$workflow = [
    'type' => 'webhook',
    'period' => 'immediately',
    'title' => 'Webhook for testing',
    'workspace' => '/workspaces/<id>',
    'enabled' => true,
    'concurrency' => '1',
    'url' => 'http://acme.example',
    'authType' => 'basic',
    'username' => 'webhook_user',
    'password' => 'password',
    'notificationEmails' => [
        'test@email.com', 'test-2@email.com',
    ],
];
$response = $client->request('POST', '/workflows', ['json' => $workflow]);
$data = json_decode($response->getBody()->getContents(), true);
$workflowId = $data['id'];
```

## Tests

To run the unit tests:

```bash
composer update
./vendor/bin/phpunit
```

## phpstan
```
vendor/bin/phpstan analyse -c phpstan.neon
vendor/bin/phpstan analyse -c phpstan-tests.neon
