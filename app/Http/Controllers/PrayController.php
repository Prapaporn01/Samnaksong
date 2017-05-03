<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PrayRequest;
use App\Pray;
use File;

class PrayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= Pray::orderBy('pray_id', 'desc')->paginate(10);
        return view('Admin.PrayAdmin',['Pray'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.PrayadminAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrayRequest $request)
    {
        $pray = new Pray();
        $pray->pray_title= $request->pray_title;
        $pray->pray_detail=$request->pray_detail;
        
            if ($request->hasFile('pray_detail')) 
            {                
            $filename = "Pray_".str_random(10) . '.' .$request->file('pray_detail')->getClientOriginalExtension();
            $pray->pray_detail= $request->file('pray_detail')->move(public_path() . '/pdf/', $filename);
            $pray->pray_detail = $filename;
            }

        if ($request->hasFile('pray_sound')) 
        {
            
            $filename = "Pray_".str_random(10) . '.' .$request->file('pray_sound')->getClientOriginalExtension();
            $pray->pray_sound= $request->file('pray_sound')->move(public_path() . '/audio/', $filename);
            $pray->pray_sound = $filename;
        }

        $pray->save();


        return redirect()->action('PrayController@index');
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
        $pray = Pray::findOrFail($id);
         
        return view('Admin.PrayEditAdmin', ['pray' => $pray]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrayRequest $request, $id)
    {
        $pray = Pray::find($id);
        $pray->pray_title = $request->pray_title;
        
    
            if ($request->hasFile('pray_detail')) 
            {                
            $filename = "Pray_".str_random(10) . '.' .$request->file('pray_detail')->getClientOriginalExtension();
            $pray->pray_detail= $request->file('pray_detail')->move(public_path() . '/pdf/', $filename);
            $pray->pray_detail = $filename;
            }

            if ($request->hasFile('pray_sound')) 
            {       
            $filename = "Pray_".str_random(10) . '.' .$request->file('pray_sound')->getClientOriginalExtension();
            $pray->pray_sound= $request->file('pray_sound')->move(public_path() . '/audio/', $filename);
            $pray->pray_sound = $filename;
            }

        $pray->save();
       

        return redirect()->action('PrayController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pray = Pray::find($id);
            File::delete(public_path() . '\\audio\\'. $pray->pray_sound);
            File::delete(public_path() . '\\pdf\\'. $pray->pray_detail);
            $pray->delete();
        return redirect()->action('PrayController@index');
    }


    public function deletepray($id)
    {

        $pray= Pray::find($id);
            File::delete(public_path().'\\pdf\\'.$pray->pray_detail);
        $pray->pray_detail  = null;

        $pray->save();
        return redirect()->action('PrayController@edit', ['id' => $id]);
    }

     public function deletesound($id)
    {

        $pray= Pray::find($id);
            File::delete(public_path() . '\\audio\\' . $pray->pray_sound);
        $pray->pray_sound  = null;

        $pray->save();
        return redirect()->action('PrayController@edit', ['id' => $id]);
    }

}



