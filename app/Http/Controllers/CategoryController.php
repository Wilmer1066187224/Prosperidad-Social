<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function show(Category $category){
               
        return view('projects.index',[

            'category'=>$category,

          'projects'=> $category->projects()->with('category')->latest()->paginate()//para evitar dobles consultas n+1-podemos paginarlos

        ]);

    }
    
}
