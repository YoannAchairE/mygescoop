<?php

namespace App\Http\Controllers;

use App\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::all() ;
        
        return view('actualites',['actualites'=>$actualites,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2()
    {
        $actualites = Actualite::all() ;
      return view('actualites',['actualites'=>$actualites,'layout'=>'create2']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
      $actualite = new Actualite();
      $actualite->dateactu = request('dateactu');
      $actualite->titre = request('titre');
      $actualite->article = request('article');
      $actualite->save();
      return redirect('/actualites') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show2($id)
    {
        $actualite = Actualite::where('idactu', $id)->first();
        $actualites = Actualite::all() ;
        return view('actualites',['actualite'=>$actualites,'actualite'=>$actualite,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit2($id)
    {
        $actualite = Actualite::where('idactu', $id)->first();
      $actualites = Actualite::all() ;
      return view('actualites',['actualites'=>$actualites,'actualite'=>$actualite,'layout'=>'edit2']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request, $id)
    {
        $actualite = Actualite::where('idactu', $id)->first();
      $actualite->dateactu = $request->input('dateactu') ;
      $actualite->titre = $request->input('titre') ;
      $actualite->article = $request->input('article') ;
      $actualite->save() ;
      return redirect('/actualites') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actualite = Actualite::where('idactu', $id)->first();
      $actualite->delete() ;
      return redirect('/actualites') ;
    }
    
}
