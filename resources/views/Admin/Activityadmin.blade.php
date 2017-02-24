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

</style>

<body>

        <div class="col-md-9">
        <br>
        
        <form METHOD="LINK" ACTION="{{url('/Activity/create')}}">
                            <input type="submit" class="btn btn-info btn-lg" style='float:right;' value="เพิ่มข้อมูลรูปภาพกิจกรรม">
                        </form>
        


       
        <br>
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="10%">รูปปก</th>
                        <th width="30%">ชื่อกิจกรรม</th>      
                        <th width="10%">รายละเอียด</th>
                        <th width="20%">วันที่อัพเดท</th>
                        <th width="15%">จัดการรูปภาพกิจกรรม</th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($activities as $row)
                      <tr>
                        <td>                            
                            <img src="{{ 'images/resize/'.$row->activitiesmain_pic }}">
                        </td>
                        <td>{{$row->activities_name}}</td>
                        <td>
                         <!-- Trigger the modal with a button -->
                                  <button href="#deleteModal_{{$row->activities_id }}" type="button" class="btn btn-default btn-sm" data-toggle="modal" >ดูรายละอียด</button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="deleteModal_{{ $row->activities_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title">รายละเอียด</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p>{{$row->activities_detail}}</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </td>

                        <td>{{$row->activities_date}}</td>
                        <td><a href="{{ url('/Activitypicadmin/'.$row->activities_id)}}"><div style='   margin-right:5px; float:right; '><input type="submit" class="btn btn-success btn-sm"  value="จัดการรูปในอัลบัมกิจกรรม"></div></a></td>
                        
                        <td><a href="{{ url('/Activity/'.$row->activities_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit">แก้ไขข้อมูล</button></a></td>

                        <td>
                        <?= Form::open(array('url' => 'Activity/' . $row->activities_id,
                        'method' => 'delete')) ?>
                        <button class="btn btn-danger btn-lg active btn-sm" type="submit">ลบอัลบัม</button>
                        {!! Form::close() !!}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
            </table>


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