<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kingpinpic;
use App\Kingpin;
use Image;
use File;

class KingpinpicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        $item = DB::table('kingpin_pic')->where('kingpin_id',$id)->paginate(5);
        return view('Admin.Kingpinpicadmin',['kingpin_pic'=>$item]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        $kingpin= Kingpinpic::find($id);

        $id_return=$kingpin->kingpin_id;

            File::delete(public_path() . '\\images\\' . $kingpin->kingpin_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $kingpin->kingpin_file_pic);
        
        $kingpin->delete();

        return redirect()->action('KingpinpicController@index', ['id' => $id_return]);
    
    }


    public function deletepic($id)
    {
       

    }
}
