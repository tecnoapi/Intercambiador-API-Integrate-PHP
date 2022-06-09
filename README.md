# Intercambiador-API-Integrate-PHP

## Installation

composer install tecnoapi/intercambiador-api-integrate-php


## Usage
```
use ApiIntercambiador\ApiIntercambiador;
$api = new ApiIntercambiador($token, [mode ('sandbox' | '')]);
```

# GET
```
$result = $api->getProperties();
```

# POST
```
$result = $api->addProperty(json_encode([
    [ Property data ]
]));
```

# PUT
```
$result = $api->updateProperty(json_encode([
    [
        "_id"=> ID property,
        Property data
    ]
]));
```

# DELETE
```
$result = $api->deleteProperty(json_encode($array_ids));
```