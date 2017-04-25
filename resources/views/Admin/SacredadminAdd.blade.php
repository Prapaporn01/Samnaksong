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
<script src="{{ asset('.js/jquery.filer.min.js')}}"></script>

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




          <div class="col-md-9 col-xs-12">
          <br>
            <div class='panel panel-default dialog-panel'>
                      <div class='panel-heading'><h3>จัดการวัตถุมงคล</h3></div>
                        <div class='panel-body'>
                            @if (count($errors) > 0)
                                <div class="alert alert-warning">
                                <ul>
                                  @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                  @endforeach
                                </ul>
                                </div>
                            @endif 

                            {!! Form::open(array('url' => 'Sacred','files' => true)) !!} 

                              @if(Session::has('flash_message'))
                                              <div class="alert alert-danger">
                                                  {{ Session::get('flash_message') }}
                                              </div>
                              @endif
                              @if(Session::has('flash_message2'))
                                              <div class="alert alert-success">
                                                  {{ Session::get('flash_message2') }}
                                              </div>
                              @endif
                              <div class='form-group' >                       
                                        <div class='col-md-9 col-xs-12'>
                                            <label class='control-label col-md-2 col-xs-6'><h5><b>ประเภท :</b></h5></label>
                                            
                                            <div class='col-md-4 col-xs-6'>
                                              <div class='form-group internal'>
                                                  <div class="dropdown" style="margin-bottom:5px;">
                                                    
                                                    <select class="form-control" name='type' >
                                                      @foreach($type as $row)
                                                      <option value="{{$row->sacredtype_id}}">{{$row->sacredtype_name}}</option>
                                                      @endforeach
                                                    </select>
                                                  </div>
                                              </div>
                                            </div>
                                         

                                            <div class='col-md-4 col-xs-12' style="margin-bottom:5px;">
                                             <button href="#Modal" type="button" class="btn btn-default btn-sm" data-toggle="modal" name="sacred_type" style="width:130%"><h5>ต้องการเพิ่มประเภทวัตถุมงคล +</h5></button>
                                             <!-- Modal -->                                     
                                            </div>
                                        </div>
                              </div>

                              <div class='form-group' >
                                  <div class='col-md-9 col-xs-12'>
                                      <label class='control-label col-md-6 col-xs-12'><h5><b>เพิ่มรูปปก :</b></h5></label>
                                        <div class='col-md-6 col-xs-12' style="margin-bottom:5px;">
                                          <?= Form::file('sacredmain_pic', null, ['class' => 'formcontrol','style'=>'margin-bottom: 5px'])  ?>
                                        </div>
                                  </div>
                              </div>  

                              <div class='form-group'>               
                                    <div class='col-md-9 col-xs-12'>
                                            <label class='control-label col-md-6 col-xs-12'>เพิ่มชื่อวัตถุมงคล :</label>
                                            <div class='col-md-6 col-xs-12'>
                                             <?= Form::text('sacred_name', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px']); ?>
                                            </div>         
                                    </div>
                              </div>
                            
                      
                             
                              <div class='form-group'>
                                <div class='col-md-9 col-xs-12'>
                                <label class='control-label col-md-6 col-xs-12'><h5><b>เพิ่มรายละเอียดวัตถุมงคล :</b></h5></label>
                                <div class='col-md-12 col-xs-12'>
                                 <?= Form::textarea('sacred_detail', null, ['class' => 'form-control','style'=>'margin-bottom: 5px']); ?>
                                </div>
                                </div>
                              </div>

                               

                              <div class='form-group'>
                                      <div class='col-md-9 col-xs-12'>
                                        <label class='control-label col-md-6 col-xs-12'><h5><b>เพิ่มรูปภาพ :</b></h5></label>
                                        <div class='col-md-6 col-xs-12'>
                                              <input type="file" name="files[]" id="filer_input" multiple="multiple" required>
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

                   <div class="modal fade" id="Modal" role="dialog">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                  {!! Form::open(array('url' => 'Sacredtype','files' => true)) !!} 
                        <div class="modal-body">
                        เพิ่มประเภทวัตถุมงคล:
                          <p><?= Form::text('sacredtype_add', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px' ,'required']); ?> </p>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-default" >Save</button>
                        </div>
                   {!! Form::close() !!}
                      </div>
                    </div>
                  </div>
          
@stop