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


<body>

              <div class="col-md-9 col-xs-12">
            <br>

            <div class='panel panel-default dialog-panel' ">
      <div class='panel-heading'>
        <h5>จัดการเครื่องสักการะบูชา</h5>
      </div>
      <div class='panel-body'>

<div align="center"><img src="{{ asset('images/resize/') }}/{{$worship->worshipmain_pic}}"></div>        <?= Form::model($worship, array('url' => 'Worship/' . $worship->worship_id,'method' => 'put','files'=>true)) ?>
                        <div class='form-group'>
                            <div class='col-md-11 col-xs-10 '>
                              <div class="alert alert-info" style="margin-left: 130px;">
                                หากต้องการแก้ไขรูปภาพ ให้กดปุ่มลบรูปภาพจากนั้นทำการเลือกรูปภาพใหม่<br>หากไม่ต้องการแก้ไขรูปภาพ ให้ข้ามขั้นตอนนี้ไป
                              </div>
                            </div>
                        </div>
 

                <div class='form-group'>
                    <div class='col-md-11 col-xs-12' style="margin-bottom: 5px;">
                        <label class='control-label col-md-5 col-xs-2'>รูปปก</label>

                          <div class='col-md-3 col-xs-2'>    
                            <button><a href="{{url('Worshippicdelete/'.$worship->worship_id)}}" style="color:black;">ลบรูปภาพ</a></button>        
                          </div>

                          <div class='col-md-4 col-xs-4'>
                            <?= Form::file('worshipmain_pic', null, ['class' => 'formcontrol'])  ?>
                          </div>
                    </div>
                </div>            


                  <div class='form-group'>               
                        <div class='col-md-9 col-xs-12 '>
                                <label class='control-label col-md-6 col-xs-4'>ชื่อเครื่องสักการะบูชา</label>
                                <div class='col-md-6 col-xs-6'>
                                  <?= Form::text('worship_name', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px']); ?>
                                </div>         
                        </div>
                  </div>
                
          
                 
                  <div class='form-group'>
                    <div class='col-md-9 col-xs-12'>
                    <label class='control-label col-md-6 col-xs-4'>รายละเอียดเครื่องสักการะบูชา</label>
                    <div class='col-md-6 col-xs-6'>
                      <?= Form::textarea('worship_detail', null, ['class' => 'form-control','style'=>'margin-bottom: 5px']); ?>
                    </div>
                    </div>
                  </div>



                              
                   <div class='form-group'>
                    <div class='col-md-9 col-xs-12'>
                    <label class='control-label col-md-6 col-xs-4'>รูปภาพ</label>
                    <div class='col-md-6 col-xs-6'>
                          <input type="file" name="files[]" id="filer_input" multiple="multiple" >
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

</body>

@stop