<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\KingpinRequest;
use App\Kingpin;
use App\Kingpinpic;
use Image;
use File;


class KingpinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= Kingpin::orderBy('kingpin_id', 'desc')->paginate(3);
        return view('Admin.Kingpinadmin',['Kingpin_state'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.KingpinadminAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KingpinRequest $request)
    {
        $kingpin= new Kingpin();
        $kingpin->kingpin_name= $request->kingpin_name;
        $kingpin->kingpin_detail=$request->kingpin_detail;
        $kingpin->kingpin_type=$request->kingpin_type;

        $kingpin->kingpinmain_pic=$request->kingpinmain_pic;
         if ($request->hasFile('kingpinmain_pic')) {
            $filename = "Kingpinmain_".str_random(10) . '.' . $request->file('kingpinmain_pic')->getClientOriginalExtension();
            $request->file('kingpinmain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $kingpin->kingpinmain_pic = $filename;
            File::delete(public_path() . '/images/' . $kingpin->kingpinmain_pic);
        }
         $kingpin->save();

        

         $a=Kingpin::orderBy('kingpin_id', 'desc')->first();
        

        if ($request->hasFile('files')) {

            $files = $request->file('files');

            foreach($files as $file){
                $kingpinpic= new Kingpinpic();
                $kingpinpic->kingpin_id=$a->kingpin_id;
                $filename = "Kingpin_".str_random(10) . '.' . $file->getClientOriginalExtension();

                $file->move(public_path() . '/images/', $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);


                $kingpinpic->kingpin_file_pic = $filename;
                File::delete(public_path() . '/images/' . $kingpinpic->kingpin_file_pic);
                $kingpinpic->save();

            }
        }
        return redirect()->action('KingpinController@index');
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
        $kingpin = Kingpin::findOrFail($id);
        return view('Admin.KingpinEditAdmin', ['kingpin' => $kingpin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KingpinRequest $request, $id)
    { 
        $kingpin = Kingpin::find($id);
        $kingpin->kingpin_name= $request->kingpin_name;
        $kingpin->kingpin_detail=$request->kingpin_detail;
        $kingpin->kingpin_type=$request->kingpin_type;
        dd($kingpin);

        if ($request->hasFile('kingpinmain_pic')) {

          $filename = "Kingpinmain_".str_random(10) . '.' . $request->file('kingpinmain_pic')->getClientOriginalExtension();
            $request->file('kingpinmain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $kingpin->kingpinmain_pic = $filename;
            File::delete(public_path() . '/images/' . $kingpin->kingpinmain_pic);

        }
        $kingpin->save();        

        return redirect()->action('KingpinController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $kingpin = Kingpin::find($id);

            File::delete(public_path() . '\\images\\' . $kingpin->kingpinmain_pic);
            File::delete(public_path() . '\\images\\resize\\' . $kingpin->kingpinmain_pic);
        
   $kingpin_pics = DB::table('kingpin_pic')->get()->where('kingpin_id',$id);


    foreach ($kingpin_pics as $kingpin_pic)
    {   
        File::delete(public_path() . '\\images\\' . $kingpin_pic->kingpin_file_pic);
        File::delete(public_path() . '\\images\\resize\\' . $kingpin_pic->kingpin_file_pic);
    }

            $kingpin->delete();
            return redirect()->action('KingpinController@index');
    }



    public function deletepic($id)
    {
        $kingpin= Kingpin::find($id);
            File::delete(public_path() . '\\images\\' . $kingpin->kingpinmain_pic);
            File::delete(public_path() . '\\images\\resize\\' . $kingpin->kingpinmain_pic);
        $kingpin->kingpinmain_pic  = null;
        $kingpin->save();

        return redirect()->action('KingpinController@edit', ['id' => $id]);

    }
}
