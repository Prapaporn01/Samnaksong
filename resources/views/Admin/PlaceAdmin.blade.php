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
        <form METHOD="LINK" ACTION="{{url('/Place/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลสถานที่ใกล้เคียง">
        </form>
        <br>
        <br>
           
        <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="20%">ชื่อสถานที่ใกล้เคียง</th>
                        <th width="2%">URL</th>
                        <th width="2%">Facebook</th>
                        <th width="2%">คำอธิบาย</th>
                        <th width="10%">รูปภาพ</th>    
                        <th width="2%"></th>
                        <th width="2%"></th>                                         
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($Place as $row)
                      <tr>
                        <td>{{$row->place_name}}</td>
                        <td> <a class="btn btn-default" href="{{$row->place_url}}" role="button"><i class="fa fa-link" aria-hidden="true"></i></a> </td>
                        <td><a class="btn btn-default" href="{{$row->place_facebook}}" role="button"><i class="fa fa-facebook" aria-hidden="true"></i></a></td>
                        <td>

                                  <!-- Trigger the modal with a button -->
                                  <button href="#deleteModal_{{$row->place_id }}" type="button" class="btn btn-default btn-sm" data-toggle="modal" >ดูรายละอียด</button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="deleteModal_{{ $row->place_id  }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">                                         
                                          <h4 class="modal-title">คำอธิบาย</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p>{{$row->place_description}}</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                               
                        </td>                        
                        <td>                            
                            <img src="{{ 'images/resize/'.$row->place_pic }}">
                        </td>


                        <td><a href="{{ url('/Place/'.$row->place_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit">แก้ไขข้อมูล</button></a></td>
                        <td>
                        <?= Form::open(array('url' => 'Place/' . $row->place_id,
                        'method' => 'delete')) ?>
                        <button type="submit" class="btn btn-danger btn-lg active btn-sm">ลบ</button>
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
                            {{ $Place->links() }}
                        </div>  
                    </div>
                </div>
        </div>
    </div>
   

</body>

@stop