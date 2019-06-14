<?php declare(strict_types = 1);

namespace App\Infrastructure\Http\Rest\Controller;

use App\Application\Service\WeatherService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Serializer\SerializerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;

/**
 * Class WeatherController
 */
class WeatherController extends AbstractFOSRestController
{
    /**
     * WeatherDTO service object.
     *
     * @var WeatherService
     */
    private $weatherService;

    /**
     * Serializer.
     *
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * WeatherController constructor.
     *
     * @param SerializerInterface $serializer
     * @param WeatherService      $weatherService
     */
    public function __construct(SerializerInterface $serializer, WeatherService $weatherService)
    {
        $this->serializer = $serializer;
        $this->weatherService = $weatherService;
    }

    /**
     * @Rest\Get("/weather/{cityZipCode}")
     *
     * Get current weather data in the city by city zip code.
     *
     * @param string $cityZipCode
     *
     * @return JsonResponse
     */
    public function getWeatherInTheCityByCityZipCode(string $cityZipCode): Response
    {
        $data = $this->serializer->serialize(
            $this->weatherService->getData($cityZipCode),
            'json'
        );

        return new Response($data);
    }
}
