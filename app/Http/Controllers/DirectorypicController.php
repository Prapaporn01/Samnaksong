<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Directorypic;
use App\Directory;
use Image;
use File;

class DirectorypicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      
        $item = DB::table('directory_pic')->where('directory_id',$id)->paginate(5);

        if (!$item->isEmpty())
            return view('Admin.Directorypicadmin',['directory_pic'=>$item]);
        else
            return view('Admin.Directorypicadmin',['empty'=> $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Subpicdirectory');
    }

    public function createpic($id)
    {
        // var_dump($id);
        return view('Admin.Subpicdirectory',['directory_pic'=>$id]);
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
                    
                    $files = $request->file('files');
            
                    foreach($files as $file){
                        $directory= new Directorypic();   
                        $directory->directory_id= $request->directory_pic;

                        $filename = "Subdirectory_".str_random(10) . '.' . $file->
                getClientOriginalExtension();

                        $file->move(public_path() . '/images/', $filename);


                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(650, 500)
                        ->save(public_path() . '/images/resizeBig/' . $filename);
                        
                $directory->directory_file_pic = $filename;
                File::delete(public_path() . '/images/' . $directory->directory_file_pic);


                $directory->save();      
                    }                        
                }
                
                  
                return redirect(route('adddirectory', ['id' => $request->directory_pic]));
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
        $directory= Directorypic::find($id);

        $id_return=$directory->directory_id;

            File::delete(public_path() . '\\images\\' . $directory->directory_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $directory->directory_file_pic);
            File::delete(public_path() . '\\images\\resizeBig\\' . $directory->directory_file_pic);
        
        $directory->delete();

        return redirect()->action('DirectorypicController@index', ['id' => $id_return]);
    }


}
