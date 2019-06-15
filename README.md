# Weather-api-client (Symfony4 + OpenApi3)
[![Build Status](https://travis-ci.com/andrew-kandyba/weather-api-client.svg?branch=master)](https://travis-ci.com/andrew-kandyba/weather-api-client)

Пример апи для получения погоды на текущий день.

В качестве провайдера данных используется https://openweathermap.org

### Prerequisites
```
"php": ">=7.2",
"ext-ctype": "*",
"ext-iconv": "*",
"ext-json": "*"
```

### Installation
```
composer install
php bin/console server:run
```

### Endpoint
`api/v1/weather/{cityZipCode}` - получение данных о погоде, используя zip код города.

Некоторые доступные zip коды
```
01001 - Kиев
61144 - Харьков
49000 - Днепр
```

### Specification
https://editor.swagger.io/
```
openapi: 3.0.2
info:
  title: Weather api.
  description: Access current weather data for any ukrainian city.
  version: "1.0"
components:
  parameters:
    cityZipCode:
      name: cityZipCode
      in: path
      required: true
      description: The zip code of the city (Only Ukraine).
      schema:
        type: integer
        minLength: 5
        maxLength: 5
  schemas:
    WeatherDetailsResponse:
      properties:
        city:
          description: 'City.'
          type: string
          example: Kiev
        temp:
          description: 'Temperature. (°F)'
          type: number
          format: float
          example: 274.1
        pressure:
          description: 'Atmospheric pressure. (mm)'
          type: number
          format: float
          example: 768.0

paths:
  /weather/{cityZipCode}/:
    get:
      description: Returns weather in the city.
      parameters:
        - $ref: '#/components/parameters/cityZipCode'
      responses:
        200:
          description: Weather data object.
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/WeatherDetailsResponse'
```
