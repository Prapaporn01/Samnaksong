@extends('site.layoutuser')
@section('menutop')
<body>
            <div class="col-md-11 col-xs-11" >
                <ul class="breadcrumb" style="padding-top: 8px;margin-bottom: 0px;margin-left: 150px;margin-right: 25px;">
                  <li><a href="{{ url('/')}}">กลับสู่หน้าหลัก</a></li>
                  <li class="active">สถานที่ใกล้เคียง</li> 
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
  font:normal 40px/1.2em Georgia, "Times New Roman", Times, serif;
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
  font:normal 12px/1.2em Georgia, "Times New Roman", Times, serif;
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
  font:bold 12px Georgia, "Times New Roman", Times, serif;
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
  font:normal 12px Georgia, "Times New Roman", Times, serif;
  color:#646464;
  padding:10px 0;
  margin:0;
  line-height:1.6em;
}
.headert_text_resize .textarea p a {
  font:normal 12px Georgia, "Times New Roman", Times, serif;
  color:#646464;
  padding:10px 0;
  margin:0;
  line-height:1.6em;
}
.headert_text_resize .textarea p span {
  font:bold 14px Georgia, "Times New Roman", Times, serif;
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
  font:normal 14px Georgia, "Times New Roman", Times, serif;
  color:#636363;
  line-height:1.4em;
}
.headert_text_resize_text p span {
  float:right;
  padding:10px 0 0 0;
}
.body {
  margin:0 auto;
  padding:0 20px;
  width:930px;
  background:#f4f4f4;
  border-left:2px solid #d3d3d3;
  border-right:2px solid #d3d3d3;
}
.body h2 {
  font:normal 30px Georgia, "Times New Roman", Times, serif;
  color:#8e8d8c;
  padding:5px;
  margin:5px 0 10px 0;
}
.body p {
  font:normal 12px Georgia, "Times New Roman", Times, serif;
  color:#8e8d8c;
  padding:5px;
  margin:0;
  line-height:1.8em;
}
.body p span {
  font:bold 14px Georgia, "Times New Roman", Times, serif;
  color:#484440;
  padding:0;
  margin:0;
}
.body img {
  float:left;
  margin:5px;
  padding:0;
}
.body img.floated {
  float:right;
  margin:5px 10px 5px 0;
  padding:0;
}


