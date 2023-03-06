<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public function projects(){    //cuando tengo una categoria puedo acceder a muchos projectos 

      return $this->hasMany(Project::class); //tiene muchos 
    
   }
}
