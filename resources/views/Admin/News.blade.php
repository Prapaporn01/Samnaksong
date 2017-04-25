<?php
session_start();

    if(!isset($_SESSION['username'])){
        return redirect()->action('AdloginController@index');
    }
?>
@extends('site.layoutadmin')
@section('content')
<head>
<link href="{{ asset('./css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
<link href="{{ asset('./css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />

</head>
<style type="text/css">
<script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="{{ asset('.js/jquery.filer.min.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function() {
     $('#filer_input').filer();       
});
</script>
<style type="text/css">
	.indent-small {
	  margin-left: 5px;
	}
	.form-group.internal {
	  margin-bottom: 0;
	}
	.dialog-panel {
	  margin: 10px;
	}
	.datepicker-dropdown {
	  z-index: 200 !important;
	}
	.panel-body {
	  background: #e5e5e5;
	  /* Old browsers */
	  background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
	  /* FF3.6+ */
	  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
	  /* Chrome,Safari4+ */
	  background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
	  /* Chrome10+,Safari5.1+ */
	  background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
	  /* Opera 12+ */
	  background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
	  /* IE10+ */
	  background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
	  /* W3C */
	  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
	  /* IE6-9 fallback on horizontal gradient */
	  font: 600 15px "Open Sans", Arial, sans-serif;
	}
	label.control-label {
	  font-weight: 600;
	  color: #777;
	}


	body {
	    overflow-x: hidden;
	}
</style>


<body>

              <div class="col-md-9 col-xs-12">
            <br>
            <br>

            <div class='panel panel-default dialog-panel' ">
      <div class='panel-heading'>
        <h5>จัดการข่าวประชาสัมพันธ์</h5>
      </div>
      <div class='panel-body'>

        <form class='form-horizontal' role='form' style="width: 1000px;padding-top: 15px;padding-left: 60px; ">

                  




                  <div class='form-group'>               
                        <div class='col-md-10 '>
                                <label class='control-label col-md-2 col-xs-2'>หัวข้อข่าว</label>
                                <div class='col-md-6 col-xs-3'>
                                  <input class='form-control' id='position' type='text'>
                                </div>         
                        </div>
                  </div>
                
          
                 
                  <div class='form-group'>
                    <div class='col-md-10 '>
                    <label class='control-label col-md-2 col-xs-2'>รายละเอียด</label>
                    <div class='col-md-8 col-xs-5'>
                      <textarea class='form-control' id='detail' rows='4'></textarea>
                    </div>
                    </div>
                  </div>


                              
                   <div class='form-group'>
                    <div class='col-md-10 '>
                    <label class='control-label col-md-2 col-xs-2'>รูปภาพ</label>
                        <form action="./php/upload.php" method="post" enctype="multipart/form-data">
                          <input type="file" name="files[]" id="filer_input" multiple="multiple" style="   padding-left: 15px;">
                         <!--  <input type="submit" value="Submit"> -->
                        </form>
                    </div>
                  </div>


                  <div class='form-group'>
                    <div class='col-md-8 col-xs-7' style="    margin-left: 180px;">
                      <button class='btn-lg btn-default' style='float:right' type='submit'>Save</button>
                    </div>
                  </div>

        </form>


      </div>
    </div>

</body>
@stop