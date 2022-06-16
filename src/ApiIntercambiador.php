<?php 
namespace ApiIntercambiador;

class ApiIntercambiador
{
    private $token;
    private $source_token;
    private $sandbox;
    private $url;
    const APP_URL_SANDBOX = "https://sandbox.apiplataforma.online";
    const APP_URL_PRO = "https://intercam.apiplataforma.online";

    public function __construct($token, $source_token, $sandbox=null)
    {
        $this->token = $token;
        $this->source_token = $source_token;
        $this->sandbox = $sandbox;
        if($sandbox){
            $this->url = self::APP_URL_SANDBOX;
        } else {
            $this->url = self::APP_URL_PRO;
        }
    }

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
            'source-token: ' . $this->source_token,
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
        CURLOPT_URL => $this->url.'/api-intercambiador',
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
            'source-token: ' . $this->source_token,
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
        CURLOPT_URL => $this->url.'/api-intercambiador',
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
            'source-token: ' . $this->source_token,
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
        CURLOPT_URL => $this->url.'/api-intercambiador',
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
            'source-token: ' . $this->source_token,
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}