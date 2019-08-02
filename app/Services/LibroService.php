<?php

namespace App\Services;

use App\Traits\ConsumoExternoServicio;

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
    //Api de Libros
    public function getLibros()
    {
        return $this->performRequest('GET', '/libro');
    }
    public function guardarLibro($data)
    {
        return $this->performRequest('POST', '/libro', $data);
    }
    public function unLibro($v)
    {
      return $this->performRequest('GET', "/libro/{$v}");
    }
    public function actulizarLibro($request,$id)
    {
      return $this->performRequest('PUT',"/libro/{$id}",$request);
    }
    public function eliminarLibro($id)
    {
      return $this->performRequest('DELETE', "libro/{$id}");
    }
}
