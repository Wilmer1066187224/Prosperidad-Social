<?php

namespace App\Models;




use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public function getRouteKeyname(){

      return 'url'; //cambiamos url id que no e amigable, se coloca como se declaro en la migracion 
   }




   public function projects(){    //cuando tengo una categoria puedo acceder a muchos projectos 

      return $this->hasMany(Project::class); //tiene muchos 
    
   }
}
