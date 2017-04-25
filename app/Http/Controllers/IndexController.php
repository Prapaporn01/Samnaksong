<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Directory;
use App\News;
use App\Activity;
use App\Place;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $item=News::orderBy('news_id', 'desc')
        ->take(2)
        ->get();
        // $item=DB::table('news_pic')->Join('news','news_pic.news_id','=','news.news_id')   ->select('news.*','news_pic.news_file_pic')
        //     ->orderBy('news_pic.news_pic_id','DESC') 
        //     ->get();

        // $item2=DB::table('activities_pic')
        //     ->Join('activities','activities_pic.activities_id','=','activities.activities_id')
        //     ->select('activities.*','activities_pic.activities_file_pic')
        //     ->orderBy('activities_pic.activities_pic_id','DESC') 
        //     ->get();
        $item2=Activity::orderBy('activities_id', 'desc')
        ->take(3)
        ->get();

        $item3=Directory::orderBy('directory_id', 'desc')
         ->get();

         $item4=Place::orderBy('place_id', 'desc')
        ->take(3)
        ->get();
            // ->toSql();

        return view('index',['news'=>$item,'activity'=>$item2,'directory'=>$item3,'place'=>$item4]);
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
        //
    }
}
