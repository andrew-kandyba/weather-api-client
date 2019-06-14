<?php declare(strict_types = 1);

namespace App\Application\DataMapper;

use App\Application\Contract\DataMapperContract;
use App\Infrastructure\Http\Rest\DTO\WeatherDTO;

/**
 * OpenWeatherMap data mapper
 */
class OpenWeatherMapDataMapper implements DataMapperContract
{
    /**
     * {@inheritDoc}
     */
    public function map(string $data): WeatherDTO
    {
        /** @noinspection JsonDecodeUsageInspection */
        $dataObject = json_decode($data);

        if (true === is_object($dataObject)) {
            return new WeatherDTO(
                $dataObject->name,
            (string) $dataObject->main->temp,
            (string) $dataObject->main->pressure);
        }

        return new WeatherDTO('no data','no data','no data');
    }
}
