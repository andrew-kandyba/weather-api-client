<?php declare(strict_types = 1);

namespace App\Infrastructure\Http\Rest\DTO;

/**
 * WeatherDTO.
 */
final class WeatherDTO
{
    /**
     * City.
     *
     * @var string
     */
    public $city;

    /**
     * Temperature.
     *
     * @var string
     */
    public $temp;

    /**
     * Pressure.
     *
     * @var string
     */
    public $pressure;

    /**
     * WeatherDTO constructor.
     *
     * @param string $city     City.
     * @param string $temp     Temperature.
     * @param string $pressure Pressure.
     */
    public function __construct(string $city, string $temp, string $pressure)
    {
        $this->city = $city;
        $this->temp = $temp;
        $this->pressure = $pressure;
    }
}
