
@extends('site.layoutadmin')
@section('content')
  
<?php
session_start();

session_destroy();
	echo "<script type='text/javascript'>alert('Logout successfully');</script>";
	echo "<script>window.location='Loginadmin';</script>";
?>


@stop