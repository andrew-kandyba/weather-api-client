<?php declare(strict_types = 1);

namespace App\Application\Service;

use App\Infrastructure\Http\Rest\DTO\WeatherDTO;
use Symfony\Component\HttpFoundation\Response;
use App\Application\Contract\DataProviderContract;

/**
 * Service for work weather data.
 */
class WeatherService
{
    /**
     * WeatherDTO data provider object.
     *
     * @var DataProviderContract
     */
    private $weatherDataProvider;

    /**
     * WeatherService constructor.
     *
     * @param DataProviderContract $weatherDataProvider WeatherDTO data provider object.
     */
    public function __construct(DataProviderContract $weatherDataProvider)
    {
        $this->weatherDataProvider = $weatherDataProvider;
    }

    /**
     * Get weather in the city.
     *
     * @param string $cityIdentifier City identifier. (ex. zipCode).
     *
     * @return WeatherDTO
     */
    public function getData(string $cityIdentifier): WeatherDTO
    {
        return $this->weatherDataProvider->getData($cityIdentifier);
    }
}
