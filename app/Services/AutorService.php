<?php

namespace App\Services;
use App\Traits\ConsumoExternoServicio;

/**
 *
 */
class AutorService
{
use ConsumoExternoServicio;
  public $baseUri;

  public function __construct()
  {
    $this->baseUri = config('services.autors.base_uri');
  }
  public function getAutores()
  {
     return $this->performRequest('GET', 'http://lumen:8000/autores');
  }
}
