<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Worship;
use App\Worshippic;


class WorshipmainuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $item= Worship::orderBy('worship_id', 'desc')->paginate(9);
        return view('User.WorshipMainUser',['worship'=>$item]);
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
        $item=DB::table('worship_pic')->Join('worship','worship_pic.worship_id','=','worship.worship_id')       
            ->select('worship.*','worship_pic.worship_file_pic')->where('worship.worship_id',$id)
            ->paginate(9);
          
        $item2=DB::table('worship_pic')->Join('worship','worship_pic.worship_id','=','worship.worship_id')       
            ->select('worship.*','worship_pic.worship_file_pic')->where('worship.worship_id',$id)
            ->get();

        
        return view('User.WorshipUser',['worship'=>$item,'worship2'=>$item2]);
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
