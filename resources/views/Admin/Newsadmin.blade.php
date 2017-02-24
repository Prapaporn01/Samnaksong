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
        <form METHOD="LINK" ACTION="{{url('/News/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลข่าวประชาสัมพันธ์">
        </form>


            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="10%">รูปปก</th>
                        <th width="40%">หัวข้อข่าว</th>
                        <th width="15%">คำอธิบายข่าว</th>
                        <!--<th width="20%">รายละเอียดข่าว</th>-->
                        <th width="25%">วันที่อัพเดทข่าว</th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($News as $row)
                      <tr>
                        <td><img src="{{ 'images/resize/'.$row->newsmain_pic }}"></td>
                        <td>{{$row->news_title}}</td>
                        <td>
                         <!-- Trigger the modal with a button -->
                                  <button href="#deleteModal_{{$row->news_id }}" type="button" class="btn btn-default btn-sm" data-toggle="modal" >ดูรายละอียด</button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="deleteModal_{{ $row->news_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title">คำอธิบาย</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p>{{$row->news_description}}</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </td>

                        <!--<td>
                             
                                  <button href="#deleteModal_{{$row->news_id }}" type="button" class="btn btn-default btn-sm" data-toggle="modal" >ดูรายละอียด</button>

                                  
                                  <div class="modal fade" id="deleteModal_{{ $row->news_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title">รายละเอียดข่าว</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p>{{$row->news_detail}}</p>

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </td> -->
                        <td>{{$row->news_datetime}}</td> 
                        <td><a href="{{ url('/Newspicadmin/'.$row->news_id)}}"><div style='   margin-right:5px; float:right; '><input type="submit" class="btn btn-success btn-sm"  value="จัดการลบรูปภาพในอัลบัม"></div></a></td>
                                  
                        <td><a href="{{ url('/News/'.$row->news_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit">แก้ไขข้อมูล</button></a></td>
                        <td>
                        <td>
                        <?= Form::open(array('url' => 'News/' . $row->news_id,
                        'method' => 'delete')) ?>
                        <button class="btn btn-danger btn-lg active btn-sm" type="submit">ลบอัลบัม</button>
                        {!! Form::close() !!}</td>
                        
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
                           {{ $News->links() }}
                        </div>  
                    </div>
                </div>
        </div>


</body>

</html>
@stop