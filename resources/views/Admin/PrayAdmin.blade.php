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
        <form METHOD="LINK" ACTION="{{url('Pray/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลบทสวดมนต์และเสียงสวดมนต์">
        </form>
        <br>
        <br>
         <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="40%"><h4><b>ชื่อบทสวดมนต์</b></h4></th>
                        <th width="25%"><h4><b>ไฟล์เสียง</b></h4></th>
                        <th width="25%"><h4><b>ไฟล์บทสวดมนต์</b></h4></th>
                        <th width="2%"></th>
                        <th width="2%"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                       @foreach ($Pray as $row)
                        <td><h4 >{{$row->pray_title}}</h4></td>
                        <td><h4 >{{$row->pray_sound}}</h4></td>
                        <td><h4 >{{$row->pray_detail}}</h4></td>
                        <td><a href="{{ url('/Pray/'.$row->pray_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit"><b class="font1">แก้ไขข้อมูล</button></a></td>
                        <td>



                        <?= Form::open(array('url' => 'Pray/' . $row->pray_id,
                        'method' => 'delete')) ?> 
                        <td>
                        <button href="#delete{{$row->pray_id }}" type="submit" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('ต้องการลบข้อมูลบทสวดมนต์และเสียงสวดมนต์?')" ><b class="font1">ลบ</b></button>
                        </td>
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