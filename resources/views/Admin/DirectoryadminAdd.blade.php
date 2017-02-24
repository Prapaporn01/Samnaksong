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
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  font: 600 15px "Open Sans", Arial, sans-serif;
}
label.control-label {
  font-weight: 600;
  color: #777;
}


body {
    overflow-x:hidden;
}
</style>

<script type="text/javascript">
  $(document).ready(function() {  
  $('.multiselect').multiselect();
  $('.datepicker').datepicker();  
});
</script>

<body>
        <div class="col-md-9 col-xs-12">

        <div class='panel panel-default dialog-panel'>
          <div class='panel-heading'>
            <h5>จัดการทำเนียบเจ้าอาวาส</h5>
          </div>
          <div class='panel-body'>

            {!! Form::open(array('url' => 'Directory','files' => true)) !!} 
                      <div class='form-group' >                       
                            <div class='col-md-9 col-xs-12'>
                                <label class='control-label col-md-3 col-xs-3'>ชื่อเจ้าอาวาส</label>
                                <div class='col-md-3 col-xs-3'>
                                  <div class='form-group internal'>
                                    <?= Form::text('directory_name', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px']); ?>
                                  </div>
                                </div>

                                <label class='control-label col-md-3 col-xs-3'>ฉายาทางธรรม</label>
                                <div class='col-md-3 col-xs-3'>
                                  <div class='form-group internal'>
                                    <?= Form::text('directory_name_fair', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px']); ?>
                                  </div>
                                </div>
                            </div>
                      </div>




                      <div class='form-group'>               
                            <div class='col-md-9 col-xs-12'>
                                    <label class='control-label col-md-3 col-xs-3'>ช่วงเวลา</label>
                                    <div class='col-md-3 col-xs-3 '>
                                    <div class='form-group internal'>
                                      <?= Form::text('directory_time', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px']); ?>
                                    </div>
                                  </div>

                                  <label class='control-label col-md-3 col-xs-3'>ตำแหน่ง</label>
                                  <div class='col-md-3 col-xs-3 '>
                                    <div class='form-group internal'>
                                      <?= Form::text('directory_position', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px']); ?>
                                    </div>
                                  </div>
                            </div>
                      </div>

              
                     
                      <div class='form-group'>
                        <div class='col-md-9 col-xs-12'>
                        <label class='control-label col-md-3 col-xs-3'>รายละเอียด</label>
                        <div class='col-md-9 col-xs-9' >
                          <?= Form::textarea('directory_detail', null, ['class' => 'form-control','style'=>'margin-bottom: 5px']); ?>
                        </div>
                        </div>
                      </div>

                      <div class='form-group'>
                        <div class='col-md-9 col-xs-12'>
                        <label class='control-label col-md-3 col-xs-3'>รูปภาพ</label>
                        <div class='col-md-6 col-xs-5'>
                              <input type="file" name="files[]" id="filer_input" multiple="multiple" >
                        </div>
                        </div>
                      </div>
                      
                      <div class='form-group'>
                        <div class='col-md-12 col-xs-9'>
                          <button class='btn-lg btn-default' style='float:right' type='submit'>Save</button>
                        </div>
                      </div>

            {!! Form::close() !!}
          </div>
        </div>
        
      </div>

</body>

</html>
@stop