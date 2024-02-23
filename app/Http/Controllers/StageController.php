<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stage; 

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->check()) 
        {
            $stages = Stage::all();
            return view('stages.index', compact('stages'));
        }
        else
            return redirect('/home') ;
            
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (auth()->check()) 
        {
            return view('stages.create');
        }
        else
            return redirect('/home') ;
                
               
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre'=>'required',
            'entreprise'=>'required',
            'description'=>'required'
            ]);
            $stages = new Stage([
            'titre' => $request->get('titre'),
            'entreprise' => $request->get('entreprise'),
            'description' => $request->get('description')
            ]);
            $stages->save();
            return redirect('/stages')->with('success', 'Stage sauvegardée!');
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
        $stages = Stage::find($id);
        return view('stages.edit', compact('stages'));
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
        $request->validate([
            'titre'=>'required',
            'entreprise'=>'required',
            'description'=>'required'
            ]);
            $stages = Stage::find($id);
            $stages->titre = $request->get('titre');
            $stages->entreprise = $request->get('entreprise');
            $stages->description = $request->get('description');
            $stages->save();
            return redirect('/stages')->with('success', 'Offre mise à jour!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stages = Stage::find($id);
        $stages->delete();
        return redirect('/stages')->with('success', 'Offre supprimée!');
    }
}
