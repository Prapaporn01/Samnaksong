<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Activitypic;
use App\Activity;
use Image;
use File;
use Session;



class ActivitypicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $item = DB::table('activities_pic')->where('activities_id',$id)->paginate(5);

        if (!$item->isEmpty())
            return view('Admin.Activitypicadmin',['activities_pic'=>$item]);
        else
            return view('Admin.Activitypicadmin',['empty'=> $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Admin.Subpicactivity');
    }

    public function createpic($id)
    {
        // var_dump($id);
        return view('Admin.Subpicactivity',['activities_pic'=>$id]);
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
                        $activities= new Activitypic();   
                        $activities->activities_id= $request->activities_pic;

                        $filename = "Subactivity_".str_random(10) . '.' . $file->
                getClientOriginalExtension();

                        $file->move(public_path() . '/images/', $filename);


                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(650, 500)
                        ->save(public_path() . '/images/resizeBig/' . $filename);
                        
                $activities->activities_file_pic = $filename;
                File::delete(public_path() . '/images/' . $activities->activities_file_pic);


                $activities->save();      
                    }                        
                }
                
                  
                return redirect(route('addactivity', ['id' => $request->activities_pic]));
    }

 
                 
                // return redirect()->action('ActivitypicController@index');


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
        $activities= Activitypic::find($id);

        $id_return=$activities->activities_id;

            File::delete(public_path() . '\\images\\' . $activities->activities_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $activities->activities_file_pic);
            File::delete(public_path() . '\\images\\resizeBig\\' . $activities->activities_file_pic);
        $activities->delete();

        return redirect()->action('ActivitypicController@index', ['id' => $id_return]);
    
    }

   
}
