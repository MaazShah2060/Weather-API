
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `timeout` | `int` | Timeout for API calls |

The API client can be initialized as follows:

```php
$client = new WeatherAPILib\WeatherAPIClient([
    // Set authentication parameters
    'accessToken' => 'AccessToken',
]);
```

## Weather API Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getSimpleWeatherController() | Gets SimpleWeatherController |

