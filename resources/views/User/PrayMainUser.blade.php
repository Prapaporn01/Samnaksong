@extends('site.layoutuser')
@section('menutop')
<body>
            <div class="col-md-11 col-xs-11" >
                <ul class="breadcrumb" style="padding-top: 8px;margin-bottom: 0px;margin-left: 150px;margin-right: 25px;">
                    <li><a href="{{ url('/')}}">กลับสู่หน้าหลัก</a></li>
                    <li class="active">บทสวดมนต์</li>  
                </ul>
            </div>
            
</body>
@stop


@section('content')
<body>
        <div class="col-md-12">         
            <br>
            <br>
            <br>
            

            <div class="col-md-2"></div>



            
                <div class="list-group">                   
                    <a class="list-group-item active" style="color:white; font-size:18px;"><b>บทสวดมนต์</b></a>
                @foreach ($pray as $row)       
                    <a href="{{ url('PrayUser')}}" class="list-group-item">{{$row->pray_title}}</a>
                @endforeach       
                   
                </div> 
           


            <br>
            <br>
                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $pray->links() }}
                        </div>  
                    </div>
                </div>
                <br>
                <br>
        </div>


</body>

</html>
@stop