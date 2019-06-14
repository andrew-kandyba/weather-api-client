<?php declare(strict_types = 1);

namespace App\Application\Contract;

use App\Infrastructure\Http\Rest\DTO\WeatherDTO;

/**
 * Data provider contract.
 */
interface DataProviderContract
{
    /**
     * Get weather in the city.
     *
     * @param string $cityIdentifier City identifier (ex. zipCode)
     *
     * @return mixed
     */
    public function getData(string $cityIdentifier): WeatherDTO;
}
