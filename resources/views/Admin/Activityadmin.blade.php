<?php
session_start();

    if(!isset($_SESSION['username'])){
        return redirect()->action('AdloginController@index');
    }
?>
@extends('site.layoutadmin')
@section('content')

<style type="text/css">
    .pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  background-color:  #8a6d3b;
}

.pagination > li > a,
.pagination > li > span {
  color: #8a6d3b;
}
b.font1{
  font-size:16px;
}
</style>

<body>

        <div class="col-md-9 " style="margin-top: 5px;margin-bottom: 5px;">

                        <form METHOD="LINK" ACTION="{{url('/Activity/create')}}">
                            <input type="submit" class="btn btn-info btn-lg" style='float:right;' value="เพิ่มข้อมูลกิจกรรม">
                        </form>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="10%"><h4><b>รูปปก</b></h4></th>
                        <th width="30%"><h4><b>ชื่อกิจกรรม</b></h4></th>      
                        <th width="15%"><h4><b>รายละเอียด</b></h4></th>
                        <th width="15%"><h4><b>วันที่อัพเดท</b></h4></th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      <tr>
                      @foreach ($activities as $row)
                        <td>                            
                            <img src="{{ 'images/resize/'.$row->activitiesmain_pic }}">
                        </td>
                        <td>{{$row->activities_name}}</td>
                        <td>
                         <!-- Trigger the modal with a button -->
                                  <button href="#deleteModal_{{$row->activities_id }}" type="button" class="btn btn-default btn-lg active btn-sm" data-toggle="modal" ><b  class="font1">ดูรายละอียด</b></button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="deleteModal_{{ $row->activities_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title"><b>รายละเอียด</b></h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><h4>{{$row->activities_detail}}</h4></p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </td>

                        <td>{{ $row->activities_date->format('d.m.Y') }}</td>
                        <td><a href="{{ url('/Activitypicadmin/'.$row->activities_id)}}"><div style='   margin-right:5px; float:right; '><input type="submit" class="btn btn-success btn-lg active btn-sm"  value="รูปในอัลบัม" style="font-size:16px; font-weight:bold;"></div></a></td>
                        
                        <td><a href="{{ url('/Activity/'.$row->activities_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit"><b  class="font1">แก้ไข</b></button></a></td>

                        <td>

                        <?= Form::open(array('url' => 'Activity/' . $row->activities_id,
                        'method' => 'delete')) ?> 
                        <td>
                        <button href="#delete{{$row->activities_id }}" type="submit" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('ต้องการลบข้อมูลกิจกรรม?')" ><b  class="font1">ลบอัลบัม</b></button>
                        </td>
                         {!! Form::close() !!}


                      </tr>
                      @endforeach
                    </tbody>
            </table>
            </div>


            <br>
            <br>
            <br>
                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                            {{ $activities->links() }}
                        </div>  
                    </div>
                </div>
        </div>

   

</body>

</html>
@stop