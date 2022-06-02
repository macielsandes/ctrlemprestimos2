<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateMaterialFormRequest;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
   //controle que dicireciona a parte inicial
   public function index()
   {
    $materials = Material::get();

    return view('materials.index', compact('materials'));

   }

   //controle que mostra o usuario
   public function show($id)
   {
      if(!$materials= Material::find($id))
            //se for passado um ID de um usuario invalido, o usuario será direcionado para tela inicial
           return redirect() -> route('materials.index');

       //se for passado um ID de um usuario valido, sera direcionado para a tela de edição de usuario  
        return view('materials.show', compact('material'));
   }

    //Controle para a edição de usuario
    public function create()
    {
       return view('materials.create'); 
    }

    //Evia dados para o cadastro de materiais
    public function store(StoreUpdateMaterialFormRequest $request){
      //Recebe todos dados do formulario,
      $data = $request->all(); 
      
      Material::create($data);
      return redirect()-> route ('materials.index');
    }

}
