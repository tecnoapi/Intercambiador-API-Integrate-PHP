# Intercambiador-API-Integrate-PHP

## Installation

composer install tecnoapi/intercambiador-api-integrate-php


## Usage
```
use ApiIntercambiador\ApiIntercambiador;
$api = new ApiIntercambiador($token, $token_source, [mode ('sandbox' | '')]);
```

# GET
```
$result = $api->getProperties();
```

# POST
```
$result = $api->addProperty(json_encode([
    [
         "fuente_origen"=> "1123123",
         "agency_id"=> "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0aW1lIjoiV2VkIEp1biAwOCAyMDIyIDEwOjM5OjE2IEdNVCswMjAwIChob3JhIGRlIHZlcmFubyBkZSBFdXJvcGEgY2VudHJhbCkiLCJ1c2VySWQiOiI2Mjk0YmM3ZGU1ODVlODhiODYxNzYzZDAiLCJpYXQiOjE2NTQ2Nzc1NTZ9.0xFLIf631G7PbXEL_ef04O3w6gjnu8lZ-gExsR9Wfto",
         "reference"=> "11905-OB",
         "status_id"=> "1",
         "status_property_id"=> "1",
         "property_type_id"=> "8",
         "property_subtype_id"=> "2",
         "visibility_type_id"=> "2",
         "cadastral_reference"=> "9015608DF2891E0017AL",
         "price_sale"=> null,
         "price_rent"=> 95,
         "community_costs"=> "",
         "ibi_costs"=> "",
         "traspass"=> "",
         "orientation_id"=> "6",
         "energy_clasification_id"=> "6",
         "co2_release_class_id"=> "2",
         "conservation_state_id"=> "4",
    ]
]));
```

# PUT
```
$result = $api->updateProperty(json_encode([
    [
         "property_id"=> "62aafcb53e575f7b21a16dfd",
         "fuente_origen"=> "1123123",
         "agency_id"=> "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0aW1lIjoiV2VkIEp1biAwOCAyMDIyIDEwOjM5OjE2IEdNVCswMjAwIChob3JhIGRlIHZlcmFubyBkZSBFdXJvcGEgY2VudHJhbCkiLCJ1c2VySWQiOiI2Mjk0YmM3ZGU1ODVlODhiODYxNzYzZDAiLCJpYXQiOjE2NTQ2Nzc1NTZ9.0xFLIf631G7PbXEL_ef04O3w6gjnu8lZ-gExsR9Wfto",
         "reference"=> "11905-OB",
         "status_id"=> "1",
         "status_property_id"=> "1",
         "property_type_id"=> "8",
         "property_subtype_id"=> "2",
         "visibility_type_id"=> "2",
         "cadastral_reference"=> "9015608DF2891E0017AL",
         "price_sale"=> null,
         "price_rent"=> 95,
         "community_costs"=> "",
         "ibi_costs"=> "",
         "traspass"=> "",
         "orientation_id"=> "6",
         "energy_clasification_id"=> "6",
         "co2_release_class_id"=> "2",
         "conservation_state_id"=> "4",
    ]
]));
```

# DELETE
```
$result = $api->deleteProperty(json_encode(["62aafcb53e575f7b21a16dfd", "62abfcb53e575f7b21a16dfg"]));
```