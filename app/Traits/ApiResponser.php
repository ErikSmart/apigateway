<?php
namespace App\Traits;
use Illuminate\Http\Response;
/**
 *
 */
trait ApiResponser
{
  public function successResponse($data, $code = Response::HTTP_OK)
  {
    return response($data,$code)->header('Content-Type', 'application/json');
  }
  public function errorResponse($mensaje, $code)
  {
    return response()->json(['error' => $mensaje, 'code' => $code ], $code);
  }
  public function errorMessage($mensaje, $code)
  {
    return response($mensaje,$code)->header('Content-Type', 'application/json');
  }

}
