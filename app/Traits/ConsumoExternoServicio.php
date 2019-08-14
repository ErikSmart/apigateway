<?php

/**
 *
 */
 namespace App\Traits;
 use GuzzleHttp\Client;

trait ConsumoExternoServicio
{
  public function performRequest($method, $requestUrl, $formParams =[],$headers=[])
  {
    $cliente = new Client([
      'base_uri' => $this->baseUri,
    ]);
//Le pasa el parametro del tocken a headers 
    if (isset($this->secret)) {
      $headers['Authorization'] = $this->secret;
    }

    $response = $cliente->request($method,$requestUrl,
    [
     'form_params' => $formParams,
     'headers' => $headers
    ]);

    return $response->getBody()->getContents();

  }
}
