<?php
session_start();

    if(!isset($_SESSION['username'])){
        return redirect()->action('AdloginController@index');
    }
?>
@extends('site.layoutadmin')
@section('content')
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
        
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
        /* IE6-9 fallback on horizontal gradient */
        
        font: 600 15px "Open Sans", Arial, sans-serif;
    }
    label.control-label {
        font-weight: 600;
        color: #777;
    }
    body {
        font-family: 'Lucida Grande', 'Helvetica Neue', sans-serif;
        font-size: 13px;
    }
    div.custom_file_upload {
        width: 230px;
        height: 20px;
    }
    input.file {
        width: 150px;
        height: 35px;
        border: 1px solid #BBB;
        border-right: 0;
        color: #888;
        padding: 5px;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-bottom-left-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-bottomleft: 5px;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        outline: none;
    }
    div.file_upload {
        width: 80px;
        height: 35px;
        background: #7abcff;
        background: -moz-linear-gradient(top, #7abcff 0%, #60abf8 44%, #4096ee 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #7abcff), color-stop(44%, #60abf8), color-stop(100%, #4096ee));
        background: -webkit-linear-gradient(top, #7abcff 0%, #60abf8 44%, #4096ee 100%);
        background: -o-linear-gradient(top, #7abcff 0%, #60abf8 44%, #4096ee 100%);
        background: -ms-linear-gradient(top, #7abcff 0%, #60abf8 44%, #4096ee 100%);
        background: linear-gradient(top, #7abcff 0%, #60abf8 44%, #4096ee 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#7abcff', endColorstr='#4096ee', GradientType=0);
        display: inline;
        position: absolute;
        overflow: hidden;
        cursor: pointer;
        -webkit-border-top-right-radius: 5px;
        -webkit-border-bottom-right-radius: 5px;
        -moz-border-radius-topright: 5px;
        -moz-border-radius-bottomright: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        font-weight: bold;
        color: #FFF;
        text-align: center;
        padding-top: 8px;
    }
    div.file_upload:before {
        content: 'UPLOAD';
        position: absolute;
        left: 0;
        right: 0;
        text-align: center;
        cursor: pointer;
    }
    div.file_upload input {
        position: relative;
        height: 30px;
        width: 250px;
        display: inline;
        cursor: pointer;
        opacity: 0;
    }
    body {
        overflow-x: hidden;
    }
</style>

<body>


        <div class="col-md-9 col-xs-12" >
            <div class='panel panel-default dialog-panel' >
                <div class='panel-heading'>
                    <h3 style="    margin-bottom: 0px;    margin-top: 0px;">จัดการบุคคลสำคัญที่เกี่ยวข้อง</h3>
                </div>
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


                    <div align="center"><img src="{{ asset('images/resize/') }}/{{$person->person_file_pic}}"></div>
                     <?= Form::model($person, array('url' => 'Persons/' . $person->person_id,'method' => 'put','files'=>true)) ?>

                        <div class='form-group'>
                            <div class='col-md-11 col-xs-12 '>
                              <div class="alert alert-info" style="margin-left: 20%;">
                                หากต้องการแก้ไขรูปภาพ ให้กดปุ่มลบรูปภาพจากนั้นทำการเลือกรูปภาพใหม่<br>หากไม่ต้องการแก้ไขรูปภาพ ให้ข้ามขั้นตอนนี้ไป
                              </div>
                            </div>
                        </div>


                        <div class='form-group'>
                            <div class='col-md-11 col-xs-12'>
                                <label class='control-label col-md-3 col-xs-12'>แก้ไขรูปภาพ : </label>

                                    <div class='col-md-3 col-xs-12'>    
                                    <button><a href="{{url('Personpicdelete/'.$person->person_id)}}" style="color:black;">ลบรูปภาพ</a></button>        
                                    </div>

                                    <div class='col-md-6 col-xs-12' style="    margin-bottom: 5px;">
                                        <?= Form::file('person_file_pic',null , ['class' => 'formcontrol','value'=>$person->person_file_pic])  ?> 
                                    </div>       
                            </div>
                        </div>

                        <div class='form-group'>
                            <div class='col-md-11 col-xs-12'>
                                <label class='control-label col-md-3 col-xs-12'>แก้ไขชื่อ :</label>
                                <div class='col-md-9 col-xs-12'>
                                    <div class='form-group internal'>
                                        <?= Form::text('person_name', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px']); ?>
                                    </div>                                
                                </div>
                            </div>
                        </div>


                        <div class='form-group'>
                            <div class='col-md-11 col-xs-12'>
                                <label class='control-label col-md-3 col-xs-12'>แก้ไขรายละเอียดบุคคลสำคัญที่เกี่ยวข้อง :</label>
                                <div class='col-md-9 col-xs-12'>
                                    <?= Form::textarea('person_detail', null, ['class' => 'form-control','style'=>'margin-bottom: 10px']); ?>
                                    
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

</html>
@stop