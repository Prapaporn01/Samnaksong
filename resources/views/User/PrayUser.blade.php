@extends('site.layoutuser')
@section('menutop')
<body>
            <div class="col-md-11 col-xs-11" >
                <ul class="breadcrumb" style="padding-top: 8px;margin-bottom: 0px;margin-left: 150px;margin-right: 25px;">
                    <li><a href="{{ url('/')}}">กลับสู่หน้าหลัก</a></li>
                <li><a href="{{ url('/PrayMainUser')}}">บทสวดมนต์</a></li>
                <li class="active">บทแผ่เมตตา</li>  
                </ul>
            </div>
            
</body>
@stop



@section('content')
<body>

        <div class="col-md-12 col-xs-12" >         
            <br>
            <br>
            <br>
            <br>
            <center><audio src="audio/horse.mp3" controls></audio></center>
            <br>
            <br>
            <center style="color:black; font-size:18px;"><b><fontTh>บทแผ่เมตตา</fontTh></b></center>
            <br>
            <br>

        <object data="{{ asset('pdf/TT.pdf') }}" type="application/pdf" width="700px" height="500px" style="margin-bottom:10px;"></object>
            


        </div>
</body>

</html>
@stop