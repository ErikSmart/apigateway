
<?php
namespace App\Http\Controllers;
use Illuminate\http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\LibroService;
//use Illuminate\Support\Facades\Response;
class LibroController extends Controller
{
  use ApiResponser;
  public $libroService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(LibroService $libroService)
    {
        $this->libroService = $libroService;
    }

    public function index()
   {
    
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

   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {

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

   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {

   }

    //
}
