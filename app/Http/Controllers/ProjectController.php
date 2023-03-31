<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Events\ProjectSaved;
use Illuminate\Http\Request;
use App\Models\Project;


use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;



class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');/*el metodo aud bloquea todo exepto index y show*/
        /* asi se protege el metodo que quieras*/

    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                   /* $portafolio = DB::table('projects')->get();se lla el metodo get para obtener toodo los datos */
                                                                                 /* $portafolio = Project::orderby('created_at','DESC')->get(); */
        return view('projects.index', [
        'newProject'=> new Project, //en la vista index con @Can permisos 
        'projects' => Project::with('category')->latest()->paginate(),
        'deletedProjects'=>Project::onlyTrashed()->get()//papelera de reciclaje con modelo y migracion                                                     /* <small>{{$portafolioItem->description}}</small><br>
                                                                //con el metodo with
                                                                   /* del modelo category 
                                                                    se elimina el problema n+1
                                                                    por cada proyecto una consulta

                                                                                  <small>{{$portafolioItem->created_at->format('d-m-y')}}</small> */
     ]);  
    }                                                                          

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',$project=new Project);//aplicando politicas para un administrador tenga permisis 
        


        return view('projects.create',[
            'project'=>$project,
            'categories' => Category::pluck('name','id'),//pluck solo trae o lo que queremos de la tabla categoories
            
         ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(SaveProjectRequest $request)
    {  
        
    $project = new Project($request->validated());   

    $this->authorize('create',$project);//Autorizar politicas de usuarios ahut index controler request


    $project->image = $request->file('image')->store('images');


    $project->save();

    ProjectSaved::dispatch($project);




    return redirect()->route('projects.idex')->with('status','El proyecto fue creado con exito'); 
/* 
        $fields = request()->validate([
             'title'=>'required',
             'url'=>'required',
             'description'=>'required', 
        ]); */
        
        
       /*  Project::create(request()->only('title','url','description')); */
       /*  Project::create(request()->all()); */
        /* ([
            'title'=>request('title'),
            'url'=>request('url'),
            'description'=>request('description'),

        ]); */
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
      
       return view('projects.show',compact('project'));
       
       
       /* ['project' => $project]);  */
    }    /* route-model-binding */

   /*  public function show($id)
    {
       $projects =Project::findOrFail($id);
       return view('projects.show',compact('projects')); //
    } */




    /**
     * 
     *  
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {

        $this->authorize('update', $project);

    return view('projects.edit', [
   'project' => $project,
   'categories' => Category::pluck('name','id')//pluck solo trae o lo que queremos de la tabla categoories
]);
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    { 

     

        if($request->hasfile('image')){//si el request contiene el archivo con el nombre 'image'
         
        Storage::delete($project->image);


        $project->fill($request->validated());//se vlida 

         $project->image = $request->file('image')->store('images');//asignamos imagen que se sube
               

        $project->save();//se guarda

        ProjectSaved::dispatch($project);//disparando evento 
        
        }else{
            
            $project->update(array_filter($request->validated()));//array_filter para que se actualice los datos y la imagen se mantega
        }


        return redirect()->route('projects.show',$project)->with('status','El proyecto fue Actualizado con exito'); 
    }

    /**
     * Remove the specifi,ed resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    { 
      $this->authorize('delete', $project);
      $project->delete();
      return redirect()->route('projects.idex')->with('status','El proyecto fue Eliminado con exito');
        //Project::destroy($id);
    }
    public function restore( $projectUrl)
    { 

        $project=Project::withTrashed()->whereUrl($projectUrl)->firstOrfail();
        $this->authorize('restore', $project);
         $project->restore();
        return redirect()->route('projects.idex')->with('status','El proyecto fue restaurado con exito');
        //Project::destroy($id);
    }

     public function forceDelete($projectUrl){  

        $project=Project::withTrashed()->whereUrl($projectUrl)->firstOrfail();
        $this->authorize('forceDelete', $project);
        Storage::delete($project->image);//para eliminar imagen del servidor pero no esta acyualmente eliminando
        $project->forceDelete();
        return redirect()->route('projects.idex')->with('status','El proyecto fue Eliminado permanentemente');
        //Project::destroy($id);

    }
}

