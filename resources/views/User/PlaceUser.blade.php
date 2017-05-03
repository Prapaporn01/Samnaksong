@extends('site.layoutforuser')
@section('menutop')
<html>
<head>
    <title>Place</title>
    <meta name="description" content="สำนักสงฆ์สิริมงคล หรือ วัดแม่เตี๊ยะใต้ อำเภอจอมทอง จังหวัดเชียงใหม่ เป็นสำนักสงฆ์ที่มีความสงบ ร่มรื่น ควรค่าแก่การอนุลักษณ์ให้พุธศาสนิกชนได้ศึกษา"/>
    <meta name="keywords" content="สำนักสงฆ์สิริมงคล,วัดแม่เตี๊ยะใต้,จอมทอง,เชียงใหม่,วัด,สถานที่,สถานีเกษตรหลวงดอยอินทนนท์,เทศบาลตำบลสบเตี๊ยะ,พระธาตุศรีจอมทอง,พระธาตุศรีจอมทองวรวิหาร,โรงพยาบาลจอมทอง,Samnaksong Siri Mongkon"/>
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
                      <li class="active"><a href="javascript:void(0);" style="font-size:18px;"><fontTh>สถานที่ใกล้เคียง</fontTh></li>
                </ul>       
            </div> 
</body>
@stop


@section('content')
<style type="text/css">
  @charset "utf-8";

html {
  padding:0;
  margin:0;
}
li.bg, .bg {
  clear:both;
  border-bottom:1px dashed #818181;
  padding:0;
  margin:10px 0;
  background:none;
  list-style:none;
}
p.clr, .clr {
  clear:both;
  padding:0;
  margin:0;
}
.main {
  margin:0 auto;
  padding:0;
}
.header_resize {
  margin:0 auto;
  padding:0;
  width:974px;
  background:url(images/header_bg.gif) repeat-x top;
}
.header {
  margin:0;
  padding:0;
}
.logo {
  width:400px;
  margin:0 auto;
  padding:0;
  float:left;
}
h1 {
  margin:0;
  padding:37px 0 38px 40px;
  color:#91d4f3;
  font:normal 40px/1.2em Georgia, "Trirong", Times, serif;
}
h1 a, h1 a:hover {
  color:#91d4f3;
  text-decoration:none;
}
h1 span {
  font-weight:bold;
  color:#63adcb;
}
h1 small {
  display:block;
  color:#9cd7f2;
  font:normal 12px/1.2em Georgia, "Trirong", Times, serif;
  text-transform:uppercase;
}
.menu {
  padding:0;
  margin:55px 20px 0 0;
  width:395px;
  float:right;
  background:#dcecf3;
  border:1px solid #fff;
}
.menu ul {
  padding:0;
  margin:0;
  list-style:none;
  border:0;
  float:left;
}
.menu ul li {
  float:left;
  margin:0;
  padding:0;
  border:0;
}
.menu ul li a {
  border-right:1px solid #c2deea;
  border-left:1px solid #f6fafc;
  float:left;
  margin:0;
  padding:5px 15px;
  color:#63adcb;
  font:bold 12px Georgia, "Trirong", Times, serif;
  text-decoration:none;
  text-transform:uppercase;
}
.menu ul li a:hover {
  color:#636363;
}
.menu ul li a.active {
  color:#636363;
}
.headert_text_resize {
  width:974px;
  padding:0;
  margin:0 auto;
  background:url(images/header_text_bg.jpg) top no-repeat;
  height:259px;
}
.headert_text_resize .textarea {
  width:400px;
  margin:0;
  padding:30px 40px 0 0;
  float:right;
}
.headert_text_resize .textarea p {
  font:normal 12px Georgia, "Trirong", Times, serif;
  color:#646464;
  padding:10px 0;
  margin:0;
  line-height:1.6em;
}
.headert_text_resize .textarea p a {
  font:normal 12px Georgia, "Trirong", Times, serif;
  color:#646464;
  padding:10px 0;
  margin:0;
  line-height:1.6em;
}
.headert_text_resize .textarea p span {
  font:bold 14px Georgia, "Trirong", Times, serif;
  color:#646464;
  line-height:1.6em;
}
.headert_text_resize_text {
  width:974px;
  padding:0;
  margin:0 auto;
  background:url(images/header_text_text_bg.gif) top no-repeat;
  height:54px;
}
.headert_text_resize_text p {
  padding:5px 20px 0 20px;
  margin:0;
  font:normal 14px Georgia, "Trirong", Times, serif;
  color:#636363;
  line-height:1.4em;
}
.headert_text_resize_text p span {
  float:right;
  padding:10% 0 0 0;
}
.body {
  margin:0 auto;
  padding:0 10%;
  width:150%;
  background:#f4f4f4;
  border-left:2px solid #d3d3d3;
  border-right:2px solid #d3d3d3;
}
.body h2 {
  font:normal 30px Georgia, "Trirong", Times, serif;
  color:#8e8d8c;
  padding:5px;
  margin:5px 0 10px 0;
}
.body p {
  font:normal 12px Georgia, "Trirong", Times, serif;
  color:#8e8d8c;
  padding:5px;
  margin:0;
  line-height:1.8em;
}
.body p span {
  font:bold 14px Georgia, "Trirong", Times, serif;
  color:#484440;
  padding:0;
  margin:0;
}



.left_resize {
  width:80%;
  margin:0;
  padding:0 0 20px 0;
  float:left;
}

.left {
  float:left;
  width: 80%;
  margin:20px 0 0 0;
  padding:10px;
  border:1px solid #e0e0e0;
  background:#fafafa;
}


</style>
<body>


    <div class="col-md-12"> 
              
            <div class="main"  >
                <br>
                <br>
                <br>
                <center style="color:#330033; font-size:22px;"><b><fontTh>สถานที่ใกล้เคียง</fontTh></b></center>
                <br>

                  <div class="body" >
                    <div class="left_resize"  >
                      @foreach ($place as $row)
	                      <div class="left">
	                        <div class="col-md-4 " >
	                          <div align="center"><img  src="{{ 'images/resize/'.$row->place_pic }}" ></div>
	                        </div>
	                        <div class="col-md-8 " >
	                        <p style=" color:black;font-size:16px;"><span style="color:#336699; font-size:18px;">{{$row->place_name}}</span><br>&nbsp;&nbsp;{{$row->place_description}}</p>
	                 		<p ><fontEng style="color:#339933;"><b>Web site : </b></fontEng><a href="{{$row->place_url}}">{{$row->place_url}}</a></p>
	                		<p><fontEng style="color:#339933;"><b>Facebook : </b></fontEng><a href="{{$row->place_facebook}}">{{$row->place_facebook}}</a></p>
	                        </div>
	                      </div>
                      @endforeach

	                      


                <div class="row" >
                    <div class="col-md-12 ">
                        <div align="center">
                             {{ $place->links() }}
                        </div>  
                    </div>
                </div>
            </div>
    </div>
</div>

</body>
</html>
@stop
