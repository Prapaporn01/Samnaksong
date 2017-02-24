@extends('site.layoutuser')
@section('menutop')
<body>
            <div class="col-md-11 col-xs-11" >
                <ul class="breadcrumb" style="padding-top: 8px;margin-bottom: 0px;margin-left: 150px;margin-right: 25px;">
                   <li><a href="{{ url('/')}}">กลับสู่หน้าหลัก</a></li>
                <li class="active">บุคคลสำคัญที่เกี่ยวข้อง</li>
                </ul>
            </div>
            
</body>
@stop


@section('content')
<style>
div.imgpersons {
    margin: 15px;
    border: 1px solid  #8a6d3b;
    float: left;
    width: 200px;
    background-color:  #ebd382;
}

div.imgpersons:hover {
    border: 1px solid #777;
}

div.imgpersons img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 0px;
    text-align: center;
}
</style>




<body>

            <div class="col-md-12">
                <br>
                <br>
                <br>
                <center style="color:black; font-size:18px;"><b><fontTh>บุคคลสำคัญที่เกี่ยวข้อง</fontTh></b></center>

                <br>
                <br>


                 @foreach ($related_persons as $row)
                <div class="col-md-4">
                    <div class="imgpersons">
                        <img src="{{ 'images/resize/'.$row->person_file_pic }}" alt="Trolltunga Norway" width="300" height="200">
                        <div class="desc" style="color:black;"><b>{{$row->person_name}}</b></div>
                        <div class="desc" style="color:black;">{{$row->person_detail}}</div>
                    </div>
                </div>
                @endforeach

               
                

                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $related_persons->links() }}
                        </div>  
                    </div>
                </div>
                <br>
                <br>
            </div>
    </div>

</body>
</html>
@stop