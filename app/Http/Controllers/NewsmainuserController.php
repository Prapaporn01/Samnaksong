<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\News;
use App\Newspic;


class NewsmainuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= News::orderBy('news_id', 'desc')->paginate(5);
        return view('User.NewsMainUser',['news'=>$item]);
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
        $item=DB::table('news_pic')->Join('news','news_pic.news_id','=','news.news_id')       
            ->select('news.*','news_pic.news_file_pic')->where('news.news_id',$id)
            ->paginate(9);


        $item2= News::where('news_id','=',$id)
        ->get();

         $item3=DB::table('news_pic')->Join('news','news_pic.news_id','=','news.news_id')       
            ->select('news.*','news_pic.news_file_pic')->where('news.news_id',$id)
            ->get();


        return view('User.NewsUser',['news'=>$item,'news2'=>$item2,'news3'=>$item3]);
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
