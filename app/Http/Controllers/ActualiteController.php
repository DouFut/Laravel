<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;

class ActualiteController extends Controller
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
            $actualites = Actualite::all();
            return view('actualites.index', compact('actualites'));
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
            return view('actualites.create');
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
            'description'=>'required'
            ]);
            $actualite = new Actualite([
            'titre' => $request->get('titre'),
            'description' => $request->get('description')
            ]);
            $actualite->save();
            return redirect('/actualites')->with('success', 'Actualité sauvegardée!');
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
        $actualite = Actualite::find($id);
        return view('actualites.edit', compact('actualite'));
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
            'description'=>'required'
            ]);
            $actualite = Actualite::find($id);
            $actualite->titre = $request->get('titre');
            $actualite->description = $request->get('description');
            $actualite->save();
            return redirect('/actualites')->with('success', 'Actualité mise à jour!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actualite = Actualite::find($id);
        $actualite->delete();
        return redirect('/actualites')->with('success', 'Actualité supprimée!');
    }
}
