<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['nameidentification', 'description','qty', 'qrcode'];

    public function getMaterials(string|null $search = null)
    {
       $materials = $this->where(function ($query) use ($search){
            if ($search){
                $query->where('nameidentification', $search);                
            }
        })->get();    

        return $materials;
    }

    /*public function User()
    {
        return $this->BelongsTo(User::class);
    }*/
    

}
