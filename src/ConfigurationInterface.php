<?php

declare(strict_types=1);

/*
 * WeatherAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WeatherAPILib;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface
{
    /**
     * Get timeout for API calls
     */
    public function getTimeout(): int;

    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Get the credentials to use with AccessToken
     */
    public function getAccessTokenCredentials(): ?AccessTokenCredentials;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string;
}
