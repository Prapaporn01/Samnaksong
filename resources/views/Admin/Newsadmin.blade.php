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
        <form METHOD="LINK" ACTION="{{url('/News/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลข่าวประชาสัมพันธ์">
        </form>
        <br>
        <br>

          <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="10%"><h4><b>รูปปก</b></h4></th>
                        <th width="20%"><h4><b>หัวข้อข่าว</b></h4></th>                       
                        <th width="20%"><h4><b>วันที่อัพเดท</b></h4></th>
                        <th width="2%"><h4><b>คำอธิบายข่าว</b></h4></th>
                        <th width="2%"><h4><b>รายละเอียดข่าว</b></h4></th>
                        <th width="20%"><h4><b>ไฟล์ข่าว</b></h4></th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                      </tr>
                    </thead>
                    <tbody>

                     
                      <tr>
                      @foreach ($News as $row)
                        <td><img src="{{ 'images/resize/'.$row->newsmain_pic }}"></td>
                        <td><h4>{{$row->news_title}}</h4></td>
                                            
                        <td><h4>{{ $row->news_datetime->format('d.m.Y H:i:s') }}</h4></td> 
                         <td>
                         <!-- Trigger the modal with a button -->
                                  <button href="#Modal_{{$row->news_id }}" type="button" class="btn btn-default btn-sm" data-toggle="modal" ><b  class="font1">ดูรายละอียด</b></button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="Modal_{{ $row->news_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title"><b>คำอธิบาย</b></h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><h4>{{$row->news_description}}</h4></p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </td>
                        <td>
                         <!-- Trigger the modal with a button -->
                                  <button href="#Modal2_{{$row->news_id }}" type="button" class="btn btn-default btn-sm" data-toggle="modal" ><b  class="font1">ดูรายละอียด</b></button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="Modal2_{{ $row->news_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title"><b>รายละเอียดข่าว</b></h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><h4>{{$row->news_detail}}</h4></p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </td>
                        <td><h4>{{$row->news_file}}</h4></td> 
                        <td><a href="{{ url('/Newspicadmin/'.$row->news_id)}}"><div style='   margin-right:5px; float:right; '><input type="submit" class="btn btn-success btn-sm"  value="รูปในอัลบัม" style="font-size:16px; font-weight:bold;"> </div></a></td>
                                  
                        <td><a href="{{ url('/News/'.$row->news_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit"><b class="font1">แก้ไข</b></button></a></td>

                        <?= Form::open(array('url' => 'News/' . $row->news_id,
                        'method' => 'delete')) ?> 
                        <td>
                        <button href="#delete{{$row->news_id }}" type="submit" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('ต้องการลบข้อมูลข่าวประชาสัมพันธ์?')" ><b class="font1">ลบอัลบัม</b></button>
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
                           {{ $News->links() }}
                        </div>  
                    </div>
                </div>
        </div>


</body>

</html>
@stop