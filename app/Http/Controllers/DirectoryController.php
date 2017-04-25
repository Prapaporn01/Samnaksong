<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\Http\Requests\DirectoryRequest;
use Illuminate\Support\Facades\DB;
use App\Directorypic;
use Image;
use File;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $item= Directory::orderBy('directory_id', 'desc')->paginate(4);
        return view('Admin.Directoryadmin',['Directory'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.DirectoryadminAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DirectoryRequest $request)
    {   
        $directory= new Directory();
        $directory->directory_name= $request->directory_name;
        $directory->directory_time=$request->directory_time;
        $directory->directory_name_fair=$request->directory_name_fair;
        $directory->directory_position= $request->directory_position;
        $directory->directory_detail=$request->directory_detail;
       
        $directory->directorymain_pic=$request->directorymain_pic;
         if ($request->hasFile('directorymain_pic')) {
            $filename = "Directorymain_".str_random(10) . '.' . $request->file('directorymain_pic')->getClientOriginalExtension();
            $request->file('directorymain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $directory->directorymain_pic = $filename;
            File::delete(public_path() . '/images/' . $directory->directorymain_pic);
        }
         $directory->save();

        

         $a=Directory::orderBy('directory_id', 'desc')->first();
     

        if ($request->hasFile('files')) {

            $files = $request->file('files');

            foreach($files as $file){
                $directorypic= new Directorypic();
                $directorypic->directory_id=$a->directory_id;
                $filename = "Directory_".str_random(10) . '.' . $file->getClientOriginalExtension();
   
                $file->move(public_path() . '/images/', $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);


                Image::make(public_path() . '/images/' . $filename )
                        ->resize(650, 500)
                        ->save(public_path() . '/images/resizeBig/' . $filename);


                $directorypic->directory_file_pic = $filename;               
                File::delete(public_path() . '/images/' . $directorypic->directory_file_pic);     
                $directorypic->save();

            }
        }
        return redirect()->action('DirectoryController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item= Directory::orderBy('directory_id', 'desc')->get();
        return view('site.layoutuser',['Directory'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $directory = Directory::findOrFail($id);     
        return view('Admin.DirectoryEditadmin', ['directory' => $directory]);
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
        $directory = Directory::find($id);
        $directory->directory_name= $request->directory_name;
        $directory->directory_time=$request->directory_time;
        $directory->directory_name_fair=$request->directory_name_fair;
        $directory->directory_position= $request->directory_position;
        $directory->directory_detail=$request->directory_detail;



        if ($request->hasFile('directorymain_pic')) {

          $filename = "Directorymain_".str_random(10) . '.' . $request->file('directorymain_pic')->getClientOriginalExtension();
            $request->file('directorymain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $directory->directorymain_pic = $filename;
            File::delete(public_path() . '/images/' . $directory->directorymain_pic);

        }
        $directory->save();        

        return redirect()->action('DirectoryController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $directory = Directory::find($id);

            File::delete(public_path() . '\\images\\' . $directory->directorymain_pic);
            File::delete(public_path() . '\\images\\resize\\' . $directory->directorymain_pic);
        
   $directory_pics = DB::table('directory_pic')->get()->where('directory_id',$id);


    foreach ($directory_pics as $directory_pic)
    {   
        File::delete(public_path() . '\\images\\' . $directory_pic->directory_file_pic);
        File::delete(public_path() . '\\images\\resize\\' . $directory_pic->directory_file_pic);
        File::delete(public_path() . '\\images\\resizeBig\\' . $directory_pic->directory_file_pic);
    }

            $directory->delete();
            return redirect()->action('DirectoryController@index');
    }


    public function deletepic($id)
    {
        $directory= Directory::find($id);
            File::delete(public_path() . '\\images\\' . $directory->directorymain_pic);
            File::delete(public_path() . '\\images\\resize\\' . $directory->directorymain_pic);

        $directory->directorymain_pic  = null;
        $directory->save();

        return redirect()->action('DirectoryController@edit', ['id' => $id]);

    }
}
