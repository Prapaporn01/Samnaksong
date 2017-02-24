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
        <form METHOD="LINK" ACTION="{{url('/Kingpin/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลสิ่งสำคัญภายในสำนักสงฆ์">
        </form>
        <br>
        <br>
          <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="10%">รูปปก</th>
                        <th width="35%">ชื่อสิ่งสำคัญ</th>
                        <th width="20%">รายละเอียดสิ่งสำคัญภายในสำนักสงฆ์</th>
                        <th width="30%">ประเภทของสิ่งสำคัญภายในสำนักสงฆ์</th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                       @foreach ($Kingpin_state as $row)
                        <td>                            
                            <img src="{{ 'images/resize/'.$row->kingpinmain_pic }}">
                        </td>
                        <td>{{$row->kingpin_name}}</td>
                        <td>
                           <button href="#deleteModal_{{$row->kingpin_id }}" type="button" class="btn btn-default btn-sm" data-toggle="modal" >ดูรายละอียด</button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="deleteModal_{{ $row->kingpin_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title">คำอธิบาย</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p>{{$row->kingpin_detail}}</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </td>
                        <td>{{$row->kingpin_type}}</td>
                        <td><a href="{{ url('/Kingpinpicadmin/'.$row->kingpin_id)}}"><div style='   margin-right:5px; float:right; '><input type="submit" class="btn btn-success btn-sm"  value="จัดการลบรูปภาพในอัลบัม"></div></a></td>
                        <td><a href="{{ url('/Kingpin/'.$row->kingpin_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit">แก้ไขข้อมูล</button></a></td>
                       <?= Form::open(array('url' => 'Kingpin/' . $row->kingpin_id,
                        'method' => 'delete')) ?>
                        <td><button class="btn btn-danger btn-lg active btn-sm" type="submit">ลบอัลบัม</button>
                         {!! Form::close() !!}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
            </table>
          </div>

                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $Kingpin_state->links() }}
                        </div>  
                    </div>
                </div>
        </div>


</body>

</html>
@stop