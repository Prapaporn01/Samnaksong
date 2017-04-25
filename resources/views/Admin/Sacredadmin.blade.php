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
        <div class="col-md-9" style="margin-top: 5px;margin-bottom: 5px;">
        <form METHOD="LINK" ACTION="{{url('/Sacred/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลวัตถุมงคล">
        </form>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="10%"><h4><b>รูปปก</b></h4></th>
                        <th width="50%"><h4><b>ชื่อวัตถุมงคล</b></h4></th>
                        <th width="30%"><h4><b>รายละเอียดวัตถุมงคล</b></h4></th>
                        <th width="5%"></th>
                        <th width="5%"></th>
                        <th width="5%"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                       @foreach ($Sacred_object as $row)
                        <td>                            
                            <img src="{{ 'images/resize/'.$row->sacredmain_pic }}">
                        </td>
                        <td><h4>{{$row->sacred_name}}</h4></td>
                        <td>
                           <button href="#deleteModal_{{$row->sacred_id }}" type="button" class="btn btn-default btn-lg active btn-sm" data-toggle="modal" ><b  class="font1">ดูรายละอียด</b></button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="deleteModal_{{ $row->sacred_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title"><b>คำอธิบาย</b></h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><h4>{{$row->sacred_detail}}</h4></p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </td>

                        <td><a href="{{ url('/Sacredpicadmin/'.$row->sacred_id)}}"><div style='   margin-right:5px; float:right; '><input type="submit" class="btn btn-success btn-lg active btn-sm"  value="รูปในอัลบัม" style="font-size:16px; font-weight:bold;"></div></a></td>                                             
                        <td><a href="{{ url('/Sacred/'.$row->sacred_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit"><b  class="font1">แก้ไขข้อมูล</b></button></a></td>
                        <?= Form::open(array('url' => 'Sacred/' . $row->sacred_id,
                        'method' => 'delete')) ?>
                        <td><button href="#delete{{$row->worship_id }}" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('ต้องการลบข้อมูลวัตถุมงคล?')"  type="submit"><b  class="font1">ลบอัลบัม</b></button></td>
                         {!! Form::close() !!}
                      </tr>
                       @endforeach
                    </tbody>
            </table>
        </div>
 

            <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $Sacred_object->links() }}
                        </div>  
                    </div>
                </div>
        </div>

    </div>

</body>

</html>
@stop