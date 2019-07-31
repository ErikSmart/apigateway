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

    $response = $cliente->request($method,$requestUrl,
    [
     'form_params' => $formParams,
     'headers' => $headers
    ]);

    return $response->getBody()->getContents();

  }
}
