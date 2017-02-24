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
           <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="40%">ชื่อผู้แสดงความคิดเห็น</th>
                        <th width="30%">ข้อความ</th>
                        <th width="25%">วันที่แสดงความคิดเห็น</th>
                        <th width="2%"></th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach ($Guestbook as $row)
                      <tr>
                        <td>{{$row->guest_name}}</td>
                        <td>

                                  <!-- Trigger the modal with a button -->
                                  <button href="#deleteModal_{{$row->guest_id }}" type="button" class="btn btn-default btn-sm" data-toggle="modal" >ดูรายละอียด</button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="deleteModal_{{ $row->guest_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title">ความคิดเห็นจากผู้เยี่ยมชมเว็บไซต์</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p>{{$row->guest_detail}}</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                               
                        </td>       
                        <td>{{$row->guest_date}}</td>
                        
                          <?= Form::open(array('url' => 'Guest/' . $row->guest_id,
                        'method' => 'delete')) ?>
                        <td><button class="btn btn-danger btn-lg active btn-sm" type="submit">ลบ</button></td>
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