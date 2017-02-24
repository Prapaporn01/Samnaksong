@extends('site.layoutuser')
@section('menutop')
<body>
            <div class="col-md-11 col-xs-11" >
                <ul class="breadcrumb" style="padding-top: 8px;margin-bottom: 0px;margin-left: 150px;margin-right: 25px;">
                    <li><a href="{{ url('/')}}">กลับสู่หน้าหลัก</a></li>
                    <li class="active">สิ่งสำคัญภายในสำนักสงฆ์</li>
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
                    <center style="color:black; font-size:18px;"><b><fontTh>สิ่งสำคัญภายในสำนักสงฆ์</fontTh></b></center>
                    <br>
                    <br>
                    <br>


                @foreach ($kingpin_state as $row)
                <div class="col-md-4">
                    <div class="thumbnail">
                            <a class="grid__link" htarget="_blank" href="{{ url('/KingpinUser')}}">
                            <img class="grid__img" src="{{'images/resize/'.$row->kingpinmain_pic}}" />
                            <div class="grid__item-title" style="font-size:14px;">{{$row->kingpin_name}}</div>
                            </a>                               
                    </div>
                </div>
                @endforeach
               
				<div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $kingpin_state->links() }}
                        </div>  
                    </div>
                </div>
                <br>
                <br>



            </div>
 
</body>
</html>
@stop