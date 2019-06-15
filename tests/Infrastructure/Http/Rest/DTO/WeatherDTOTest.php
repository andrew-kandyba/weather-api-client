<?php declare(strict_types = 1);

namespace App\Tests\Infrastructure\Http\Rest\DTO;

use App\Infrastructure\Http\Rest\DTO\WeatherDTO;
use PHPUnit\Framework\TestCase;

/**
 * WeatherDTO test.
 */
class WeatherDTOTest extends TestCase
{
    /**
     * DTO instance.
     *
     * @var WeatherDTO
     */
    private $dtoInstance;

    public function setUp(): void
    {
        parent::setUp();

        $this->dtoInstance = new WeatherDTO('', '', '');
    }

    /**
     * Test DTO contract.
     */
    public function testDtoContract(): void
    {
        self::assertObjectHasAttribute('city', $this->dtoInstance);
        self::assertObjectHasAttribute('temp', $this->dtoInstance);
        self::assertObjectHasAttribute('pressure', $this->dtoInstance);
    }
}
