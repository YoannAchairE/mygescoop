<?php

namespace App\Http\Controllers;

use App\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activites = Activite::all() ;
        
        return view('activites',['activites'=>$activites,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create1()
    {
        
      $activites = Activite::all() ;
      return view('activites',['activites'=>$activites,'layout'=>'create1']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        $activite = new Activite();
      $activite->dateacti = request('dateacti');
      $activite->lieu = request('lieu');
      $activite->heure = request('heure');
      $activite->description = request('description');
      $activite->save();
      return redirect('/activites') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show1($id)
    {
        $activite = Activite::where('idacti', $id)->first();
        $activites = Activite::all() ;
        return view('activites',['activites'=>$activites,'activite'=>$activite,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit1($id)
    {
        $activite = Activite::where('idacti', $id)->first();
      $activites = Activite::all() ;
      return view('activites',['activites'=>$activites,'activite'=>$activite,'layout'=>'edit1']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request, $id)
    {
        $activite = Activite::where('idacti', $id)->first();
      $activite->dateacti = $request->input('dateacti') ;
      $activite->lieu = $request->input('lieu') ;
      $activite->heure = $request->input('heure') ;
      $activite->description = $request->input('description') ;
      $activite->save() ;
      return redirect('/activites') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activite = Activite::where('idacti', $id)->first();
      $activite->delete() ;
      return redirect('/activites') ;
    }
}
