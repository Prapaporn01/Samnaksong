<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EbookRequest;
use App\Ebook;
use File;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= Ebook::orderBy('ebook_id', 'desc')->paginate(4);
        return view('Admin.Ebookadmin',['Ebook'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.EbookadminAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EbookRequest $request)
    {
        $ebook = new Ebook();
        $ebook->ebook_name= $request->ebook_name;
        $ebook->ebook_file=$request->ebook_file;
        
            if ($request->hasFile('ebook_file')) 
            {                
            $filename = "Ebook_".str_random(10) . '.' .$request->file('ebook_file')->getClientOriginalExtension();
            $ebook->ebook_file= $request->file('ebook_file')->move(public_path() . '/pdf/', $filename);
            $ebook->ebook_file = $filename;
            }

        $ebook->save();
        return redirect()->action('EbookController@index');
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
        $ebook = Ebook::findOrFail($id);      
        return view('Admin.EbookEditAdmin', ['ebook' => $ebook]);
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
        $ebook = Ebook::find($id);
            File::delete(public_path() . '\\pdf\\' . $ebook->ebook_file);     
            $ebook->delete();
        return redirect()->action('EbookController@index');
    }
}
