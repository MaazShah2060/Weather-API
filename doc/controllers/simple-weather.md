# Simple Weather

```php
$simpleWeatherController = $client->getSimpleWeatherController();
```

## Class Name

`SimpleWeatherController`


# Weather

```php
function weather(string $q): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `q` | `string` | Query, Required | city name |

## Response Type

`void`

## Example Usage

```php
$q = 'q0';

$simpleWeatherController->weather($q);
```

