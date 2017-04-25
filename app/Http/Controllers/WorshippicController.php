<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Worshippic;
use App\Worship;
use Image;
use File;
use Session;


class WorshippicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $item = DB::table('worship_pic')->where('worship_id',$id)->paginate(5);

       if (!$item->isEmpty())
            return view('Admin.Worshippicadmin',['worship_pic'=>$item]);
        else
            return view('Admin.Worshippicadmin',['empty'=> $id]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Subpicworship');
    }

    public function createpic($id)
    {
        // var_dump($id);
        return view('Admin.Subpicworship',['worship_pic'=>$id]);
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
                        $worship= new Worshippic();   
                        $worship->worship_id= $request->worship_pic;

                        $filename = "Subworship_".str_random(10) . '.' . $file->
                getClientOriginalExtension();

                        $file->move(public_path() . '/images/', $filename);


                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(650, 500)
                        ->save(public_path() . '/images/Worship/' . $filename);
                        
                $worship->worship_file_pic = $filename;
                File::delete(public_path() . '/images/' . $worship->worship_file_pic);


                $worship->save();      
                    }                        
                }
                
                  
                return redirect(route('add', ['id' => $request->worship_pic]));

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
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       
        $worship= Worshippic::find($id);
        $id_return=$worship->worship_id;

            File::delete(public_path() . '\\images\\' . $worship->worship_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $worship->worship_file_pic);
            File::delete(public_path() . '\\images\\Worship\\' . $worship->worship_file_pic);
        $worship->delete();

        return redirect()->action('WorshippicController@index', ['id' => $id_return]);
    
    }

    // public function deletesubpic($id)
    // { 
    //     $worship= Worshippic::find($id);
    //         File::delete(public_path() . '\\images\\' . $worship->worship_file_pic);
    //         File::delete(public_path() . '\\images\\resize\\' . $worship->worship_file_pic);
    //         File::delete(public_path() . '\\images\\resizeBig\\' . $worship->worship_file_pic);
    //     $worship->worship_file_pic  = null;
    //     $worship->save();

    //     return redirect()->action('WorshippicController@edit', ['id' => $id]);

    // }
}
