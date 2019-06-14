<?php declare(strict_types = 1);

namespace App\Application\Service;

use App\Application\Contract\WeatherDataProviderContract;

/**
 * Service for work weather data.
 */
class WeatherService
{
    /**
     * Weather data provider object.
     *
     * @var WeatherDataProviderContract
     */
    private $weatherDataProvider;

    /**
     * WeatherService constructor.
     *
     * @param WeatherDataProviderContract $weatherDataProvider Weather data provider object.
     */
    public function __construct(WeatherDataProviderContract $weatherDataProvider)
    {
        $this->weatherDataProvider = $weatherDataProvider;
    }

    /**
     * Get weather in the city by zipCode.
     *
     * @param string $cityZipCode City zipCode.
     *
     * @return mixed
     */
    public function getWeatherInTheCityByCityZipCode(string $cityZipCode)
    {
        return $this->weatherDataProvider->getWeatherInTheCityByCityZipCode($cityZipCode);
    }
}
