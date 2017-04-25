<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Newspic;
use App\News;
use Image;
use File;
use Session;


class NewspicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $item = DB::table('news_pic')->where('news_id',$id)->paginate(4);
         if (!$item->isEmpty())
            return view('Admin.Newspicadmin',['news_pic'=>$item]);
        else
            return view('Admin.Newspicadmin',['empty'=> $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Subpicnews');
    }

    public function createpic($id)
    {
        // var_dump($id);
        return view('Admin.Subpicnews',['news_pic'=>$id]);
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
                        $news= new Newspic();   
                        $news->news_id= $request->news_pic;

                        $filename = "Subnews_".str_random(10) . '.' . $file->
                getClientOriginalExtension();

                        $file->move(public_path() . '/images/', $filename);


                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(650, 500)
                        ->save(public_path() . '/images/News/' . $filename);
                        
                $news->news_file_pic = $filename;
                File::delete(public_path() . '/images/' . $news->news_file_pic);


                $news->save();      
                    }                        
                }
                
                  
                return redirect(route('addnews', ['id' => $request->news_pic]));



                // $news= new Newspic();        
                                
                // $news->news_file_pic= $request->news_file_pic;    
                // $news->news_id= $request->news_pics;          
          
                //  if ($request->hasFile('news_file_pic')) {
                //     $filename = "Subnews_".str_random(10) . '.' . $request->file('news_file_pic')->getClientOriginalExtension();
                //     $request->file('news_file_pic')->move(public_path() . '/images/', $filename);
                //     Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
                //     Image::make(public_path() . '/images/' . $filename )->resize(650, 500)->save(public_path() . '/images/resizeBig/' . $filename);
                //     $news->news_file_pic = $filename;
                //     File::delete(public_path() . '/images/' . $news->news_file_pic);             
                //     }
                //     $news->save();

                // return redirect(route('addnews', ['id' => $request->news_pics]));
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
        $newspic= Newspic::find($id);
        
        $id_return=$newspic->news_id;

            File::delete(public_path() . '\\images\\' . $newspic->news_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $newspic->news_file_pic);
            File::delete(public_path() . '\\images\\News\\' . $newspic->news_file_pic);
        $newspic->delete();

        return redirect()->action('NewspicController@index', ['id' => $id_return]);
    }
}
