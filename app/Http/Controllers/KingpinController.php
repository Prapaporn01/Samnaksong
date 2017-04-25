<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\KingpinRequest;
use App\Kingpin;
use App\Kingpinpic;
use App\Kingpintype;
use Image;
use File;
use Session;

class KingpinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= Kingpin::orderBy('kingpin_id', 'desc')->paginate(5);
        return view('Admin.Kingpinadmin',['Kingpin_state'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type= Kingpintype::all();
        return view('Admin.KingpinadminAdd',['type'=>$type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KingpinRequest $request)
    {

            if ($request->hasFile('files')) {
             $count = count($request->file('files'));

            if ($count>=25) {
          
                Session::flash('flash_message','อัพโหลดรูปในอัลบัมได้ไม่เกิน 25 รูปเท่านั้น!!!');
                return redirect()->back();
            }
        }


        $kingpin= new Kingpin();
        $kingpin->kingpin_name= $request->kingpin_name;
        $kingpin->kingpin_detail=$request->kingpin_detail;
        $kingpin->kingpintype_id=$request->type;

        $kingpin->kingpinmain_pic=$request->kingpinmain_pic;
         if ($request->hasFile('kingpinmain_pic')) {
            $filename = "Kingpinmain_".str_random(10) . '.' . $request->file('kingpinmain_pic')->getClientOriginalExtension();
            $request->file('kingpinmain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $kingpin->kingpinmain_pic = $filename;
            File::delete(public_path() . '/images/' . $kingpin->kingpinmain_pic);
        }
         $kingpin->save();   

         
        
    
            $files = $request->file('files');
            $a=Kingpin::orderBy('kingpin_id', 'desc')->first();

            foreach($files as $file){
                $kingpinpic= new Kingpinpic();
                $kingpinpic->kingpin_id=$a->kingpin_id;
                $filename = "Kingpin_".str_random(10) . '.' . $file->
                getClientOriginalExtension();

                $file->move(public_path() . '/images/', $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(650, 500)
                        ->save(public_path() . '/images/Kingpin/' . $filename);
                        
                $kingpinpic->kingpin_file_pic = $filename;
                File::delete(public_path() . '/images/' . $kingpinpic->kingpin_file_pic);
                $kingpinpic->save();

        }
        return redirect()->action('KingpinController@index');
    }



public function createtype(request $request)
    {
      
        $kingpin= new Kingpintype();
        $kingpin->kingpintype_name=$request->kingpintype_add;
        $kingpin->save();


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
         
        $kingpin1 = Kingpintype::pluck('kingpintype_name','kingpintype_id');
        $kingpin2 = Kingpintype::orderBy('kingpintype_id','desc')->paginate(4);

        return view('Admin.KingpinEditAdmin',['kingpin'=>$kingpin,'item'=>$kingpin1,'kingpin2'=>$kingpin2]);
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

        $kingpin = Kingpin::find($id);
        $kingpin->kingpin_name= $request->kingpin_name;
        $kingpin->kingpin_detail=$request->kingpin_detail;
        $kingpin->kingpintype_id=$request->kingpintype_id;
        

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
        File::delete(public_path() . '\\images\\Kingpin\\' . $kingpin_pic->kingpin_file_pic);
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

    public function deletetype(Request $request)
        {
            $kingpin= Kingpintype::find($request->id);      
            $kingpin->delete();

            return redirect()->action('KingpinController@edit', ['id' => $request->idedit]);
        }
}
