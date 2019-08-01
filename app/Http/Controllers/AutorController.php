<?php

namespace App\Http\Controllers;
use Illuminate\http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\AutorService;
//use Illuminate\Support\Facades\Response;
class AutorController extends Controller
{
  use ApiResponser;
  public $autorService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AutorService $autorService)
    {
        $this->autorService = $autorService;
    }

    public function index()
   {
      return $this->successResponse($this->autorService->getAutores());
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
     return $this->successResponse($this->autorService->crearAutor($request->all()),Response::HTTP_CREATED);
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      return $this->successResponse($this->autorService->getAutor($id));
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
     return $this->successResponse($this->autorService->editarAutor($request->all(),$id));
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      return $this->successResponse($this->autorService->eliminarAutor($id));
   }

    //
}
