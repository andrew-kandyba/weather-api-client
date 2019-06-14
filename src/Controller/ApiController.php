<?php declare(strict_types = 1);

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Api controller.
 */
class ApiController extends AbstractController
{
    /**
     * Get current weather data in the city by city zip code.
     *
     * @Route("/weather/{cirtyZipCode<\d+>}")
     */
    public function getWeatherInTheCityByCityZipCode(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AppController.php',
        ]);
    }
}
