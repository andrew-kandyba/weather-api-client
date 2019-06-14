<?php

namespace App\Tests\Application\DataMapper;

use PHPUnit\Framework\TestCase;
use App\Application\DataMapper\OpenWeatherMapDataMapper;

class OpenWeatherMapDataMapperTest extends TestCase
{
    /**
     * Mapper object.
     *
     * @var OpenWeatherMapDataMapper
     */
    private $mapper;

    public function setUp()
    {
        parent::setUp();

        $this->mapper = new OpenWeatherMapDataMapper();
    }

    /**
     * Test OpenWeatherMapDataMapper::map()
     */
    public function testMap(): void
    {
        $fakeProviderResponse = json_encode([
            'name' => 'SomeCity',
            'main' => ['temp' => 1, 'pressure' => 1]
        ]);

        $result = $this->mapper->map($fakeProviderResponse);

        self::assertEquals('SomeCity', $result->city);
        self::assertEquals('1', $result->temp);
        self::assertEquals('1', $result->pressure);
    }

    /**
     * Test OpenWeatherMapDataMapper::map() without providers data.
     */
    public function testMapWithoutProviderData(): void
    {
        $result = $this->mapper->map('');

        self::assertEquals('no data', $result->city);
        self::assertEquals('no data', $result->temp);
        self::assertEquals('no data', $result->pressure);
    }
}
