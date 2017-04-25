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


<body>

          <div class="col-md-9 col-xs-12">
            <div class='panel panel-default dialog-panel' ">
                <div class='panel-heading'><h5>จัดการวัตถุมงคล</h5></div>

                  <div class='panel-body'>
<?php /*dd($sacred);*/ ?>


                          <div align="center"><img src="{{ asset('images/resize/') }}/{{$sacred->sacredmain_pic}}"></div>
                
                         
                      
                        <div class='form-group'>
                                    <div class='col-md-11 col-xs-12 '>
                                      <div class="alert alert-info" style="margin-left: 15%;margin-top: 5%;">
                                        หากต้องการแก้ไขรูปภาพ ให้กดปุ่มลบรูปภาพจากนั้นทำการเลือกรูปภาพใหม่<br>หากไม่ต้องการแก้ไขรูปภาพ ให้ข้ามขั้นตอนนี้ไป
                                      </div>
                                    </div>
                        </div>

<?= Form::model($sacred, array('url' => 'Sacred/' . $sacred->sacred_id,'method' => 'put','files'=>true)) ?> 
                        <div class='form-group'>
                            <div class='col-md-11 col-xs-12' style="margin-bottom: 5px;">
                                <label class='control-label col-md-5 col-xs-6'>แก้ไขรูปปก :</label>

                                  <div class='col-md-3 col-xs-12'>    
                                    <button><a href="{{url('Sacredpicdelete/'.$sacred->sacred_id)}}" style="color:black;">ลบรูปภาพ</a></button>        
                                  </div>

                                  <div class='col-md-4 col-xs-12'>
                                    <?= Form::file('sacredmain_pic', null, ['class' => 'formcontrol'])  ?>
                                  </div>
                            </div>
                        </div>  



                        <div class='form-group' >                       
                                <div class='col-md-11 col-xs-12'>
                                    <label class='control-label col-md-2 col-xs-3'>ประเภท :</label>
                                    
                                  <div class='col-md-3 col-xs-12'>
                                      <div class='form-group internal'>
                                          <div class="dropdown" style="margin-bottom:5px;">
                                           <?= Form::select('sacredtype_id',
App\Sacredtype::pluck('sacredtype_name', 'sacredtype_id'), null, ['class' => 'form-control']); ?>
                                          </div>
                                      </div>
                                    </div>
                                 

                                    <div class='col-md-4 col-xs-12' style="margin-bottom:5px;">
                                     <button href="#Modal" type="button" class="btn btn-default btn-sm" data-toggle="modal" name="sacred_type"><h5>ต้องการเพิ่มประเภทวัตถุมงคล +</h5></button>
                                     <!-- Modal -->                                     
                                    </div>

                                    <div class='col-md-3 col-xs-12' style="margin-bottom:5px;">
                                     <button href="#Modal1" type="button" class="btn btn-default btn-sm" data-toggle="modal" name="sacred_deletetype"><h5>ลบประเภทวัตถุมงคล</h5></button>
                                     <!-- Modal -->                                     
                                    </div>
                                </div>
                      </div>
  

      
                        <div class='form-group'>               
                                <div class='col-md-12 col-xs-12'>
                                        <label class='control-label col-md-3 col-xs-12'>แก้ไขชื่อวัตถุมงคล :</label>
                                        <div class='col-md-7 col-xs-12'>
                                         <?= Form::text('sacred_name', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px']); ?>
                                        </div>         
                                </div>
                        </div>
                        
                  
                  
                        <div class='form-group'>
                            <div class='col-md-9 col-xs-12'>
                            <label class='control-label col-md-6 col-xs-12'>แก้ไขรายละเอียดวัตถุมงคล :</label>
                            <div class='col-md-12 col-xs-12'>
                             <?= Form::textarea('sacred_detail', null, ['class' => 'form-control','style'=>'margin-bottom: 5px']); ?>
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

                    <div class="modal fade" id="Modal" role="dialog">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                        
                        {!! Form::open(array('url' => 'Sacredtype','files' => true)) !!} 
                            <div class="modal-body">
                            เพิ่มประเภทวัตถุมงคล:
                              <p><?= Form::text('sacredtype_add', null,['class' => 'form-control', 'style'=>'margin-bottom: 5px','required']); ?> </p>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-default" >Save</button>
                            </div>
                        {!! Form::close() !!}
                        </div>
                      </div>
                    </div>


                    <div class="modal fade" id="Modal1" role="dialog">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                        
                        {!! Form::open(array('url' => 'Sacredtypedelete','files' => true)) !!} 
                            <div class="modal-header" style="font-size:18px;"><b>
                            ลบประเภทวัตถุมงคล:</b>
                            </div>

                            @foreach($sacred2 as $row)
                            <div class="modal-body">
                                  <div class="table-responsive">
                                    <table class="table table-striped"> 
                                    <thead>
                                       <th width="80%">ชื่อประเภท</th>
                                       <th width="20%"></th>
                                    </thead>
                                      <tbody>
                                        <tr> 
                                          <td>
                                          {{$row->sacredtype_name}}
                                          </td>
                                          <td>
                                          <?= Form::open(array('url' => 'Sacredtypedelete/' ,'method' => 'post')) ?>
                                          <input type="hidden" name="id" value="{{$row->sacredtype_id}}">
                                          <input type="hidden" name="idedit" value="{{$sacred->sacred_id}}">
                        <button href="#delete{{$row->sacredtype_id }}" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('Are you sure to delete?')" type="submit">ลบประเภท</button>
                        {!! Form::close() !!}
                                        </td>

                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>                 
                            </div>                         
                            @endforeach

                            <div class="row">
                              <div class="col-md-12">
                                  <div align="center">
                                       {{ $sacred2->links() }}
                                  </div>  
                              </div>
                            </div>
                        {!! Form::close() !!}
                        </div>
                      </div>
                    </div>
            </div>
          </div>
</body>

@stop