<?php

namespace App\Http\Controllers;

use App\Depense;
use Illuminate\Http\Request;

class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depenses = Depense::all() ;
        
        return view('depenses',['depenses'=>$depenses,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create3()
    {
        $depenses = Depense::all() ;
        return view('depenses',['depenses'=>$depenses,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store3(Request $request)
    {
        $depense = new Depense();
        $depense->datedep = request('datedep');
        $depense->libelledep = request('libelledep');
        $depense->creancier = request('creancier');
        $depense->montantdep = request('montantdep');
        $depense->save();
        return redirect('/depenses') ;    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show3($id)
    {
        $depense = Depense::where('iddep', $id)->first();
        $depenses = Depense::all() ;
        return view('depenses',['depenses'=>$depenses,'depense'=>$depense,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit3($id)
    {
        $depense = Depense::where('iddep', $id)->first();
      $depenses = Depense::all() ;
      return view('depenses',['depenses'=>$depenses,'depense'=>$depense,'layout'=>'edit3']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update3(Request $request, $id)
    {
        $depense = Depense::where('iddep', $id)->first();
        $depense->datedep = $request->input('datedep') ;
        $depense->libelledep = $request->input('libelledep') ;
        $depense->creancier = $request->input('creancier') ;
        $depense->montantdep = $request->input('montantdep') ;
        $depense->save() ;
        return redirect('/depenses') ;
      
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depense = Depense::where('iddep', $id)->first();
        $depense->delete() ;
        return redirect('/depenses') ;
    }
}
