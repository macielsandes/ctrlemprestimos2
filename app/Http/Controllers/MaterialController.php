<?php

namespace App\Http\Controllers;

use App\http\Requests\StoreUpdateMaterialFormRequest;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{

   protected $model;
   
   // criando um construtor
   public function __construct(Material $material)
   {
       $this->model = $material;
   }

   //Controle que direciona para pagina inicial de material
   public function index(Request $request)
   {
      $materials = $this->model
       ->getMaterials(
          search: $request ->search ?? ''
      );

    return view('materials.index', compact('materials'));

   }

   //controle para mostrar material
   public function show($id)
   {
      if(!$materials= Material::find($id))
          
         //se for passado um ID de um material invalido, direciona para tela inicial
         return redirect() -> route('materials.index');

         //se for passado um ID de um material valido, direciona para a tela de edição de material  
        return view('materials.show', compact('material'));
   }

   //Controle para a edição de material
    public function create()
    {
       return view('materials.create'); 
    }

    //Enviando dados para o cadastrados para o banco de dados
    public function store(StoreUpdateMaterialFormRequest $request){      
     
      //Recebe dados do formulario,
      ($data = $request->all());
      
      dd(Material::create($data));
      
         return redirect()-> route ('materials.index');
    }

}
