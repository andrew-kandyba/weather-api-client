<?php declare(strict_types = 1);

namespace App\Application\DataProvider;

use App\Application\Contract\DataMapperContract;
use App\Application\Contract\DataProviderContract;
use App\Infrastructure\Http\Rest\DTO\WeatherDTO;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Client for work with http://api.openweathermap.org
 */
class OpenWeatherMapDataProvider implements DataProviderContract
{
    /**
     * Api key.
     * Please see https://openweathermap.org/appid for get more info.
     */
    private const API_KEY = '16ba361cd84093ea86809e3b974ddfb4';

    /**
     * Api endpoint for get Current weather data.
     * Please see https://openweathermap.org/current for get more info.
     */
    private const API_ENDPOINT = 'http://api.openweathermap.org/data/2.5/weather';

    /**
     * Http client.
     *
     * @var HttpClientInterface
     */
    private $httpClient;

    /**
     * Provider data mapper.
     *
     * @var DataMapperContract
     */
    private $dataMapper;

    /**
     * ApixuWeatherDataProvider constructor.
     *
     * @param HttpClientInterface $httpClient Http client.
     */
    public function __construct(HttpClientInterface $httpClient, DataMapperContract $dataMapper)
    {
        $this->httpClient = $httpClient;
        $this->dataMapper = $dataMapper;
    }

    /**
     * {@inheritDoc}
     */
    public function getData(string $cityZipCode): WeatherDTO
    {
        $queryParam = http_build_query([
            'appid' => self::API_KEY,
            'zip'   => $cityZipCode,
        ]);

        $requestUri = self::API_ENDPOINT . '?' . $queryParam;
        $response = $this->httpClient->request('GET', $requestUri);

       return $this->dataMapper->map($response->getContent());
    }
}
