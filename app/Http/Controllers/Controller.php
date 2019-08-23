<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\Console\Input\Input;

use App\Estudiante;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
/*
    public function search($id){
        //$student=Estudiante::find($id);
           return "respondiendo desde desde el controlador basico";
        //return $student;
       // return view('student.show');
        //return view('student/search', compact('student'));
    }*/

    
    public function buscar(Request $request){

        $bus=$request->search;
        $student = Estudiante::where('nombres', 'like', '%'.$bus.'%')
        ->orWhere('apellidos', 'like', '%'.$bus.'%')
        ->orderBy('id', 'desc')->get();

        return view('student.index', compact('student'));
//return $posts;
    }

}


