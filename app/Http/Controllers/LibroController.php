<?php

namespace App\Http\Controllers;
use Illuminate\http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\LibroService;
use App\Services\AutorService;
//use Illuminate\Support\Facades\Response;
class LibroController extends Controller
{
  use ApiResponser;
  public $libroService;
  public $autorService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(LibroService $libroService, AutorService $autorService)
    {
        $this->libroService = $libroService;
        $this->autorService = $autorService;
    }

    public function index()
   {
    return $this->successResponse($this->libroService->getLibros());
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {

   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
     $this->autorService->getAutor($request->autor_id);
      return $this->successResponse($this->libroService->guardarLibro($request->all(),Response::HTTP_CREATED));
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
     $json = [$this->libroService->unLibro($id), $this->autorService->getAutor($id)];
     $json = json_encode($json);
     $patron = array('/\\\"/','/}}/','/{{/','/"{/');
     $sustitucion = array("\"","\"","");
     $json = preg_replace($patron,$sustitucion, $json);

      return $this->successResponse($json );
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
      return $this->successResponse($this->libroService->actulizarLibro($request->all(),$id));
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $this->successResponse($this->libroService->eliminarLibro($id));
   }

    //
}
