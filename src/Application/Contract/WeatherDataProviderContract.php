<?php declare(strict_types = 1);

namespace App\Application\Contract;

/**
 * Weather data provider contract.
 */
interface WeatherDataProviderContract
{
    /**
     * Get weather in the city by zipCode.
     *
     * @param string $cityZipCode Zip code.
     *
     * @return mixed
     */
    public function getWeatherInTheCityByCityZipCode(string $cityZipCode);
}
