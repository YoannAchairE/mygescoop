<?php

namespace App\Http\Controllers;

use App\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnes = Personne::all() ;
        
        return view('personnes',['personnes'=>$personnes,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create4()
    {
        $personnes = Personne::all() ;
      return view('personnes',['personnes'=>$personnes,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store4(Request $request)
    {
        $personne = new Personne();
        $personne->nompers = request('nompers');
        $personne->prenomspers = request('prenomspers');
        $personne->email = request('email');
        $personne->sexe = request('sexe');
        $personne->fonction = request('fonction');
        $personne->numero = request('numero');
        $personne->localisation = request('localisation');
        $personne->entite = request('entite');
        $personne->save();
        return redirect('/personnes') ;
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show4($id)
    {
        $personne = Personne::where('idpers', $id)->first();
        $personnes = Personne::all() ;
        return view('personnes',['personnes'=>$personnes,'personne'=>$personne,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit4($id)
    {
        $personne = Personne::where('idpers', $id)->first();
      $personnes = Personne::all() ;
      return view('personnes',['personnes'=>$personnes,'personne'=>$personne,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update4(Request $request, $id)
    {
        $personne = Personne::where('idpers', $id)->first();
        $personne->nompers = $request->input('nompers') ;
        $personne->prenomspers = $request->input('prenomspers') ;
        $personne->email = $request->input('email') ;
        $personne->sexe = $request->input('sexe') ;
        $personne->fonction = $request->input('fonction') ;
        $personne->numero = $request->input('numero') ;
        $personne->localisation = $request->input('localisation') ;
        $personne->entite = $request->input('entite') ;
        $personne->save();
        return redirect('/personnes') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personne = Personne::where('idpers', $id)->first();
        $personne->delete() ;
        return redirect('/personnes') ;
    }
}
