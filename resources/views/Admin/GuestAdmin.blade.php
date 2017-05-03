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

 
         <div class="col-md-9" >
        <br>
           <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="40%"><h4><b>ชื่อผู้แสดงความคิดเห็น</b></h4></th>
                        <th width="30%"><h4><b>ข้อความ</b></h4></th>
                        <th width="25%"><h4><b>วันที่แสดงความคิดเห็น</b></h4></th>
                        <th width="2%"></th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach ($Guestbook as $row)
                      <tr>
                        <td><h4 class="font1">{{$row->guest_name}}</td>
                        <td>

                                  <!-- Trigger the modal with a button -->
                                  <button href="#deleteModal_{{$row->guest_id }}" type="button" class="btn btn-default btn-lg active btn-sm" data-toggle="modal" ><h4 class="font1">ดูรายละอียด</h4></button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="deleteModal_{{ $row->guest_id  }}" role="dialog">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title"><b>ความคิดเห็นจากผู้เยี่ยมชมเว็บไซต์</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><h4 class="font1">{{$row->guest_detail}}</h4></p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                               
                        </td>       
                        <td>{{ Carbon\Carbon::parse($row->guest_date)->format('d-m-Y ') }}</td>
                        

                         <?= Form::open(array('url' => 'Guest/' . $row->guest_id,
                        'method' => 'delete')) ?> 
                        <td>
                        <button href="#delete{{$row->guest_id }}" type="submit" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('ต้องการลบข้อมูลสมุดเยี่ยมชมเว็บไซต์?')" ><b class="font1">ลบ</b></button>
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
                             {{ $Guestbook->links() }}
                        </div>  
                    </div>
                </div>
        </div>

    </div>

  
</body>

</html>
@stop