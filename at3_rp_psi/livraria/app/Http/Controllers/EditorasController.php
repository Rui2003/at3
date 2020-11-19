<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class EditorasController extends Controller
{
      public function index(){
   	//$editoras = Editora::all()->sortbydesc('ide');
   	$editoras = Editora::paginate(4);

   	return view('editoras.index', ['editoras'=>$editoras
   ]);

   }

    public function show (Request $request){
	$idEditora=$request->id;

	$editora=Editora::find($idEditora);

	return view('editoras.show',  ['editora'=>$editora
]);
}
}
