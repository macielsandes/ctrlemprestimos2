<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'numberserie', 'numberassets', 'qty'];

    public function getMaterials(string|null $search = null)
    {
       $materials = $this->where(function ($query) use ($search){
            if ($search){
                $query->where('numberassets', $search);
                $query->orwhere('description', 'LIKE', "%{$search}%");
            }
        })->get();    

        return $materials;
    }

}
