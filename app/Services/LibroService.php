<?php

namespace App\Services;
use App\Traits;
/**
 *
 */
class LibroService
{
use ConsumoExternoServicio;
  public $baseUri;

  public function __construct()
  {
    $this->baseUri = config('services.libros.base_uri');
  }
}
