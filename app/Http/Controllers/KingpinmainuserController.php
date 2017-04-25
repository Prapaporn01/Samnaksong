<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kingpin;
use App\Kingpinpic;

class KingpinmainuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $item= Kingpin::orderBy('kingpin_id', 'desc')->paginate(9);

        return view('User.KingpinMainUser',['kingpin_state'=>$item]);
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
        $item=DB::table('kingpin_pic')->Join('kingpin_state','kingpin_pic.kingpin_id','=','kingpin_state.kingpin_id')       
            ->select('kingpin_state.*','kingpin_pic.kingpin_file_pic')->where('kingpin_state.kingpin_id',$id)
            ->paginate(9);

        $item2=DB::table('kingpin_pic')->Join('kingpin_state','kingpin_pic.kingpin_id','=','kingpin_state.kingpin_id')       
            ->select('kingpin_state.*','kingpin_pic.kingpin_file_pic')->where('kingpin_state.kingpin_id',$id)
            ->get();

          
        return view('User.KingpinUser',['kingpin_state'=>$item,'kingpin_state2'=>$item2]);
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
