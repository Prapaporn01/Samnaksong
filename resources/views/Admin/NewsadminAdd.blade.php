<?php
session_start();

    if(!isset($_SESSION['username'])){
        return redirect()->action('AdloginController@index');
    }
?>
@extends('site.layoutadmin')
@section('content')

<style type="text/css">
<script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="{{ asset('./js/jquery.filer.min.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function() {
     $('#filer_input').filer();       
});
</script>
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
            <div class='panel panel-default dialog-panel' ">
                      <div class='panel-heading'>
                        <h3>จัดการข่าวประชาสัมพันธ์</h3>
                      </div>
                      <div class='panel-body'>

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                    </div>
                                @endif                     


                                {!! Form::open(array('url' => 'News','files' => true)) !!}
                                @if(Session::has('flash_message'))           
                                  <div class="alert alert-danger">
                                    {{Session::get('flash_message')}}
                                  </div> 
                                @endif  

                                        <div class='form-group'>
                                            <div class='col-md-10 col-xs-12'>
                                                <label class='control-label col-md-3 col-xs-12'><h5><b>เพิ่มรูปปก :</b></h5></label>
                                                <div class='col-md-9 col-xs-6'>
                                                                                  
                                                       <?= Form::file('newsmain_pic', null, ['class' => 'formcontrol','style'=>'margin-bottom: 5px'])  ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='form-group'>               
                                              <div class='col-md-10 col-xs-12'>
                                                      <label class='control-label col-md-3 col-xs-12'><h5><b>เพิ่มหัวข้อข่าว :</b></h5></label>
                                                      <div class='col-md-9 col-xs-12'>
                                                      <?= Form::text('news_title', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px','maxlength'=>80]); ?>
                                                       
                                                      </div>         
                                              </div>
                                        </div>
                                  
                                        <div class='form-group'>
                                          <div class='col-md-10 col-xs-12'>
                                          <label class='control-label col-md-3 col-xs-12'><h5><b>เพิ่มคำอธิบาย :</b></h5></label>
                                          <div class='col-md-9 col-xs-12'>
                                          <?= Form::text('news_description', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px','maxlength'=>100]); ?>
                                            
                                          </div>
                                          </div>
                                        </div>

                                        <div class='form-group'>
                                          <div class='col-md-10 col-xs-12'>
                                          <label class='control-label col-md-3 col-xs-12'><h5><b>เพิ่มรายละเอียด :</b></h5></label>
                                          <div class='col-md-9 col-xs-12'>
                                          <?= Form::textarea('news_detail', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px']); ?>
                                            
                                          </div>
                                          </div>
                                        </div>
                          
                                

                                        <div class='form-group'>
                                          <div class='col-md-10 col-xs-12'>
                                          <label class='control-label col-md-3 col-xs-12'><h5><b>เพิ่มไฟล์เอกสาร :</b></h5></label>
                                            <div class='col-md-9 col-xs-12' style="margin-top:10px;">
                                                  <?= Form::file('news_file', null, ['class' => 'formcontrol','style'=>'margin-bottom: 5px'])  ?>
                                                
                                            </div>
                                          </div>
                                        </div>
                                        

                                        <div class='form-group'>
                                          <div class='col-md-10 col-xs-12'>
                                          <label class='control-label col-md-3 col-xs-12'><h5><b>เพิ่มรูปภาพ :</b></h5></label>
                                            <div class='col-md-9 col-xs-12' style="margin-top:10px;">
                                                  <input type="file" name="files[]" id="filer_input"  multiple="multiple" >                                           
                                            </div>
                                          </div>
                                        </div>


                                        <div class='form-group'>
                                            <div class='col-md-12 col-xs-12'>
                                              <button class='btn-lg btn-default' style='float:right;' type='submit'>Save</button>
                                            </div>
                                          
                                        </div>
                                    
                                 {!! Form::close() !!} 
                      </div>
                                
                </div>
              </div>

</body>

@stop