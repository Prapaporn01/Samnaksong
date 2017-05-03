<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\WorshipRequest;
use App\Worship;
use App\Worshippic;
use Image;
use File;
use Session;

class WorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= Worship::orderBy('worship_id', 'desc')->paginate(4);
        return view('Admin.Worshipadmin',['Worship'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.WorshipadminAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorshipRequest $request)
    {

        if ($request->hasFile('files')) {
             $count = count($request->file('files'));

            if ($count>25) {
          
                Session::flash('flash_message','อัพโหลดรูปในอัลบัมได้ไม่เกิน 25 รูปเท่านั้น!!!');
                return redirect()->back();
            }
        }

        $worship= new Worship();
        $worship->worship_name= $request->worship_name;
        $worship->worship_detail=$request->worship_detail;


        $worship->worshipmain_pic=$request->worshipmain_pic;
         if ($request->hasFile('worshipmain_pic')) {
            $filename = "Worshipmain_".str_random(10) . '.' . $request->file('worshipmain_pic')->getClientOriginalExtension();

            $request->file('worshipmain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )
            ->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);

            $worship->worshipmain_pic = $filename;
            File::delete(public_path() . '/images/' . $worship->worshipmain_pic);
        }
         $worship->save();

        


            $files = $request->file('files');
            $a=Worship::orderBy('worship_id', 'desc')->first();

            foreach($files as $file){
                $worshippic= new Worshippic();
                $worshippic->worship_id=$a->worship_id;
                $filename = "Worship_".str_random(10) . '.' . $file->getClientOriginalExtension();

                $file->move(public_path() . '/images/', $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(650, 500)
                        ->save(public_path() . '/images/Worship/' . $filename);

                $worshippic->worship_file_pic = $filename;
                File::delete(public_path() . '/images/' . $worshippic->worship_file_pic);
                $worshippic->save();

            }

        return redirect()->action('WorshipController@index');
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
        $worship = Worship::findOrFail($id);     
        return view('Admin.WorshipEditAdmin', ['worship' => $worship]);
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
        $worship = Worship::find($id);

        $worship->worship_name= $request->worship_name;
        $worship->worship_detail=$request->worship_detail;



        if ($request->hasFile('worshipmain_pic')) {

          $filename = "Worshipmain_".str_random(10) . '.' . $request->file('worshipmain_pic')->getClientOriginalExtension();
            $request->file('worshipmain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )
            ->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $worship->worshipmain_pic = $filename;
            File::delete(public_path() . '/images/' . $worship->worshipmain_pic);

        }
        $worship->save();        

        return redirect()->action('WorshipController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $worship = Worship::find($id);

            File::delete(public_path() . '\\images\\' . $worship->worshipmain_pic);
            File::delete(public_path() . '\\images\\resize\\' . $worship->worshipmain_pic);

        
   $worship_pics = DB::table('worship_pic')->get()->where('worship_id',$id);



    foreach ($worship_pics as $worship_pic)
    {   
        File::delete(public_path() . '\\images\\' . $worship_pic->worship_file_pic);
        File::delete(public_path() . '\\images\\resize\\' . $worship_pic->worship_file_pic);
        File::delete(public_path() . '\\images\\Worship\\' . $worship_pic->worship_file_pic);
    }

            $worship->delete();
            return redirect()->action('WorshipController@index');
    }




    public function deletepic($id)
    {
        $worship= Worship::find($id);
            File::delete(public_path() . '\\images\\' . $worship->worshipmain_pic);
            File::delete(public_path() . '\\images\\resize\\' . $worship->worshipmain_pic);
        $worship->worshipmain_pic  = null;
        $worship->save();

        return redirect()->action('WorshipController@edit', ['id' => $id]);

    }
}
