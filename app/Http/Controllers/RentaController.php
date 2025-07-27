<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentaController extends Controller
{
  public function index(){
    return view('projects.renta');
  }


  public function rentajoven(){
        return view('projects.rentajoven');
  }

  public function colombiamayor(){
    return view('projects.colombiamayor');
  }

 public function devolucioniva(){
    return view('projects.devolucioniva');
  }
  

  public function novedades(){
    return view('projects.Novedades');
  }
  public function inclusion(){
     return view('projects.Inclusion');

  }
public function ColmayorNovedades(){
     return view('projects.colmayorNovedades');

  }
  public function ColmayorInclusion(){
     return view('projects.colmayorInclusion');

  }

}