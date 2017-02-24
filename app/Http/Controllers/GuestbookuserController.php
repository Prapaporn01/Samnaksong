<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guestbookuser;
use Image; 
use App\Http\Requests\GuestbookRequest;
use File;
use carbon\carbon;

class GuestbookuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= Guestbookuser::orderBy('guest_id', 'desc')->paginate(5);
        return view('User.Guestuser',['guestbook'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.Guestbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guest = new Guestbookuser();
        $guest->guest_name= $request->guest_name;
        $guest->guest_detail= $request->guest_detail;
        $guest->guest_date=carbon::now();
        $guest->save();

        return redirect()->action('GuestbookuserController@index');
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