.left_resize {
  width:652px;
  margin:0;
  padding:0 0 20px 0;
  float:left;
}
.right_resize {
  width:260px;
  margin:0;
  padding:0 0 20px 0;
  float:right;
}
.left {
  float:left;
  width:632px;
  margin:20px 0 0 0;
  padding:10px;
  border:1px solid #e0e0e0;
  background:#fafafa;
}
.right {
  float:right;
  width:230px;
  margin:20px 0 0 0;
  padding:10px;
  border:1px solid #e0e0e0;
  background:#fafafa;
}
.right ul {
  list-style:none;
  margin:5px 10px;
  padding:0;
}
.right li {
  background:url(images/ul_li.gif) 10px 10px no-repeat;
  font:normal 14px Arial, Helvetica, sans-serif;
  color:#464646;
  padding:5px 0;
  margin:3px 0;
}
.right li a {
  padding:0 0 0 25px;
  margin:0;
  font:normal 16px Georgia, "Times New Roman", Times, serif;
  color:#63adcb;
  text-decoration:none;
  background:none;
}
.right li a:hover {
  color:#484440;
  text-decoration:none;
}
.right ul.sponsors {
  list-style:none;
  margin:5px 10px;
  padding:0;
}
.right li.sponsors {
  background:none;
  font:normal 11px Georgia, "Times New Roman", Times, serif;
  color:#404a52;
  padding:5px 0;
}
.right li.sponsors a {
  padding:0 0 0 0px;
  margin:0;
  font:normal 16px Georgia, "Times New Roman", Times, serif;
  color:#63adcb;
  text-decoration:none;
  background:none;
}
.right li.sponsors strong {
  color:#63adcb;
}
.search {
  padding:13px 0 0 0;
  margin:0 auto;
}
.search form {
  float:right;
  padding:0;
  margin:0;
}
.search span {
  display:block;
  float:left;
  background:#fafafa;
  border:1px solid #d3d3d3;
  width:215px;
  padding:1px 5px;
  height:31px;
}
.search form .keywords {
  line-height:14px;
  height:14px;
  float:left;
  background:none;
  border:0;
  padding:6px 2px;
  margin:0;
  font:normal 12px Arial, Helvetica, sans-serif;
  color:#7f7e7d;
}
.search form .button {
  float:left;
  margin:0;
  padding:0;
}
.FBG {
  margin:0 auto;
  padding:0 20px;
  width:930px;
  background:#e8f6fb;
  border-left:2px solid #d3d3d3;
  border-right:2px solid #d3d3d3;
}
.FBG img {
  float:left;
  margin:5px 10px 5px 0;
  padding:0;
}
.FBG h2 {
  color:#8e8d8c;
  font:normal 30px Georgia, "Times New Roman", Times, seriff;
  padding:3px 0;
  margin:5px 0 15px 0;
}
.FBG p {
  color:#8e8d8c;
  font:normal 12px Georgia, "Times New Roman", Times, serif;
  padding:5px 0;
  margin:0;
  line-height:1.8em;
}
.FBG p span {
  color:#484440;
  font-weight:bold;
}
.FBG a {
  color:#484440;
  text-decoration:none;
  font:bold 12px Georgia, "Times New Roman", Times, serif;
  background:#e8f3f6;
  border:1px solid #f3fafd;
  padding:5px;
}
.FBG ul {
  list-style:none;
  width:150px;
  float:left;
  padding:0;
  margin:10px 5px;
}
.FBG li {
  padding:2px 1px 2px 10px;
  margin:0;
  background:url(images/fbg_ul_li.gif) left no-repeat;
}
.FBG li a {
  background:none;
  border:0;
  color:#63adcb;
  font:normal 12px Georgia, "Times New Roman", Times, serif;
  text-decoration:underline;
}
.FBG li a:hover {
  color:#484440;
  text-decoration:none;
}
.FBG .blok {
  width:270px;
  float:left;
  padding:15px 18px;
  margin:0;
}
.footer_resize {
  margin:0 auto;
  padding:20px 15px 0 15px;
  width:944px;
  height:38px;
  background:url(images/footer_bg.gif) top no-repeat;
  color:#fff;
  font:normal 12px Georgia, "Times New Roman", Times, serif;
}
.footer {
  padding:0;
  margin:0 auto;
}
.footer p {
  margin:0;
  padding:4px 0;
  line-height:normal;
  color:#fff;
}
.footer a {
  color:#fff;
  padding:inherit;
  text-decoration:underline;
}
.footer a:hover {
  text-decoration:none;
}
.footer .lf {
  float:left;
}
.footer .rf {
  float:right;
}
#contactform {
  margin:0;
  padding:5px 10px;
}
#contactform * {
  color:#F00;
}
#contactform ol {
  margin:0;
  padding:0;
  list-style:none;
}
#contactform li {
  margin:0;
  padding:0;
  background:none;
  border:none;
  display:block;
  clear:both;
}
#contactform li.buttons {
  margin:5px 0 5px 0;
}
#contactform label {
  margin:0;
  width:110px;
  display:block;
  padding:10px 0;
  color:#666;
  font:normal 12px Arial, Helvetica, sans-serif;
  text-transform:capitalize;
  float:left;
}
#contactform label span {
  color:#F00;
}
#contactform input.text {
  width:480px;
  border:1px solid #c0c0c0;
  margin:2px 0;
  padding:5px 2px;
  height:16px;
  background:#fff;
  float:left;
}
#contactform textarea {
  width:480px;
  border:1px solid #c0c0c0;
  margin:2px 0;
  padding:2px;
  background:#fff;
  float:left;
}
#contactform li.buttons input {
  border:1px solid #000;
  background:#ea7d1b;
  padding:10px;
  margin:10px 0 0 110px;
  color:#fff;
  float:left;
  font:normal 12px Arial, Helvetica, sans-serif;
}
p.response {
  text-align:center;
  color:#F00;
  font:normal 11px Georgia, "Times New Roman", Times, serif;
  line-height:1.8em;
  width:auto;
}

</style>
<body>
           

    <div class="col-md-12">
           
               

            <div class="main">
                <br>
                <br>
                <br>
                <center style="color:black; font-size:18px;"><b><fontTh>สถานที่ใกล้เคียง</fontTh></b></center>
                <br>

                  <div class="body">
                    <div class="left_resize">
                      @foreach ($place as $row)
	                      <div class="left">
	                        <div class="col-md-4">
	                          <div align="center"><img src="{{ 'images/resize/'.$row->place_pic }}" width="150" height="150"></div>
	                        </div>
	                        <div class="col-md-8">
	                        <p><span>{{$row->place_name}}</span><br>&nbsp;&nbsp;{{$row->place_description}}</p>
	                 		<p>Web site : <a href="{{$row->place_url}}">{{$row->place_url}}</a></p>
	                		<p>Facebook : <a href="{{$row->place_facebook}}">{{$row->place_facebook}}</a></p>
	                        </div>
	                      </div>
                      @endforeach

	                      


                <div class="row">
                    <div class="col-md-12">
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
