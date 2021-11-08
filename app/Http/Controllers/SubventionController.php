<?php

namespace App\Http\Controllers;

use App\Subvention;
use Illuminate\Http\Request;

class SubventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subventions = Subvention::all() ;
        
        return view('subventions',['subventions'=>$subventions,'layout'=>'index']); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create6()
    {
        $subventions = Subvention::all() ;
        return view('subventions',['subventions'=>$subventions,'layout'=>'create']);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store6(Request $request)
    {
        $subvention = new Subvention() ;
        $subvention->datesubv = $request->input('datesubv') ;
        $subvention->nature = $request->input('nature') ;
        $subvention->libellesub = $request->input('libellesub') ;
        $subvention->montantsub = $request->input('montantsub') ;
        $subvention->save() ;
        return redirect('/subventions') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show6($id)
    {
        $subvention = Subvention::where('idsub', $id)->first();
        $subventions = Subvention::all() ;
        return view('subventions',['subventions'=>$subventions,'subvention'=>$subvention,'layout'=>'show']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit6($id)
    {
        $subvention = Subvention::where('idsub', $id)->first();
        $subventions = Subvention::all() ;
        return view('subventions',['subventions'=>$subventions,'subvention'=>$subvention,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update6(Request $request, $id)
    {
        $subvention = Subvention::where('idsub', $id)->first();
        $subvention->datesubv = $request->input('datesubv') ;
        $subvention->nature = $request->input('nature') ;
        $subvention->libellesub = $request->input('libellesub') ;
        $subvention->montantsub = $request->input('montantsub') ;
        $subvention->save() ;
        return redirect('/subventions') ;
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subvention = Subvention::where('idsub', $id);
        $subvention->delete() ;
        return redirect('/subventions') ;
    }

}
