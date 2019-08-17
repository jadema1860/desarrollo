<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\departamento;
use App\municipio;
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
        return view('student.create', compact('departamento'));
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
        }
       // return $request;
         $e = new Estudiante();
         $e->numeroIdentificacion = $request->numeroIdentificacion;
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
       /// return "respondiendo desde".$id;
       $student=Estudiante::find($id);
      //return $student;
       return view('student.show', compact('student'));
    }

    public function mostrar(Request $request, $id){

        if($request->ajax()){
            $municipios=municipio::municipios($id);
            return response()->json($municipios);
        }
       // return "responde desde mostrar".$id;
    }

        /*
    public function getMunicipios(Request $request, $id){
        if($request->ajax()){
            $municipios=municipio::municipios($id);
            return response()->json($municipios);
        }

    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
