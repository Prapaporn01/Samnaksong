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
          <div class='panel panel-default dialog-panel' ">
              <div class='panel-heading'>
                <h5>จัดการสำคัญภายในสำนักสงฆ์</h5>
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

        {!! Form::open(array('url' => 'Kingpin','files' => true)) !!} 

                <div class='form-group'>
                    <div class='col-md-9 col-xs-12'>
                        <label class='control-label col-md-6 col-xs-3'>รูปปก</label>
                          <div class='col-md-6 col-xs-4'>
                            <?= Form::file('kingpinmain_pic', null, ['class' => 'formcontrol','style'=>'margin-bottom: 5px'])  ?>
                          </div>
                    </div>
                </div>  

                      
                  <div class='form-group'>               
                        <div class='col-md-9 col-xs-12'>
                                <label class='control-label col-md-6 col-xs-3'>ชื่อสิ่งสำคัญภายในสำนักสงฆ์</label>
                                <div class='col-md-4 col-xs-6'>
                                  <?= Form::text('kingpin_name', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px']); ?>
                                </div>         
                        </div>
                  </div>
                
          
                 
                  <div class='form-group'>
                    <div class='col-md-9 col-xs-12'>
                    <label class='control-label col-md-6 col-xs-3'>รายละเอียดสำคัญภายในสำนักสงฆ์</label>
                    <div class='col-md-12 col-xs-8' >
                      <?= Form::textarea('kingpin_detail', null, ['class' => 'form-control','style'=>'margin-bottom: 5px']); ?>
                    </div>
                    </div>
                  </div>

                          
                  <div class='form-group'>               
                        <div class='col-md-9 col-xs-12'>
                                <label class='control-label col-md-6 col-xs-3'>ประเภท</label>
                                <div class='col-md-6 col-xs-4'>
                                <?= Form::text('kingpin_type', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px']); ?>
                                 
                                </div>         
                        </div>
                  </div>


                  <div class='form-group'>
                    <div class='col-md-9 col-xs-12'>
                    <label class='control-label col-md-6 col-xs-3'>รูปภาพ</label>
                    <div class='col-md-6 col-xs-5'>
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