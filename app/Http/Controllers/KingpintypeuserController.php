<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kingpin;
use App\Kingpinpic;
use App\Kingpintype;

class KingpintypeuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item2= DB::table('kingpin_state')

         ->select('*')
         ->join('kingpin_type','kingpin_type.kingpintype_id','=','kingpin_state.kingpintype_id')
         ->join('kingpin_pic','kingpin_pic.kingpin_id','=','kingpin_state.kingpin_id')
         ->get();
        // ->toSql();

         $item2 = $item2->unique('kingpintype_id');
         
        return view('User.KingpinTypeUser',['kingpintype'=>$item2]);
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
        $item= Kingpin::where('kingpintype_id','=',$id)
        ->get();

        return view('User.KingpinMainUser',['kingpinobject'=>$item]);
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
