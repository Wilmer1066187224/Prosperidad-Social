<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//verificamos una puerta 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'title'=>'required',
                'url'=>[ 
                 'required',
                 Rule::unique('projects')->ignore($this->route('project'))
                 ], 

                'category_id'=> ['required',
                'exists:categories,id'
            ],
          
                'image'=> 
                $this->route('project') ? "nullable" : 'required',
                'mimes: jpg,png,webp,jpeg.ico', 
                     //MIME TYPE 'image' jpg,png,bmp,git,svg, o webp.
                'description'=> 'required'  
             
             
                //
        ];

       
    }
    public function messages()
    {
        return [

            'title.required'=>'El proyecto necesita un titulo',
            'title.required'=>'El proyecto necesita un titulo',
            'title.required'=>'El proyecto necesita un titulo',
        ];
    }
}
