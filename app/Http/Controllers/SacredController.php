<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\SacredRequest;
use App\Sacred;
use App\Sacredpic;
use App\Sacredtype;
use Image;
use File;
use Session;



class SacredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= Sacred::orderBy('sacred_id','desc')->paginate(4);
        return view('Admin.Sacredadmin',['Sacred_object'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type= Sacredtype::all();
        return view('Admin.SacredadminAdd',['type'=>$type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SacredRequest $request)
    {

        if ($request->hasFile('files')) {
             $count = count($request->file('files'));

            if ($count>=25) {
          
                Session::flash('flash_message','อัพโหลดรูปในอัลบัมได้ไม่เกิน 25 รูปเท่านั้น!!!');
                return redirect()->back();
            }
        }

        $sacred= new Sacred();
        $sacred->sacred_name= $request->sacred_name;
        $sacred->sacred_detail=$request->sacred_detail;
        $sacred->sacredtype_id=$request->type;
        $sacred->sacredmain_pic=$request->sacredmain_pic;

         if ($request->hasFile('sacredmain_pic')) {
            $filename = "Sacredmain_".str_random(10) . '.' . $request->file('sacredmain_pic')->getClientOriginalExtension();
            $request->file('sacredmain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $sacred->sacredmain_pic = $filename;
            File::delete(public_path() . '/images/' . $sacred->sacredmain_pic);
        }

         $sacred->save();



            $files = $request->file('files');
            $a=Sacred::orderBy('sacred_id', 'desc')->first();
            foreach($files as $file){

                $sacredpic= new Sacredpic();
                $sacredpic->sacred_id=$a->sacred_id;
                $filename = "Sacred_".str_random(10) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/images/', $filename);
                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(650, 500)
                        ->save(public_path() . '/images/Sacred/' . $filename);

                $sacredpic->sacred_file_pic = $filename;
                File::delete(public_path() . '/images/' . $sacredpic->sacred_file_pic);

                $sacredpic->save();
        }
        return redirect()->action('SacredController@index');
    }

    public function createtype(request $request)
    {  
        $sacredtype= new Sacredtype();
        $sacredtype->sacredtype_name=$request->sacredtype_add;
        $sacredtype->save();

        Session::flash('flash_message2', 'เพิ่มประเภทวัตถุมงคลสำเร็จแล้ว  จากนั้นให้ทำการเลือกประเภทวัตถุมงคล');
        return redirect()->back();
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
    
        $sacred1 = Sacredtype::pluck('sacredtype_name','sacredtype_id');
        $sacred2 = Sacredtype::orderBy('sacredtype_id','desc')->paginate(4);

        return view('Admin.SacredEditadmin',['sacred'=>$sacred,'item'=>$sacred1,'sacred2'=>$sacred2]);

    }

    // public function edittype($id)
    // {
    //     $sacredtype = Sacredtype::findOrFail($id);
    //     return view('Admin.SacredEditAdmin', ['sacredtype' => $sacredtype]);
    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $sacred = Sacred::find($id);
        $sacred->sacred_name= $request->sacred_name;
        $sacred->sacred_detail=$request->sacred_detail;
        $sacred->sacredtype_id=$request->sacredtype_id;


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
            File::delete(public_path() . '\\images\\Sacred\\' . $sacred_pic->sacred_file_pic);
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


    public function deletetype(Request $request)
        {
          
            $sacred= Sacredtype::find($request->id);      
            $sacred->delete();

            return redirect()->action('SacredController@edit', ['id' => $request->idedit]);
        }
}
