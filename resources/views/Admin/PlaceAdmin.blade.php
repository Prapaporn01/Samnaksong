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
        <form METHOD="LINK" ACTION="{{url('/Place/create')}}" style="margin-top: 5px;margin-bottom: 5px;">
            <input type="submit" class="btn btn-info btn-lg" style='float:right;' value="เพิ่มข้อมูลสถานที่ใกล้เคียง">
        </form>
        <br>
        <br> 
        <div class="table-responsive" >
            <table class="table table-striped" >
                    <thead >
                      <tr>
                        <th width="10%"><h4><b>รูปภาพ</b></h4></th> 
                        <th width="20%"><h4><b>ชื่อสถานที่ใกล้เคียง</b></h4></th>     
                        <th width="2%"><h4><b>URL</b></h4></th>
                        <th width="2%"><h4><b>Facebook</b></h4></th>
                        <th width="2%"><h4><b>คำอธิบาย</b></h4></th>
                        <th width="2%"></th>
                        <th width="2%"></th>                                         
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($Place as $row)
                      <tr>
                        <td>                            
                            <img src="{{ 'images/resize/'.$row->place_pic }}">
                        </td>
                        <td><h4 class="font1">{{$row->place_name}}</h4></td>
                        <td> <a class="btn btn-default btn-lg active btn-sm" href="{{$row->place_url}}" role="button"><b class="font1" "><i class="fa fa-link" aria-hidden="true" ></i></b></a> </td>
                        <td><a class="btn btn-default btn-lg active btn-sm" href="{{$row->place_facebook}}" role="button"><b class="font1" "><i class="fa fa-facebook" aria-hidden="true"></i></b></a></td>
                        <td>

                                  <!-- Trigger the modal with a button -->
                                  <button href="#Modal_{{$row->place_id }}" type="button" class="btn btn-default btn-lg active btn-sm" data-toggle="modal" ><b  class="font1">ดูรายละอียด</b></button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="Modal_{{ $row->place_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title"><b>คำอธิบาย</b></h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><h4>{{$row->place_description}}</h4></p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>              
                        </td>                        
                       
                        <td><a href="{{ url('/Place/'.$row->place_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit"><b class="font1">แก้ไขข้อมูล</b></button></a></td>

                        <?= Form::open(array('url' => 'Place/' . $row->place_id,
                        'method' => 'delete')) ?> 
                        <td>
                        <button href="#delete{{$row->place_id }}" type="submit" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('ต้องการลบข้อมูลสถานที่ใกล้เคียง?')" ><b class="font1">ลบ</b></button>
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
                            {{ $Place->links() }}
                        </div>  
                    </div>
                </div>
        </div>
</div> 

</body>

@stop