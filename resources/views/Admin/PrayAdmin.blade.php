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
        <form METHOD="LINK" ACTION="{{url('Pray/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลบทสวดมนต์">
        </form>
        <br>
        <br>
         <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="40%">ชื่อบทสวดมนต์</th>
                        <th width="25%">ไฟล์เสียง</th>
                        <th width="25%">ไฟล์บทสวดมนต์</th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                       @foreach ($Pray as $row)
                        <td>{{$row->pray_title}}</td>
                        <td>{{$row->pray_sound}}</td>
                        <td>{{$row->pray_detail}}</td>
                        <td><a href="{{ url('/Pray/'.$row->pray_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit">แก้ไขข้อมูล</button></a></td>
                        <td>
                        <?= Form::open(array('url' => 'Pray/' . $row->pray_id,
                        'method' => 'delete')) ?>
                        <button type="submit" class="btn btn-danger btn-lg active btn-sm">ลบ</button>
                        {!! Form::close() !!}
                        </td>     
                      </tr>
                       @endforeach                      
                    </tbody>
            </table>
        </div>

        <br>
            <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $Pray->links() }}
                        </div>  
                    </div>
                </div>
        </div>


</body>

</html>

@stop