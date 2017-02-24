<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville|Trirong' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/design.css') }}" type="text/css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link href="{{ asset('./css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('./css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />

    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{ asset('css/basic.css') }}" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

</head>
<style type="text/css">
    body{
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    background-image: url({{asset('images/bg1.jpg')}});
}
</style>



<body>

        <div class="container" style="padding-left: 0px;padding-right: 0px;">
          <!-- header -->
          <div>
              <div><img src="{{url('images/head.jpg')}}" ></div>
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
                          <li class="active"><h4 style="font-size:20px; line-height:1.5;"><fontTh>ระบบจัดการเว็บไซต์สำนักสงฆ์ศิริมงคล</fontTh></h4></li> 

                            
                          <li class="active"><h4 style="border-left-width: 30px;padding-left: 540px;"></h4></li> 
              
                          <li>
                              <a href="{{ url ('/') }}">
                                  <div class="fontsize16"><fontTh>ไปยังเว็บไซต์</fontTh></div>
                              </a>
                          </li>

                          <li>
                                  <div class="fontsize16"><fontTh><img src="{{url('images/iconad.png')}}" style="    margin-top: 10px;"><i> &nbsp;Admin  <a href="{{ url ('Loginadmin') }}"> &nbsp;&nbsp;ออกจากระบบ</i></a></fontTh></div>
                              
                          </li>
          
                      </ul>
                  </div>
              </nav>                    
  </div>
 


    <div class="container main" style ="padding-left: 0px;"> 
        <div class="col-md-3 col-xs-2" style="padding-left: 0px;">

            
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu" >

                            <li>
                                <a style="font-size: 20px; font-weight: bold;">การจัดการระบบ</a>
                            </li>


                            <li>
                                <a href="#"><i class="fa fa-desktop "></i>จัดการข้อมูลเกี่ยวกับสำนักสงฆ์ศิริมงคล<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="HistoryAdmin.php" style="padding-left: 10px;">จัดการประวัติของสำนักสงฆ์</a>
                                    </li>
                                    <li>
                                        <a href="{{ url ('/Persons') }}" style="padding-left: 10px;">จัดการข้อมูลบุคคลสำคัญที่เกี่ยวข้อง</a>
                                    </li>
                                    <li>
                                        <a href="{{ url ('/Directory') }}" style="padding-left: 10px;">จัดการข้อมูลทำเนียบเจ้าอาวาส</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ url ('/News') }}"><i class="fa fa-desktop "></i>จัดการข้อมูลข่าวประชาสัมพันธ์</a>
                            </li>

                            <li>
                                <a href="{{ url ('/Activity') }}"><i class="fa fa-desktop "></i>จัดการข้อมูลรูปภาพกิจกรรม</a>
                            </li>

                            <li>
                                <a href="GalleryAdmin.php"><i class="fa fa-desktop "></i>จัดการข้อมูลแกลอรี่</a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-desktop "></i>จัดการข้อมูลสิ่งมงคล<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url ('/Kingpin') }}" style="padding-left: 10px;">จัดการข้อมูลสิ่งสำคัญภายในสำนักสงฆ์ศิริมงคล</a>
                                    </li>
                                    <li>
                                        <a href="{{ url ('/Worship') }}" style="padding-left: 10px;">จัดการข้อมูลเครื่องสักการะบูชา</a>
                                    </li>
                                    <li>
                                        <a href="{{ url ('/Sacred') }}" style="padding-left: 10px;">จัดการข้อมูลวัตถุมงคล</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-desktop "></i>จัดการข้อมูลสื่อธรรมะ<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">

                                    <li>
                                        <a href="{{ url ('/Pray') }}" style="padding-left: 10px;">จัดการข้อมูลบทสวดมนต์และเสียงสวดมนต์</a>
                                    </li>
                                    <li>
                                        <a href="{{ url ('/Ebook') }}" style="padding-left: 10px;">จัดการข้อมูล e-book</a>
                                    </li>


                                </ul>
                            </li>
                            <li>
                                <a href="{{ url ('/Guest') }}"><i class="fa fa-desktop "></i>จัดการข้อมูลสมุดเยี่ยมชมเว็บไซต์</a>
                            </li>
                            <li>
                                <a href="{{ url ('/Place') }}"><i class="fa fa-desktop "></i>จัดการข้อมูลสถานที่ใกล้เคียง</a>
                            </li>

                        </ul>

                    </div>

        </div>

   


            <section id="main">
                @yield('content')        
            </section>

        </div>




    <div class="container footer">
        <br>
        <br>
        
    <center style="color:white; font-size:18px;"><fontTh>สำนักสงฆ์ศิริมงคล </fontTh><fontEng>Samnaksong Siri Mongkon</fontEng></center><br></center>
            <br>
                <center style="color:white; font-size:14px;"><fontTh>สำนักสงฆ์ศิริมงคล ต.สบเตี๊ยะ อ.จอมทอง จ.เชียงใหม่ </fontTh></center>
  
                <center style="color:white; font-size:12px;"><fontEng>facebook :  </fontEng></center>

                <center style="color:white; font-size:12px;"><fontTh>ผู้จัดทำเว็บไซต์ นางสาว ประภาภรณ์ ทิพย์รักษ์ คณะวิทยาศาสตร์สาขาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยเชียงใหม่ </fontTh></center>
            <br>
    </div>


    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('js/custom.js') }}"></script>




   

</body>

</html>