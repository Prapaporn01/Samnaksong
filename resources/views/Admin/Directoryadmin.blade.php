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
        <form METHOD="LINK" ACTION="{{url('/Directory/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลทำเนียบเจ้าอาวาส">
        </form>
        
        <br>

            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="25%">ชื่อ</th>
                        <th width="20%">ฉายาทางธรรม</th>
                        <th width="20%">ช่วงเวลา</th>
                        <th width="20%">ตำแหน่ง</th>
                        <th width="20%">รายละเอียด</th>
                        <th width="5%"></th>
                        <th width="5%"></th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($Directory as $row)
                      <tr>
                        <td>{{$row->directory_name}}</td>
                        <td>{{$row->directory_name_fair}}</td>
                        <td>{{$row->directory_time}}</td>
                        <td>{{$row->directory_position}}</td>
                        <td><button class="btn btn-primary btn-lg active btn-sm" type="submit">แก้ไขข้อมูล</button></td>
                        <td>
                        <?= Form::open(array('url' => 'Directory/' . $row->directory_id,
                        'method' => 'delete')) ?>
                        <button class="btn btn-danger btn-lg active btn-sm" type="submit">ลบ</button>
                        {!! Form::close() !!}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
            </table>


            <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $Directory->links() }}
                        </div>  
                    </div>
                </div>
        </div>

</body>

</html>
@stop