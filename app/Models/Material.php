<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'descricao',
        'numserial',
        'quantidade',
    ];
    
    //classe para uma pesquisa
    public function getMaterials(string|null $search = null)
    {
       $materials = $this->where(function ($query) use ($search){
            if ($search){
                $query->where('serial', $search);
                $query->orwhere('descricao', 'LIKE', "%{$search}%");
            }
        })->get();    

        return $materials;
    }
 
   
}
