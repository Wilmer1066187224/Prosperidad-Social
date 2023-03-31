<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model
{
      use SoftDeletes;//delete_add tabla Projec



    protected $guarded =[];
    /*  protected $fillable=['title','url','description']; */



    public function getRouteKeyName()
    {
        return 'url';
    }


    public function category(){    //cuando tengo un projecto puedo acceder a una categoria

        return $this->belongsTo(Category::class);//tiene una categoria

    }
}
