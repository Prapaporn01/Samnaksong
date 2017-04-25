<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SacredMainUser;
use Illuminate\Support\Facades\DB;
use App\Sacred;
use App\Sacredpic;
use App\Sacredtype;
use App\SacredObject;
class SacredmainuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


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
        $item= SacredObject::where('sacred_id','=',$id)
        ->get();


        $item2=DB::table('sacred_pic')->Join('sacred_object','sacred_pic.sacred_id','=','sacred_object.sacred_id')       
            ->select('sacred_object.*','sacred_pic.sacred_file_pic')->where('sacred_object.sacred_id',$id)
            ->get();
        
        $item3=DB::table('sacred_pic')->Join('sacred_object','sacred_pic.sacred_id','=','sacred_object.sacred_id')       
            ->select('sacred_object.*','sacred_pic.sacred_file_pic')->where('sacred_object.sacred_id',$id)
            ->paginate(9);

        $item4= DB::table('sacred_object')
        ->select('*')
        ->join('sacred_type','sacred_type.sacredtype_id','=','sacred_object.sacredtype_id')
        ->join('sacred_pic','sacred_pic.sacred_id','=','sacred_object.sacred_id')
        ->get();
        $item4 = $item4->unique('sacredtype_id');

         return view('User.SacredUser',['sacred'=>$item,'sacred2'=>$item2,'sacred3'=>$item3,'sacred4'=>$item4]);
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
        //
    }
}
