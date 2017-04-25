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
        <form METHOD="LINK" ACTION="{{url('/Persons/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลบุคคลสำคัญที่เกี่ยวข้อง">
        </form>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="15%"><h4><b>รูปบุคคลสำคัญ</b></h4></th>
                        <th width="30%"><h4><b>ชื่อบุคคลสำคัญ</b></h4></th>      
                        <th width="30%"><h4><b>รายละเอียดของบุคคลสำคัญ</b></h4></th>
                        <th width="10%"></th>
                        <th width="10%"></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($related_persons as $row)
                      <tr>                   
                        <td>                            
                            <img src="{{ 'images/resize/'.$row->person_file_pic }}">
                        </td>
                        <td><h4 class="font1">{{$row->person_name}}</h4></td>
                        <td>
                                  <!-- Trigger the modal with a button -->
                                  <button href="#deleteModal_{{$row->person_id }}" type="button" class="btn btn-default btn-lg active btn-sm"data-toggle="modal" ><b  class="font1">ดูรายละอียด</b></button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="deleteModal_{{ $row->person_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title"><b>คำอธิบาย</b></h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><h4>{{$row->person_detail}}</h4></p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>                  
                        </td> 

                       
                        <td><a href="{{ url('/Persons/'.$row->person_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit"><b class="font1">แก้ไขข้อมูล</b></button></a></td>


                        <?= Form::open(array('url' => 'Persons/' . $row->person_id,
                        'method' => 'delete')) ?> 
                        <td>
                        <button href="#delete{{$row->person_id }}" type="submit" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('ต้องการลบข้อมูลบุคคลสำคัญที่เกี่ยวข้อง?')" ><b class="font1">ลบ</b></button>
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
                            {{ $related_persons->links() }}
                        </div>  
                    </div>
            </div>
        </div> 


</body>


@stop