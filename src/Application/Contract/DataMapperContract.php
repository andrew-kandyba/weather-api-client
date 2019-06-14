<?php declare(strict_types = 1);

namespace App\Application\Contract;

use App\Infrastructure\Http\Rest\DTO\WeatherDTO;

/**
 * Data mapper contract
 */
interface DataMapperContract
{
    /**
     * Map providers data into WeatherDTO object.
     *
     * @param string $data Providers data.
     *
     * @return WeatherDTO
     */
    public function map(string $data): WeatherDTO;
}
