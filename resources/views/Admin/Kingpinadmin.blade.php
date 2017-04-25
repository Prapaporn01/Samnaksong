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

        <form METHOD="LINK" ACTION="{{url('/Kingpin/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลสิ่งสำคัญภายในสำนักสงฆ์">
        </form>
        <br>
        <br>
          <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="10%"><h4><b>รูปปก</b></h4></th>
                        <th width="20%"><h4><b>ชื่อสิ่งสำคัญ</b></h4></th>
                        <th width="20%"><h4><b>รายละเอียดสิ่งสำคัญภายในสำนักสงฆ์</b></h4></th>
                        <!-- <th width="30%"><h4><b>ประเภทของสิ่งสำคัญภายในสำนักสงฆ์</b></h4></th> -->
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
                        <td><h4>{{$row->kingpin_name}}</h4></td>
                        <td>
                           <button href="#deleteModal_{{$row->kingpin_id }}" type="button" class="btn btn-default btn-lg active btn-sm" data-toggle="modal" ><b  class="font1">ดูรายละอียด</b></button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="deleteModal_{{ $row->kingpin_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title"><b>คำอธิบาย</b></h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><H4>{{$row->kingpin_detail}}</H4></p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </td>
                       <!--  <td><H4>{{$row->kingpin_type}}</H4></td> -->
                        <td><a href="{{ url('/Kingpinpicadmin/'.$row->kingpin_id)}}"><div style='   margin-right:5px; float:right;' ><input type="submit" class="btn btn-success btn-lg active btn-sm"  value="รูปในอัลบัม" style="font-size:16px; font-weight:bold;"></div></a></td>
                         <td><a href="{{ url('Kingpin/'.$row->kingpin_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit"><b  class="font1">แก้ไข</b></button></a></td>


                       <?= Form::open(array('url' => 'Kingpin/' . $row->kingpin_id,
                        'method' => 'delete')) ?> 
                        <td>
                        <button href="#delete{{$row->kingpin_id }}" type="submit" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('ต้องการลบอัลบัมข้อมูลสิ่งสำคัญภายในสำนักสงฆ์?')" ><b  class="font1">ลบอัลบัม</b></button>
                        </td>

                       {!! Form::close() !!} 

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