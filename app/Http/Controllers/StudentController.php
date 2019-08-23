<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\departamento;
use App\municipio;
use App\documento;
use App\genero;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $student = Estudiante::all();
       
        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamento=departamento::all();
        $genero=genero::all();
        $documento=documento::all();
        return view('student.create', compact('departamento','documento','genero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if($request->hasFile('foto')){
            $file = $request->file('foto');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            //return $name;
        }else{
            //return "sinfoto.jpg";
            $name="sinfoto.jpg";
        }
         $e = new Estudiante();
         $e->documento = $request->documento;
         $e->nombres = $request->nombres;
         $e->apellidos = $request->apellidos;
         $e->genero_id = $request->genero_id;
         $e->documento = $request->documento;
         $e->documento_id = $request->documento_id;
         $e->fechaNacimiento = $request->fechaNacimiento;
         $e->depaNacimiento_id = $request->depaNacimiento_id;
         $e->munNacimiento_id = $request->munNacimiento_id;
         $e->foto = $name;
         $e->save();
         return redirect('/student/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Estudiante::where('nombres', $id)
               ->orderBy('apellidos', 'desc')               
               ->get();
                return view('student.index', compact('student'));
    }


    public function mostrar(Request $request, $id){

        if($request->ajax()){
            $municipios=municipio::municipios($id);
            return response()->json($municipios);
        }   
    }


    public function mostrarGenero(Request $request, $id){

        if($request->ajax()){
            $generos=genero::generos($id);
            return response()->json($generos);
        }
    }
    
    public function mostrarDoc(Request $request, $id){

        if($request->ajax()){
            $documentos=documento::documentos($id);
            return response()->json($documentos);
        }
    }
    
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $student)
    {
        $documento=documento::all();
        return view('student.edit', compact('student', 'documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $student)
    {
        $student->fill($request->all());
        $student->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
