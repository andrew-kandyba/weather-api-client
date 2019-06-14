<?php declare(strict_types = 1);

namespace App\Infrastructure\Http\Rest\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\AbstractFOSRestController;

/**
 * Class WeatherController
 */
class WeatherController extends AbstractFOSRestController
{
    /**
     * Get current weather data in the city by city zip code.
     *
     * @Rest\Get("/weather/{cirtyZipCode<\d+>}")
     */
    public function getWeatherInTheCityByCityZipCode(): JsonResponse
    {
        return $this->json([
            'message' => self::class,
        ]);
    }
}
