<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image; 
use App\Http\Requests\PersonsRequest;
use App\Persons;
use File;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= Persons::orderBy('person_id', 'desc')->paginate(5);
        return view('Admin.Personsadmin',['related_persons'=>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.PersonsadminAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonsRequest $request)
    {
        $person = new Persons();
        $person->person_name= $request->person_name;
        $person->person_detail= $request->person_detail;
        
        $person->person_file_pic= $request->person_file_pic;

        if ($request->hasFile('person_file_pic')) {
            $filename = "Person_".str_random(10) . '.' . $request->file('person_file_pic')->getClientOriginalExtension();

            $request->file('person_file_pic')
            ->move(public_path() . '/images/', $filename);

             Image::make(public_path() . '/images/' . $filename )
             ->resize(150,150)
             ->save(public_path() . '/images/resize/' . $filename);

              Image::make(public_path() . '/images/' . $filename )
              ->resize(200,300)
              ->save(public_path() . '/images/Persons/' . $filename);
           
            $person->person_file_pic = $filename;
              File::delete(public_path() . '/images/' . $person->person_file_pic);
        }
        
        $person->save();

        return redirect()->action('PersonsController@index');
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
        $person = Persons::findOrFail($id);
         
        return view('Admin.PersonsEditAdmin', ['person' => $person]);
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
        $person = Persons::find($id);
        $person->person_name= $request->person_name;
        $person->person_detail= $request->person_detail;
        
       
        if ($request->hasFile('person_file_pic')) {
          
            $filename = "Personmain_".str_random(10) . '.' . $request->file('person_file_pic')->getClientOriginalExtension();
            $request->file('person_file_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);

            Image::make(public_path() . '/images/' . $filename )
            ->resize(200,300)
            ->save(public_path() . '/images/Persons/' . $filename);


            $person->person_file_pic = $filename;
            File::delete(public_path() . '/images/' . $person->person_file_pic);

        }
        $person->save();
       
        return redirect()->action('PersonsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Persons::find($id);
            File::delete(public_path() . '\\images\\' . $person->person_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $person->person_file_pic);
            File::delete(public_path() . '\\images\\Persons\\' . $person->person_file_pic);
           
            $person->delete();
        return redirect()->action('PersonsController@index');
    }



     public function deletepic($id)
    {
        $person= Persons::find($id);
            File::delete(public_path() . '\\images\\' . $person->person_file_pic);
            File::delete(public_path() . '\\images\\resize\\' . $person->person_file_pic);
            File::delete(public_path() . '\\images\\Persons\\' . $person->person_file_pic);
        $person->person_file_pic  = null;
        $person->save();

        return redirect()->action('PersonsController@edit', ['id' => $id]);

    }
}

