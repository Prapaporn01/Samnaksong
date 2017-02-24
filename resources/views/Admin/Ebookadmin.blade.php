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
        <form METHOD="LINK" ACTION="{{url('/Ebook/create')}}">
            <input type="submit" class="btn btn-info btn-lg" style='float:right' value="เพิ่มข้อมูลEbook">
        </form>
        <br>
        <br>
         <div class="table-responsive">
            <table class="table table-striped">
                    <thead >
                      <tr>
                        <th width="40%">ชื่อเรื่อง</th>
                        <th width="30%">ชื่อไฟล์</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($Ebook as $row)
                      <tr>
                        <td>{{$row->ebook_name}}</td>
                        <td>{{$row->ebook_file}}</td>
                        <td><a href="{{ url('/Ebook/'.$row->ebook_id.'/edit')}}"><button class="btn btn-primary btn-lg active btn-sm" type="submit">แก้ไขข้อมูล</button></a></td>
                        <?= Form::open(array('url' => 'Ebook/' . $row->ebook_id,
                        'method' => 'delete')) ?>
                        <td><button class="btn btn-danger btn-lg active btn-sm" type="submit">ลบ</button> </td>
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
                             {{ $Ebook->links() }}
                        </div>  
                    </div>
                </div>
        </div>

    </div>

</body>

</html>
@stop