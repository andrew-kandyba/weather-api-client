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

## Endpoints
`api/v1/weather/{cityZipCode}` - получение данных о погоде, используя zip код города.

Некоторые доступные zip коды
```
01001 - Kиев
61144 - Харьков
49000 - Днепр
```
