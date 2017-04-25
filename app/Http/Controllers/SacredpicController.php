<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sacredpic;
use App\Sacred;
use Image;
use File;
use Session;

class SacredpicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $item = DB::table('sacred_pic')->where('sacred_id',$id)->paginate(5);
        if (!$item->isEmpty())
            return view('Admin.Sacredpicadmin',['sacred_pic'=>$item]);
        else
            return view('Admin.Sacredpicadmin',['empty'=> $id]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Subpicsacred');
    }
    public function createpic($id)
    {
        // var_dump($id);
        return view('Admin.Subpicsacred',['sacred_pic'=>$id]);
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
                        $sacred= new Sacredpic();   
                        $sacred->sacred_id= $request->sacred_pic;

                        $filename = "Subsacred_".str_random(10) . '.' . $file->
                getClientOriginalExtension();

                        $file->move(public_path() . '/images/', $filename);


                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(650, 500)
                        ->save(public_path() . '/images/Sacred/' . $filename);
                        
                $sacred->sacred_file_pic = $filename;
                File::delete(public_path() . '/images/' . $sacred->sacred_file_pic);


                $sacred->save();      
                    }                        
                }
                
                  
                return redirect(route('addsacred', ['id' => $request->sacred_pic]));
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
        $sacred= Sacredpic::find($id);
        $id_return=$sacred->sacred_id;

            File::delete(public_path() . '\\images\\' . $sacred->sacred_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $sacred->sacred_file_pic);
            File::delete(public_path() . '\\images\\Sacred\\' . $sacred->sacred_file_pic);
        $sacred->delete();

        return redirect()->action('SacredpicController@index', ['id' => $id_return]);
    }
}
