@extends('site.layoutforuser')
@section('menutop')
<html>
<head>
    <title>Developer</title>
    <meta name="description" content="สำนักสงฆ์สิริมงคล หรือ วัดแม่เตี๊ยะใต้ อำเภอจอมทอง จังหวัดเชียงใหม่ เป็นสำนักสงฆ์ที่มีความสงบ ร่มรื่น ควรค่าแก่การอนุลักษณ์ให้พุธศาสนิกชนได้ศึกษา"/>
    <meta name="keywords" content="สำนักสงฆ์สิริมงคล,แม่เตี๊ยะใต้,จอมทอง,เชียงใหม่,ภาควิชาวิทยาการคอมพิวเตอร์,มหาวิทยาลัยเชียงใหม่,คณะวิทยาศาสตร์,ผู้พัฒนาเว็บไซต์,Samnaksong Siri Mongkon,วัด"/>
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
    margin-top: 0px; 
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
                      <li class="active"><a href="javascript:void(0);" style="font-size:18px;"><fontTh>ผู้พัฒนาเว็บไซต์</fontTh></a></li>
                  </ul>          
            </div>
@stop

<style type="text/css">

hr.style18:before { 
  display: block; 
  content: ""; 
  height: 30px; 
  margin-top: -31px; 
  border-style: solid; 
  border-color: #8c8b8b; 
  border-width: 0 0 1px 0; 
  border-radius: 20px; 
}
hr.style2 {
    border-top: 7px double #cc99ff;
}

.body p span {
  font:bold 14px Georgia, "Trirong", Times, serif;
  color:#484440;
  padding:0;
  margin:0;
}

.left_resize {
  width:100%;
  margin:0;
  padding:0 0 20px 0;
  float:left;
}

.left1 {
  float:left;
  width:632px;
  margin:0px 0 0 0;
  padding:10px;
  border:1px solid #e0e0e0;
  background:#fafafa;
}
</style>

@section('content')
<div class="col-md-12">         
                <br>
                <br>
                <br>
                <center style="color:#330033; font-size:24px;"><b><fontTh>ผู้พัฒนาเว็บไซต์</fontTh></b></center>
                <hr class="style2">
                            <div align="center" style="background-color:#ffff99;padding-top:15px;"><img class="img-responsive" src="{{asset('images/CMU.png') }}" width="100" height="100"></div>
                            <div align="center" style="color:black;font-size:18px;background-color:#ffff99;">ภาควิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยเชียงใหม่</div>

                      <div class="col-md-12" style="background-color:#ffff99;padding-top:25px;">
                         <div class="col-md-2" style="color:#009966;font-size:18px;"><b><fontTh>ติดต่อ :</fontTh></b></div>
                         <div class="col-md-10" style="color:black;font-size:18px;"> ภาควิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยเชียงใหม่<br>239 ถ. ห้วยแก้ว ต.สุเทพ อ. เมือง จ. เชียงใหม่ 50200 </div>
                      </div>
                            
                      <div class="col-md-12" style="background-color:#ffff99;">
                          <div class="col-md-2" style="color:#009966;font-size:18px;"><b><fontTh>โทรศัพท์ :</fontTh></b></div>
                          <div class="col-md-10" style="color:black;font-size:18px;">0-5394-3414-16</div>
                      </div>
                      <div class="col-md-12" style="background-color:#ffff99;">
                          <div class="col-md-2" style="color:#009966;font-size:18px;"><b><fontTh>โทรสาร :</fontTh></b></div>
                          <div class="col-md-10" style="color:black;font-size:18px;">0-5389-2281</div>
                      </div>
                      <div class="col-md-12" style="background-color:#ffff99;">
                          <div class="col-md-2" style="color:#009966;font-size:18px;"><b><fontTh>E-mail :</fontTh></b></div>
                          <div class="col-md-10" style="color:black;font-size:18px; padding-bottom:10px;"><fontTh>compsci@cmu.ac.th</fontTh></div> 
                      </div>

                            
               
                <div class="col-md-12 col-xs-12">
                <div class="col-md-6 col-xs-12">
                       <div class="body" style="    margin-right: 0px;    padding-left: 0px;padding-top: 20px;" >
                            <div class="left_resize" style="    height: 50%;">        
                              <div class="left1" style="border-left-width: 1px;margin-top: 5px;margin-right: 0px;width: 100%;">
                                
                                    <div align="center"><img class="img-responsive" src="{{asset('images/one1.png') }}" width="150" height="150" style="    margin-left: 0px;"></div>
                                  <br>
                                      <div align="center"><p><span style="    padding-left: 20px;    margin-left: 0px; font-size:18px;color:#336699; ">ผู้พัฒนาเว็บไซต์</span><br><div style="color:black;font-size:18px;"><fontTh>นางสาว ประภาภรณ์ ทิพย์รักษ์</fontTh></div></p></div>   
                              </div>                         
                            </div> 
                        </div> 
                </div>

                <div class="col-md-6 col-xs-12">
                        <div class="body" style="    margin-right: 0px;    padding-left: 0px;padding-top: 20px;">
                            <div class="left_resize" style="    height: 60%;">        
                              <div class="left1" style="border-left-width: 1px;margin-top: 5px;margin-right: 0px;width: 100%;">
                                
                                    <div align="center"><img class="img-responsive" src="{{asset('images/maytinee1.png') }}" width="150" height="150" style="    margin-left: 0px;"></div>

                                      <div align="center"><p><span style="    padding-left: 20px;    margin-left: 0px; font-size:18px;color:#336699;"><br>อาจารย์ที่ปรึกษา</span><br><div style="color:black;font-size:18px;margin-bottom: 10px;"><fontTh>อ.ดร. เมทินี เขียวกันยะ</fontTh></div></p></div>   
                              </div>                         
                            </div> 
                        </div> <br>
                </div><br>  
                </div>

               
</div>
		

@stop
