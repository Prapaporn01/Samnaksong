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
        <form METHOD="LINK" ACTION="{{url('/Gallery/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูล Gallery">
        </form>
        <br>
        <br>
         <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="20%"><h4><b>รูป</b></h4></th>
                        <th width="20%"><h4><b>คำอธิบาย</b></h4></th>
                        <th width="20%"><h4><b>ชื่อไฟล์</b></h4></th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($Gallery as $row)
                      <tr>
                        <td>                            
                            <img src="{{ 'images/resize/'.$row->gallery_file_pic }}">
                        </td>
                         <td>
                           <button href="#Modal_{{$row->gallery_id }}" type="button" class="btn btn-default btn-lg active btn-sm" data-toggle="modal" ><b  class="font1">ดูรายละอียด</b></button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="Modal_{{ $row->gallery_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title"><b>คำอธิบาย</b></h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><h4>{{$row->gallery_detail}}</h4></p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </td>
                        <td><h4>{{$row->gallery_file_pic}}</h4></td>
                     
                        <td></td>
                        <td><a href="{{ url('/Gallery/'.$row->gallery_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit"><b class="font1">แก้ไข</b></button></a></td>


                        <?= Form::open(array('url' => 'Gallery/' . $row->gallery_id,
                        'method' => 'delete')) ?> 
                        <td>
                        <button href="#delete{{$row->gallery_id }}" type="submit" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('ต้องการลบข้อมูลแกลอรี่?')" ><b class="font1">ลบ</b></button>
                        </td>
                         {!! Form::close() !!}

                       
                      </tr>
                      @endforeach
                      
                    </tbody>
            </table>
        </div>


            <br>
            <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $Gallery->links() }}
                        </div>  
                    </div>
                </div>
        </div>

    </div>

</body>

</html>
@stop