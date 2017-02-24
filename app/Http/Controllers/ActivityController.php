<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ActivityRequest;
use App\Activity;
use App\Activitypic;
use Image;
use File;


class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $item= Activity::orderBy('activities_id', 'desc')->paginate(9);
        return view('Admin.Activityadmin',['activities'=>$item]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.ActivityadminAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActivityRequest $request)
    {
        $activity= new Activity();
        $activity->activities_name= $request->activities_name;
        $activity->activities_detail=$request->activities_detail;
        $activity->activities_date= $request->activities_date;
      
        $activity->activitiesmain_pic=$request->activitiesmain_pic;
         if ($request->hasFile('activitiesmain_pic')) {
            $filename = "Activitymain_".str_random(10) . '.' . $request->file('activitiesmain_pic')->getClientOriginalExtension();
            $request->file('activitiesmain_pic')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename )->resize(150, 150)->save(public_path() . '/images/resize/' . $filename);
            $activity->activitiesmain_pic = $filename;
            File::delete(public_path() . '/images/' . $activity->activitiesmain_pic);
        }
         $activity->save();

        

         $a=Activity::orderBy('activities_id', 'desc')->first();
        

        if ($request->hasFile('files')) {

            $files = $request->file('files');

            foreach($files as $file){
                $activitypic= new Activitypic();
                $activitypic->activities_id=$a->activities_id;
                $filename = "Activity_".str_random(10) . '.' . $file->getClientOriginalExtension();

                $file->move(public_path() . '/images/', $filename);

                Image::make(public_path() . '/images/' . $filename )
                        ->resize(150, 150)
                        ->save(public_path() . '/images/resize/' . $filename);


                $activitypic->activities_file_pic = $filename;
                File::delete(public_path() . '/images/' . $activitypic->activities_file_pic);
                $activitypic->save();

            }
        }
        return redirect()->action('ActivityController@index');
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
        $activity = Activity::findOrFail($id);
        return view('Admin.ActivityEditadmin', ['activity' => $activity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActivityRequest $request, $id)
    { 
      dd(1234);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $activity = Activity::find($id);

            File::delete(public_path() . '\\images\\' . $activity->activitiesmain_pic);
            File::delete(public_path() . '\\images\\resize\\' . $activity->activitiesmain_pic);

  
   $activity_pics = DB::table('activities_pic')->get()->where('activities_id',$id);


    foreach ($activity_pics as $activity_pic)
    {   
        File::delete(public_path() . '\\images\\' . $activity_pic->activities_file_pic);
        File::delete(public_path() . '\\images\\resize\\' . $activity_pic->activities_file_pic);
    }

            $activity->delete();
            return redirect()->action('ActivityController@index');
    }
}
