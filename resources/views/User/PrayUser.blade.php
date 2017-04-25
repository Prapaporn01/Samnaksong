@extends('site.layoutforuser')
@section('menutop')
<style type="text/css">
    .breadcrumb {
    padding: 0px;
    background: #D4D4D4;
    list-style: none; 
    overflow: hidden;
    margin-top: 0px;
}
.breadcrumb>li+li:before {
    padding: 0;
}
.breadcrumb li { 
    float: left; 
}
.breadcrumb li.active a {
    background: brown;                   /* fallback color */
    background: #cc9966 ; 
}
.breadcrumb li.completed a {
    background: brown;                   /* fallback color */
    background: hsla(153, 57%, 51%, 1); 
}
.breadcrumb li.active a:after {
    border-left: 30px solid #cc9966 ;
}
.breadcrumb li.completed a:after {
    border-left: 30px solid hsla(153, 57%, 51%, 1);
} 

.breadcrumb li a {
    color: #080808;
    text-decoration: none; 
    padding: 10px 0 10px 45px;
    position: relative; 
    display: block;
    float: left;
}
.breadcrumb li a:after { 
    content: " "; 
    display: block; 
    width: 0; 
    height: 0;
    border-top: 50px solid transparent;           /* Go big on the size, and let overflow hide */
    border-bottom: 50px solid transparent;
    border-left: 30px solid hsla(0, 0%, 83%, 1);
    position: absolute;
    top: 50%;
    margin-top: -50px; 
    left: 100%;
    z-index: 2; 
}   
.breadcrumb li a:before { 
    content: " "; 
    display: block; 
    width: 0; 
    height: 0;
    border-top: 50px solid transparent;           /* Go big on the size, and let overflow hide */
    border-bottom: 50px solid transparent;
    border-left: 30px solid white;
    position: absolute;
    top: 50%;
    margin-top: -50px; 
    margin-left: 1px;
    left: 100%;
    z-index: 1; 
}   
.breadcrumb li:first-child a {
    padding-left: 15px;
}
.breadcrumb li a:hover { background: #cc9966  ; }
.breadcrumb li a:hover:after { border-left-color: #cc9966   !important; }
</style>
<body>
        @foreach($pray as $title)
            @if ($loop->first)
            <div class="container">
                  <ul class="breadcrumb">
                      <li><a href="{{ url('/')}}" style="font-size:18px;"><fontTh>กลับสู่หน้าหลัก</fontTh></a></li>
                      <li><a href="{{ url('/PrayMainUser')}}" style="font-size:18px;"><fontTh>บทสวดมนต์</fontTh></a></li>
                      <li class="active"><a href="javascript:void(0);" style="font-size:18px;"><fontTh>{{$title->pray_title}}</fontTh></a></li>
                  </ul>          
            </div>
            @endif
        @endforeach 
</body>
@stop



@section('content')
<body>

        <div class="col-md-12 col-xs-12" >         
            <br>
            <br>
            <br>
            <br>
             @foreach($pray as $row)
                @if ($loop->first)
            <center style="color:#330033; font-size:24px;"><b><fontTh>{{$row->pray_title}}</fontTh></b></center>
            <br>
            <br>
            <center><audio src="{{ asset('/audio/'.$row->pray_sound)}}" controls  style="    height: 20%;    width: 50%;"></audio></center>
            <br>
            <br>

        <object data="{{ asset('/pdf/'.$row->pray_detail)}}" type="application/pdf" width="100%" height="600"  style="margin-bottom:10%;">
            
        </object>
                @endif
            @endforeach


        </div>
</body>

</html>
@stop