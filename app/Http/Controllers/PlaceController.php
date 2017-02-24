<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Image; 
use App\Http\Requests\PlaceRequest;
use App\Place;
use File;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= Place::orderBy('place_id', 'desc')->paginate(5);
        return view('Admin.PlaceAdmin',['Place'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.PlaceadminAdd');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaceRequest $request)
    {
        
        $place = new Place();
        $place->place_name= $request->place_name;
        $place->place_url= $request->place_url;
        $place->place_facebook= $request->place_facebook;
        $place->place_description= $request->place_description;

        $place->place_pic= $request->place_pic;
        if ($request->hasFile('place_pic')) {// hasFile + variable name of image
            // $filename = str_random(10) . '.' . $request->file('place_pic')->getClientOriginalExtension();
            $filename = "Place_".str_random(10) . '.' . $request->file('place_pic')->getClientOriginalExtension();
            $request->file('place_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $place->place_pic = $filename;
            File::delete(public_path() . '/images/' . $place->place_pic);
        }


        // var_dump($place);
        $place->save();
        return redirect()->action('PlaceController@index');
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
        $place = Place::findOrFail($id);
         
        return view('Admin.PlaceEditAdmin', ['place' => $place]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaceRequest $request, $id)
    {
        $place = Place::find($id);
        $place->place_name = $request->place_name;
        $place->place_url = $request->place_url;
        $place->place_facebook = $request->place_facebook;
        $place->place_description = $request->place_description;
       
        $place->place_pic = $request->place_pic;
        if ($request->hasFile('place_pic')) {// hasFile + variable name of image
            // $filename = str_random(10) . '.' . $request->file('place_pic')->getClientOriginalExtension();
          
            $filename = "Place_".str_random(10) . '.' . $request->file('place_pic')->getClientOriginalExtension();
            $request->file('place_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $place->place_pic = $filename;
            File::delete(public_path() . '/images/' . $place->place_pic);

        }
        $place->save();
        $place->update($request->all()); //mass asignment , define $fillable(model)
        return redirect()->action('PlaceController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = Place::find($id);
      
            File::delete(public_path() . '\\images\\' . $place->place_pic);
            File::delete(public_path() . '\\images\\resize\\' . $place->place_pic);
        $place->delete();
        return redirect()->action('PlaceController@index');
    }

    public function deletepic($id)
    {
        $place= Place::find($id);
            File::delete(public_path() . '\\images\\' . $place->place_pic);
            File::delete(public_path() . '\\images\\resize\\' . $place->place_pic);
        $place->place_pic  = null;
        $place->save();

        return redirect()->action('PlaceController@edit', ['id' => $id]);

    }

}
