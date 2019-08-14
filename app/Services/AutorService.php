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
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.autors.base_uri');
        $this->secret = config('services.autors.secret');
    }
    public function getAutores()
    {
        return $this->performRequest('GET', '/autores');
    }
    public function getAutor($id)
    {
        return $this->performRequest('GET', "/autores/{$id}");
    }
    public function crearAutor($data)
    {
        return $this->performRequest('POST', '/autores', $data);
    }
    public function editarAutor($data, $id)
    {
        return $this->performRequest('PUT', "/autores/{$id}", $data);
    }
    public function eliminarAutor($id)
    {
        return $this->performRequest('DELETE', "/autores/{$id}");
    }
}
