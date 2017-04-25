<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kingpinpic;
use App\Kingpin;
use Image;
use File;
use Session;

class KingpinpicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        $item = DB::table('kingpin_pic')->where('kingpin_id',$id)->paginate(5);
        if (!$item->isEmpty())
            return view('Admin.Kingpinpicadmin',['kingpin_pic'=>$item]);
        else
            return view('Admin.Kingpinpicadmin',['empty'=> $id]);
 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
    {
        return view('Admin.Subpickingpin');
    }

    public function createpic($id)
    {
        return view('Admin.Subpickingpin',['kingpin_pic'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               
                  if ($request->hasFile('files')) {
                    
                    $count = count($request->file('files'));
                    if ($count>25) {
                        Session::flash('flash_message','อัพโหลดรูปได้ไม่เกิน 25 รูปเท่านั้น!!!');
                        return redirect()->back();
                    }


                    $files = $request->file('files');
            
                    foreach($files as $file){
                        $kingpin= new Kingpinpic();   
                        $kingpin->kingpin_id= $request->kingpin_pic;

                        $filename = "Subkingpin_".str_random(10) . '.' . $file->
                getClientOriginalExtension();

                        $file->move(public_path() . '/images/', $filename);


                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(650, 500)
                        ->save(public_path() . '/images/Kingpin/' . $filename);
                        
                $kingpin->kingpin_file_pic = $filename;
                File::delete(public_path() . '/images/' . $kingpin->kingpin_file_pic);


                $kingpin->save();      
                    }                        
                }
                                  
                return redirect(route('addkingpin', ['id' => $request->kingpin_pic]));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $kingpin= Kingpinpic::find($id);

        $id_return=$kingpin->kingpin_id;

            File::delete(public_path() . '\\images\\' . $kingpin->kingpin_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $kingpin->kingpin_file_pic);
            File::delete(public_path() . '\\images\\Kingpin\\' . $kingpin->kingpin_file_pic);
        
        $kingpin->delete();

        return redirect()->action('KingpinpicController@index', ['id' => $id_return]);
    
    }


    public function deletepic($id)
    {
       

    }
}
