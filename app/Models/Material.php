<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'descricao',
        'serial',
        'quantidade',
    ];

    public function getMaterial(string|null $search = null)
    {
       $material = $this->where(function ($query) use ($search){
            if ($search){
                $query->where('serial', $search);
                $query->orwhere('descricao', 'LIKE', "%{$search}%");
            }
        })->get();    

        return $material;
    }
 
}
