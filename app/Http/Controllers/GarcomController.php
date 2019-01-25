<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GarcomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garcoms=\App\Garcom::all();
        return view('garcoms/index',compact('garcoms'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('garcoms/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
         $garcom= new \App\Garcom;
         $garcom->name=$request->get('name');
         $garcom->filename=$name;

         $garcom->save();
        
        return redirect('garcoms')->with('success', 'Cadastrado com sucesso');    
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $garcom = \App\Garcom::find($id);
        return view('garcoms/edit',compact('garcom','id'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $garcom= \App\Garcom::find($id);
        $garcom->name=$request->get('name');
        $garcom->save();
        return redirect('garcoms');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $garcom = \App\Garcom::find($id);
        $garcom->delete();
        return redirect('garcoms')->with('success','Garçom excluído');    }
}
