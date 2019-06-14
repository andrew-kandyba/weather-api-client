<?php declare(strict_types = 1);

namespace App\Application\DataProvider;

use App\Application\Contract\WeatherDataProviderContract;

/**
 * Client for work with http://api.apixu.com
 */
class ApixuWeatherDataProvider implements WeatherDataProviderContract
{
    /**
     * Api key.
     * Please see https://www.apixu.com/doc/authentication.aspx for get more info.
     */
    private const API_KEY = '36e44435ba98459498d11318191406';

    /**
     * Api endpoint for get Current weather data.
     * Please see https://www.apixu.com/doc/request.aspx for get more info.
     */
    private const API_ENDPOINT = 'http://api.apixu.com/v1/current.json';

    /**
     * {@inheritDoc}
     */
    public function getWeatherInTheCityByCityZipCode(string $cityZipCode)
    {
       return $cityZipCode;
    }
}
