<?php 
namespace ApiIntercambiador;

class ApiIntercambiador
{
    private $token;
    private $sandbox;
    private $url;
    const APP_URL_SANDBOX= "http://localhost:3000";
    const APP_URL_PRO= "http://localhost:3000";

    public function __construct($token, $sandbox=null)
    {
        $this->token = $token;
        $this->sandbox = $sandbox;
        if($sandbox){
            $this->url = $this->APP_URL_SANDBOX;
        } else {
            $this->url = $this->APP_URL_PRO;
        }
    }

    // $api = new ApiIntercambiador($token) => REAL

    // $api = new ApiIntercambiador($token, 'sandbox') //=> SANDBOX

    // $result = $api->getProperties(); => GET /api-intercambiador 

    // $result = $api->addProperty($array_data); => POST /properties

    // $result = $api->updateProperty($array_data); => PUT /properties

    // $result = $api->removeProperty($array_id); => DELETE /properties

    

    // $array_data és un array de properties, pot ser que només vungui 1 property

    // $array_id és un array d’IDs de properties, pot ser que només vingui 1 ID
    
    public function getProperties()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $this->url.'/api-intercambiador',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'x-access-token: ' . $this->token,
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);

        return $response;
    }

    
    public function addProperty($array_data)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $this->url.'/properties',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $array_data,
        CURLOPT_HTTPHEADER => array(
            'x-access-token: ' . $this->token,
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }


    public function updateProperty($array_data)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $this->url.'/properties',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => $array_data,
        CURLOPT_HTTPHEADER => array(
            'x-access-token: ' . $this->token,
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public function deleteProperty($array_id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $this->url.'/properties',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_POSTFIELDS => $array_id,
        CURLOPT_HTTPHEADER => array(
            'x-access-token: ' . $this->token,
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}