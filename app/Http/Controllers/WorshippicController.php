<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Worshippic;
use App\Worship;
use Image;
use File;



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
        return view('Admin.Worshippicadmin',['worship_pic'=>$item]);
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
        $worship= Worshippic::find($id);
        $id_return=$worship->worship_id;

            File::delete(public_path() . '\\images\\' . $worship->worship_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $worship->worship_file_pic);
        
        $worship->delete();

        return redirect()->action('WorshippicController@index', ['id' => $id_return]);
    
    }
}
