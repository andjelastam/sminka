<?php

namespace App\Http\Controllers;
use App\Models\Sminker;

use Illuminate\Http\Request;

class SminkerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $r = Sminker::all();
        return view('sminka.index')->with('r',$r);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sminka.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'studio'=>'required',
            'ime'=>'required',
            'prezime'=>'required',
            'adresa'=>'required',
            'cena'=>'required',
            'telefon'=>'required',
            'brend'=>'required',
     ]);
        $r = new Sminker();
        $r->studio = $request->input('studio');
        $r->ime = $request->input('ime');
        $r->prezime = $request->input('prezime');
        $r->adresa = $request->input('adresa');
        $r->cena = $request->input('cena');
        $r->telefon = $request->input('telefon');
        $r->brend = $request->input('brend');
        $r->save();
        return redirect('/sminker')->with('success','Novi sminker je uspesno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $r = Sminker::find($id);
        return view('sminka.show')->with('r',$r);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $r = Sminker::find($id);
        return view('sminka.edit')->with('r',$r);
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
        $r = Sminker::find($id);
        $r->studio = $request->input('studio');
        $r->ime = $request->input('ime');
        $r->prezime = $request->input('prezime');
        $r->adresa = $request->input('adresa');
        $r->cena = $request->input('cena');
        $r->telefon = $request->input('telefon');
        $r->brend = $request->input('brend');
        $r->save();
        return redirect('/sminker')->with('success','Novi sminker je uspesno dodat u bazu!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Sminker::find($id);
        $b->delete();
        return redirect('/sminker')->with('success','Sminker je uspesno izbrisan iz baze!');
    }
}
