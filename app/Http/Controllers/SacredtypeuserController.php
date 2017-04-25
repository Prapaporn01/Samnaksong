<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sacred;
use App\SacredMainUser;
use App\Sacredpic;
use App\Sacredtype;
use App\SacredObject;

class SacredtypeuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $item2= DB::table('sacred_object')

        ->select('*')
        ->join('sacred_type','sacred_type.sacredtype_id','=','sacred_object.sacredtype_id')
        ->join('sacred_pic','sacred_pic.sacred_id','=','sacred_object.sacred_id')
        ->get();

       $item2 = $item2->unique('sacredtype_id');
       /*dd($item2);*/

        return view('User.SacredTypeUser',['sacredtype'=>$item2]);
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
       $item= SacredObject::where('sacredtype_id','=',$id)
        ->get();

        $item2= DB::table('sacred_object')
        ->select('*')
        ->join('sacred_type','sacred_type.sacredtype_id','=','sacred_object.sacredtype_id')
        ->join('sacred_pic','sacred_pic.sacred_id','=','sacred_object.sacred_id')
        ->get();
        $item2 = $item2->unique('sacredtype_id');

        return view('User.SacredMainUser',['sacredobject'=>$item,'sacredtype'=>$item2]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $item= SacredMainUser::paginate(9);
        // return view('User.SacredMainUser',['sacred_type'=>$item]);

        
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
