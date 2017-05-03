@extends('site.layoutforuser')
@section('menutop')
<html>
<head>
    <title>Ebook</title>
    <meta name="description" content="สำนักสงฆ์สิริมงคล หรือ วัดแม่เตี๊ยะใต้ อำเภอจอมทอง จังหวัดเชียงใหม่ เป็นสำนักสงฆ์ที่มีความสงบ ร่มรื่น ควรค่าแก่การอนุลักษณ์ให้พุธศาสนิกชนได้ศึกษา"/>
    <meta name="keywords" content="สำนักสงฆ์สิริมงคล,แม่เตี๊ยะใต้,จอมทอง,เชียงใหม่,ebook,download,โหลด,อ่านebook,Samnaksong Siri Mongkon,วัด"/>
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
            <div class="container">
                  <ul class="breadcrumb">
                      <li><a href="{{ url('/')}}" style="font-size:18px;"><fontTh>กลับสู่หน้าหลัก</fontTh></a></li>
                      <li class="active"><a href="javascript:void(0);" style="font-size:18px;"><fontTh>Ebook</fontTh></a></li>
                  </ul>          
            </div>
@stop

<style type="text/css">
	object{
    width:100%;
    max-height:100%;
}

</style>

@section('content')
<div class="col-md-12">         
                <br>
                <br>
                <br>
                <center style="color:#330033; font-size:24px;"><b><fontTh>Ebook</fontTh></b></center>
                <br>
                <br> 
                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook05/ebook5.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/Sa-ngobJit_Sawangjai.pdf')}}" download>Download สงบจิต สว่างใจ</a></fontTh></div>
                </div>
                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook04/ebook4.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/WarngJai.pdf')}}" download>Download วางใจให้เป็น</a></fontTh></div>
                </div>
                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook03/ebook03.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/Welaluanoi.pdf')}}" download>Download เวลาเหลือน้อย</a></fontTh></div>
                    <br><br><br>
                </div>



                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook06/ebook6.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/sati-dham-mai-yark.pdf')}}" download>Download ฝึกสติ รู้ตัว ธรรมไม่ยาก</a></fontTh></div>
                </div>
                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook07/ebook7.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/ParJitKlubBarn.pdf')}}" download>Download พาจิตกลับบ้าน</a></fontTh></div>
                </div>
                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook08/ebook8.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/SarngPoom.pdf')}}" download>Download สร้างภูมิคุ้มใจ</a></fontTh></div>
                    <br><br><br>
                </div>


                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook12/ebook12.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/เปิดพรมเเดนโลกเเห่งธรรมOK.pdf')}}" download>Download เปิดพรมแดง โลกแห่งธรรม</a></fontTh></div>
                    <br><br><br>
                </div>
                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook13/ebook13.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/HOPE MAGAZINE  VOL 19.pdf')}}" download>Download ใครอารมณ์ดี ยกมือขึ้น</a></fontTh></div>
                    <br><br><br>
                </div>
                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook14/ebook14.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/Love myself รักในตัวตน.pdf')}}" download>Download Love myself รักในตัวตน</a></fontTh></div>
                    <br><br><br>
                </div>



                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook09/ebook9.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/รักในตัวตน.pdf')}}" download>Download เนรมิตรจิตใจ</a></fontTh></div>
                    <br><br><br>
                </div>
                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook10/ebook10.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/กระเทาะเปลือกความทุกข์ สุขให้ถึงเเก่น.pdf')}}" download>Download กระเทาะเปลือกความทุกข์ สุขให้ถึงเเก่น</a></fontTh></div>
                    <br><br><br>
                </div>
                <div class="col-md-4"> 
                    <iframe frameborder='0'  width='200' height='210'  title='Preview' src="{{url('ebook11/ebook11.html')}}" type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>
                    <div style="color:black; font-size:18px;font-weight:bold;color:#336699;" align="center"><fontTh><a href="{{asset('ebook/นักสร้างบารมีต้องไม่มีข้อเเม้.pdf')}}" download>Download นักสร้างบารมีต้องไม่มีข้อเเม้</a></fontTh></div>
                    <br><br><br>
                </div>
                

</div>	

@stop
