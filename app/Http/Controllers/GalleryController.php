<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GalleryRequest;
use Illuminate\Support\Facades\DB;
use App\Gallery;
use Image;
use File;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $item= Gallery::orderBy('gallery_id', 'desc')->paginate(5);
        return view('Admin.Galleryadmin',['Gallery'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.GalleryadminAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $gallery= new Gallery();
        $gallery->gallery_detail=$request->gallery_detail;
        

        $gallery->gallery_file_pic= $request->gallery_file_pic;
         if ($request->hasFile('gallery_file_pic')) {
            $filename = "Gallerymain_".str_random(10) . '.' . $request->file('gallery_file_pic')->getClientOriginalExtension();
            $request->file('gallery_file_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);

            Image::make(public_path() . '/images/' . $filename )->resize(650, 500)->save(public_path() . '/images/resizeBig/' . $filename);
            $gallery->gallery_file_pic = $filename;
            File::delete(public_path() . '/images/' . $gallery->gallery_file_pic);
        }
         $gallery->save();

        return redirect()->action('GalleryController@index');
         
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
        $gallery = Gallery::findOrFail($id);
        return view('Admin.GalleryEditadmin', ['gallery' => $gallery]);
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
        
        $gallery = Gallery::find($id);
        $gallery->gallery_detail=$request->gallery_detail;
        

       if ($request->hasFile('gallery_file_pic')) {
            $filename = "Gallerymain_".str_random(10) . '.' . $request->file('gallery_file_pic')->getClientOriginalExtension();
            $request->file('gallery_file_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);

            Image::make(public_path() . '/images/' . $filename )->resize(650, 500)->save(public_path() . '/images/resizeBig/' . $filename);
            $gallery->gallery_file_pic = $filename;
            File::delete(public_path() . '/images/' . $gallery->gallery_file_pic);
        }
        $gallery->save();        

        return redirect()->action('GalleryController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
      
            File::delete(public_path() . '\\images\\' . $gallery->gallery_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $gallery->gallery_file_pic);
            File::delete(public_path() . '\\images\\resizeBig\\' . $gallery->gallery_file_pic);
        $gallery->delete();
        return redirect()->action('GalleryController@index');
    }

    public function deletepic($id)
    {
        $gallery= Gallery::find($id);
            File::delete(public_path() . '\\images\\' . $gallery->gallery_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $gallery->gallery_file_pic);
            File::delete(public_path() . '\\images\\resizeBig\\' . $gallery->gallery_file_pic);
        $gallery->gallery_file_pic  = null;
        $gallery->save();

        return redirect()->action('GalleryController@edit', ['id' => $id]);

    }
}
