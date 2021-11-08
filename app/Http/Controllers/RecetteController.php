<?php

namespace App\Http\Controllers;

use App\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recettes = Recette::all() ;
        
        return view('recettes',['recettes'=>$recettes,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create5()
    {
      $recettes = Recette::all() ;
      return view('recettes',['recettes'=>$recettes,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store5(Request $request)
    {
      $recette = new Recette();
      $recette->daterec = request('daterec');
      $recette->libellerec = request('libellerec');
      $recette->debiteur = request('debiteur');
      $recette->montantrec = request('montantrec');
      $recette->save();
      return redirect('/recettes') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show5($id)
    {
      $recette = Recette::where('idrec', $id)->first();
        $recettes = Recette::all() ;
        return view('recettes',['recettes'=>$recettes,'recette'=>$recette,'layout'=>'show']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit5($id)
    {
      $recette = Recette::where('idrec', $id)->first();
      $recettes = Recette::all() ;
      return view('recettes',['recettes'=>$recettes,'recette'=>$recette,'layout'=>'edit5']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update5(Request $request, $id)
    {
      $recette = Recette::where('idrec', $id)->first();
      $recette->daterec = $request->input('daterec') ;
      $recette->libellerec = $request->input('libellerec') ;
      $recette->debiteur = $request->input('debiteur') ;
      $recette->montantrec = $request->input('montantrec') ;
      $recette->save();
      return redirect('/recettes') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $recette = Recette::where('idrec', $id)->first();
      $recette->delete() ;
      return redirect('/recettes') ;
    }
}
