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

        <form METHOD="LINK" ACTION="{{url('/Persons/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลบุคคลสำคัญที่เกี่ยวข้อง">
        </form>
        <br>


            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="30%">ชื่อ</th>
                        <th width="15%">รูป</th>
                        <th width="30%">รายละเอียด</th>
                        <th width="10%"></th>
                        <th width="10%"></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($related_persons as $row)
                      <tr>
                        <td>{{$row->person_name}}</td>
                        <td>                            
                            <img src="{{ 'images/resize/'.$row->person_file_pic }}">
                        </td>
                        <td>{{$row->person_detail}}</td>
                       
                        <td><a href="{{ url('/Persons/'.$row->person_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit">แก้ไขข้อมูล</button></a></td>
                        <td><?= Form::open(array('url' => 'Persons/' . $row->person_id,
                        'method' => 'delete')) ?>
                        <button class="btn btn-danger btn-lg active btn-sm" type="submit">ลบ</button>
                        {!! Form::close() !!}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
            </table>


            <br>
            <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                            {{ $related_persons->links() }}
                        </div>  
                    </div>
            </div>
        </div>


</body>

</html>
@stop