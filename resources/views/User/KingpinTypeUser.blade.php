@extends('site.layoutforuser')
@section('menutop')
<html>
<head>
    <title>KingpinTypeUser</title>
    <meta name="description" content="สำนักสงฆ์สิริมงคล หรือ วัดแม่เตี๊ยะใต้ อำเภอจอมทอง จังหวัดเชียงใหม่ เป็นสำนักสงฆ์ที่มีความสงบ ร่มรื่น ควรค่าแก่การอนุลักษณ์ให้พุธศาสนิกชนได้ศึกษา"/>
    <meta name="keywords" content="สำนักสงฆ์สิริมงคล,แม่เตี๊ยะใต้,จอมทอง,เชียงใหม่,สิ่งสำคัญ,ประเภท,วัด,พระพุทธรูป,รูปปั้น,Samnaksong Siri Mongkon"/>
</head>
</html>
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
            <div class="container">
                  <ul class="breadcrumb">
                      <li><a href="{{ url('/')}}" style="font-size:18px;"><fontTh>กลับสู่หน้าหลัก</fontTh></a></li>
                      <li class="active"><a href="javascript:void(0);" style="font-size:18px;"><fontTh>ประเภทของสิ่งสำคัญภายในสำนักสงฆ์</fontTh></a></li>
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
                    <center style="color:#330033; font-size:24px;"><b><fontTh>ประเภทของสิ่งสำคัญภายในสำนักสงฆ์</fontTh></b></center>
                    <br>
                    <br>
                    <br>

                @foreach ($kingpintype as $row)
               
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a class="grid__link" href="{{ url('/KingpinTypeUser/'.$row->kingpintype_id) }}">
                        
                            <img class="grid__img" src="{{'images/resize/'.$row->kingpin_file_pic }}" alt="Some image" />
                            <div class="grid__item-title" style="font-size:18px;color:#337ab7;"><fontTh>{{$row->kingpintype_name}}</fontTh></div>
                        </a>
                    </div>
                </div>

                @endforeach

				 
                <br>
                <br>
            </div>             
    </div>


</body>
@stop