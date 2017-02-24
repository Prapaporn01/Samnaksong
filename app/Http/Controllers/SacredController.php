<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\SacredRequest;
use App\Sacred;
use App\Sacredpic;
use Image;
use File;

class SacredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= Sacred::paginate(3);
        return view('Admin.Sacredadmin',['Sacred_object'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.SacredadminAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SacredRequest $request)
    {
        $sacred= new Sacred();
        $sacred->sacred_name= $request->sacred_name;
        $sacred->sacred_detail=$request->sacred_detail;
        $sacred->sacred_type=$request->sacred_type;

        $sacred->sacredmain_pic=$request->sacredmain_pic;
         if ($request->hasFile('sacredmain_pic')) {// hasFile + variable name of image
            // $filename = str_random(10) . '.' . $request->file('place_pic')->getClientOriginalExtension();
            $filename = "Sacredmain_".str_random(10) . '.' . $request->file('sacredmain_pic')->getClientOriginalExtension();
            $request->file('sacredmain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $sacred->sacredmain_pic = $filename;
            File::delete(public_path() . '/images/' . $sacred->sacredmain_pic);
        }
         $sacred->save();


        

         $a=Sacred::orderBy('sacred_id', 'desc')->first();
        

        if ($request->hasFile('files')) {

            $files = $request->file('files');

            foreach($files as $file){
                $sacredpic= new Sacredpic();
                $sacredpic->sacred_id=$a->sacred_id;
                $filename = "Sacred_".str_random(10) . '.' . $file->getClientOriginalExtension();

                $file->move(public_path() . '/images/', $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);


                $sacredpic->sacred_file_pic = $filename;
                File::delete(public_path() . '/images/' . $sacredpic->sacred_file_pic);
                $sacredpic->save();

            }
        }
        return redirect()->action('SacredController@index');
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
        $sacred = Sacred::findOrFail($id);
         
        return view('Admin.SacredEditAdmin', ['sacred' => $sacred]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SacredRequest $request, $id)
    {
        $sacred = Sacred::find($id);
        $sacred->sacred_name= $request->sacred_name;
        $sacred->sacred_detail=$request->sacred_detail;
        $sacred->sacred_type=$request->sacred_type;


        if ($request->hasFile('sacredmain_pic')) {

          $filename = "Sacredmain_".str_random(10) . '.' . $request->file('sacredmain_pic')->getClientOriginalExtension();
            $request->file('sacredmain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $sacred->sacredmain_pic = $filename;
            File::delete(public_path() . '/images/' . $sacred->sacredmain_pic);

        }
        $sacred->save();        

        return redirect()->action('SacredController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sacred = Sacred::find($id);

            File::delete(public_path() . '\\images\\' . $sacred->sacredmain_pic);
            File::delete(public_path() . '\\images\\resize\\' . $sacred->sacredmain_pic);

  
        
   $sacred_pics = DB::table('sacred_pic')->get()->where('sacred_id',$id);



        foreach ($sacred_pics as $sacred_pic)
        {   
            File::delete(public_path() . '\\images\\' . $sacred_pic->sacred_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $sacred_pic->sacred_file_pic);
        }

            $sacred->delete();
            return redirect()->action('SacredController@index');
    }


     public function deletepic($id)
        {
            $sacred= Sacred::find($id);
                File::delete(public_path() . '\\images\\' . $sacred->sacredmain_pic);
                File::delete(public_path() . '\\images\\resize\\' . $sacred->sacredmain_pic);
            $sacred->sacredmain_pic  = null;
            $sacred->save();

            return redirect()->action('SacredController@edit', ['id' => $id]);

        }

}
