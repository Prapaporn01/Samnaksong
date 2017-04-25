<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NewsRequest;
use App\News;
use App\Newspic;
use carbon\carbon;
use Image;
use File;
use Session;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function index()
    {
        $item= News::orderBy('news_id', 'desc')->paginate(4);
        return view('Admin.Newsadmin',['News'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.NewsadminAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
     
        if ($request->hasFile('files')) {
             $count = count($request->file('files'));

            if ($count>=25) {
          
                Session::flash('flash_message','อัพโหลดรูปในอัลบัมได้ไม่เกิน 25 รูปเท่านั้น!!!');
                return redirect()->back();
            }
        }

        $news= new News();
        $news->news_title=$request->news_title;
        $news->news_description=$request->news_description;
        $news->news_detail=$request->news_detail;
        $news->news_datetime= carbon::now();
        
        $news->newsmain_pic=$request->newsmain_pic;
        if ($request->hasFile('newsmain_pic')) {// hasFile + variable name of image
            // $filename = str_random(10) . '.' . $request->file('place_pic')->getClientOriginalExtension();
            $filename = "Newsmain_".str_random(10) . '.' . $request->file('newsmain_pic')->getClientOriginalExtension();
            $request->file('newsmain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $news->newsmain_pic = $filename;
            File::delete(public_path() . '/images/' . $news->newsmain_pic);
        }

        $news->news_file=$request->news_file;
        if ($request->hasFile('news_file')){                
            $filename = "Newsfile_".str_random(10) . '.' .$request->file('news_file')->getClientOriginalExtension();
            $news->news_file= $request->file('news_file')->move(public_path() . '/pdf/', $filename);
            $news->news_file = $filename;
        }
         $news->save();


            $files = $request->file('files');
            $a=News::orderBy('news_id', 'desc')->first();


        if ($request->hasFile('files')){      
            foreach($files as $file){
                $newspic= new Newspic();
                $newspic->news_id=$a->news_id;
                $filename = "News_".str_random(10) . '.' . $file->getClientOriginalExtension();

                $file->move(public_path() . '/images/', $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(650, 500)
                        ->save(public_path() . '/images/News/' . $filename);

                $newspic->news_file_pic = $filename;
                File::delete(public_path() . '/images/' . $newspic->news_file_pic);
                $newspic->save();

            }
        }
        return redirect()->action('NewsController@index');
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
        $news = News::findOrFail($id);
         
        return view('Admin.NewsEditAdmin', ['news' => $news]);
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
        $news = News::find($id);
        $news->news_title= $request->news_title;
        $news->news_description=$request->news_description;
        $news->news_detail=$request->news_detail;

        $news->news_datetime=carbon::now();


        if ($request->hasFile('newsmain_pic')) {

          $filename = "Newsmain_".str_random(10) . '.' . $request->file('newsmain_pic')->getClientOriginalExtension();
            $request->file('newsmain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $news->newsmain_pic = $filename;
            File::delete(public_path() . '/images/' . $news->newsmain_pic);

        }

        
        if ($request->hasFile('news_file')){                
            $filename = "Newsfile_".str_random(10) . '.' .$request->file('news_file')->getClientOriginalExtension();
            $news->news_file= $request->file('news_file')->move(public_path() . '/pdf/', $filename);
            $news->news_file = $filename;
        }

        $news->save();        

        return redirect()->action('NewsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

        $news = News::find($id);

            File::delete(public_path() . '\\images\\' . $news->newsmain_pic);
            File::delete(public_path() . '\\images\\resize\\' . $news->newsmain_pic);
        
   $news_pics = DB::table('news_pic')->get()->where('news_id',$id);


    foreach ($news_pics as $news_pic)
    {   
        File::delete(public_path() . '\\images\\' . $news_pic->news_file_pic);
        File::delete(public_path() . '\\images\\resize\\' . $news_pic->news_file_pic);
        File::delete(public_path() . '\\images\\News\\' . $news_pic->news_file_pic);
    }

            $news->delete();
            return redirect()->action('NewsController@index');
    }



    public function deletepic($id)
    {
        $news= News::find($id);
            File::delete(public_path() . '\\images\\' . $news->newsmain_pic);
            File::delete(public_path() . '\\images\\resize\\' . $news->newsmain_pic);
        $news->newsmain_pic  = null;
        $news->save();

        return redirect()->action('NewsController@edit', ['id' => $id]);

    }
    public function deletefile($id)
    {
        $news= News::find($id);
            File::delete(public_path() . '\\pdf\\' . $news->news_file);
        $news->news_file  = null;
        $news->save();

        return redirect()->action('NewsController@edit', ['id' => $id]);

    }
}
