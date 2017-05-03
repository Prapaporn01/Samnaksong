
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/design.css') }}" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville|Trirong' rel='stylesheet' type='text/css'>


    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/basic.css') }}" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<style type="text/css">
    body{
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    background-repeat: repeat; 

    background-image: url({{asset('images/bg1.jpg')}});
}

img.head{
  width: 100%;
  height: auto;
}

.container {
  padding: 0;
  background-color: #fffecb;
  width:85%;
}


.container main {
    padding: 20px 0;
    
}
.footer{
  background-color: #9a6600;
}

.nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
  /*position: fixed;*/
  /*top: 0px;*/
  width: 300px;
  height: 50px;
  color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
    height: 100%;
    padding-top: 50px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
  .nav-side-menu {
    height: 1100px;
  }
}
body {
  margin: 0px;
  padding: 0px;
}


div.font18{
  font-size:18px;
}
div.font16{
  font-size:16px;
}
</style>



<body >

        <div class="container" style="padding-left: 0px;padding-right: 0px;">
          <!-- header -->
            <div>
              <div><img class="head" src="{{asset('images/head01.jpg')}}" ></div>
            </div>


            <script type="text/javascript">
                $(document).ready(function() {
               $(".nav li.disabled a").click(function() {
                 return false;
               });
            });
            </script> 

              <!-- navbar -->
              <nav class="navbar navbar-custom" style="border-bottom-width: 0px;margin-bottom: 0px;">
                  <div class="container-fluid" >
                      <ul class="nav navbar-nav" style ="padding-right: 0px;">
                          <li class="active"><h4 style="font-size:25px; line-height:1.5;"><fontTh>ระบบจัดการเว็บไซต์สำนักสงฆ์สิริมงคล</fontTh></h4></li> 

                            
                          <li class="active"><h4 style="border-left-width: 30px;padding-left: 400px;"></h4></li> 
              
                          <li>
                              <a href="{{ url ('/') }}">
                                  <div class="fontsize16"><fontTh>ไปยังเว็บไซต์</fontTh></div>
                              </a>
                          </li>

                          <li>
                                <div class="fontsize16"><fontTh><img src="{{url('images/iconad.png')}}" style="    margin-top: 10px;"> &nbsp;Admin<a href="{{ url ('logout') }}" style="color:yellow;"><i>&nbsp;&nbsp;ออกจากระบบ</i></a></fontTh></div>                            
                          </li>
          
                      </ul>
                  </div>
              </nav>                    
        </div>
 


    <div class="container" style ="padding-left: 0px;">
        <div class="col-md-3" style="padding-left: 0px;">
            <div class="nav-side-menu">
                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
              
                <div class="menu-list"> 
                        <div style="font-size:22px; height:50px; margin-top:10px;margin-left:10px;"><fontTh>จัดการระบบ</fontTh></div>                    
                        <ul id="menu-content" class="menu-content collapse out">
                            
                            <li>
                              <a href="{{ url ('/Persons') }}"><div class="font18" style="height:40px;margin-top:5px;">
                              <i class="fa fa-laptop"></i><fontTh>จัดการข้อมูลบุคคลสำคัญที่เกี่ยวข้อง</fontTh></div>
                              </a>
                            </li>

                            <li>
                              <a href="{{ url ('/News') }}"><div class="font18" style="height:40px;margin-top:5px;">
                              <i class="fa fa-laptop"></i><fontTh>จัดการข้อมูลข่าวประชาสัมพันธ์</fontTh></div>
                              </a>
                            </li>

                            <li>
                              <a href="{{ url ('/Activity') }}" ><div class="font18" style="height:40px;margin-top:5px;">
                              <i class="fa fa-laptop"></i><fontTh>จัดการข้อมูลกิจกรรม</fontTh></div>
                              </a>
                            </li>

                            <li>
                              <a href="{{ url ('/Gallery') }}"><div class="font18" style="height:40px;margin-top:5px;">
                              <i class="fa fa-laptop"></i><fontTh>จัดการข้อมูลแกลอรี่</fontTh></div>
                              </a>
                            </li>

                            <li  data-toggle="collapse" data-target="#two" class="collapsed active">
                              <a href="#" ><div class="font18" style="height:40px;margin-top:5px;"><i class="fa fa-laptop"></i><fontTh>จัดการข้อมูลสิ่งมงคล</fontTh><span class="arrow"></span></div></a>
                            </li>
                                <ul class="sub-menu collapse" id="two">
                                    <div class="font16"><li><a href="{{ url ('/Kingpin') }}" ><fontTh>จัดการข้อมูลสิ่งสำคัญภายในสำนักสงฆ์</fontTh></a></li></div>
                                    <div class="font16"><li><a href="{{ url ('/Worship') }}" ><fontTh>จัดการข้อมูลเครื่องสักการะบูชา</fontTh></a></li></div>
                                    <div class="font16"><li><a href="{{ url ('/Sacred') }}" ><fontTh>จัดการข้อมูลวัตถุมงคล</fontTh></a></li></div>
                                </ul>
                            <li>
                              <a href="{{ url ('/Pray') }}"><div class="font18" style="height:70px;margin-top:5px;">
                              <i class="fa fa-laptop"></i><fontTh>จัดการข้อมูลบทสวดมนต์และ<br>เสียงสวดมนต์</fontTh></div>
                              </a>
                            </li>

                            <li>
                              <a href="{{ url ('/Guest') }}"><div class="font18" style="height:40px;margin-top:5px;">
                              <i class="fa fa-laptop"></i><fontTh>จัดการข้อมูลสมุดเยี่ยมชมเว็บไซต์</fontTh></div>
                              </a>
                            </li>
                            
                            <li>
                              <a href="{{ url ('/Place') }}"><div class="font18" style="height:40px;margin-top:5px;">
                              <i class="fa fa-laptop"></i><fontTh>จัดการข้อมูลสถานที่ใกล้เคียง</fontTh></div>
                              </a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    
            @yield('content')
 
    </div>



    <div class="container footer">
        <br>
        <br>   
            <center style="color:white; font-size:20px;"><fontTh>สำนักสงฆ์ศิริมงคล </fontTh><fontEng>Samnaksong Siri Mongkon</fontEng></center><br></center>

            <center style="color:white; font-size:16px;"><fontTh>ตั้งอยู่  ณ  บ้านแม่เตี๊ยะใต้  หมู่ที่  ๑๔  ต.สบเตี๊ยะ  อ.จอมทอง  จังหวัดเชียงใหม่</fontTh></center>
   
            <center style="color:white; font-size:16px;"><fontTh>ผู้จัดทำเว็บไซต์ นางสาว ประภาภรณ์ ทิพย์รักษ์ คณะวิทยาศาสตร์สาขาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยเชียงใหม่ </fontTh></center>
        <br>
    </div>




<!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
       <!--  <script src="{{asset('js/bootstrap1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/AdminLTE/app.js')}}" type="text/javascript"></script>  -->

</body>

</html>