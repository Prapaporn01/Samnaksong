<?php

    if(!isset($_SESSION['username'])){
        return redirect()->action('AdloginController@index');
    }
?>
@extends('site.layoutadmin')
@section('content')


        <div class="col-md-9 col-sm-9" align="center" >

            <img src="{{asset('images/Successful.jpg')}}" style="margin-left: 0px; width:75%; margin-top: 10%; ">
            
        </div>


@stop