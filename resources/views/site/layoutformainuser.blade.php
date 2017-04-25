<!DOCTYPE html>
<html lang="en">

<head>
    <title>User</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville|Trirong' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/design.css')}}" type="text/css" />
</head>
<style type="text/css">
    
body {
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    background-image: url({{ asset('images/bg1.jpg')}});
    }

    img.head{
    width:100%;
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


    a {
      text-decoration: none;
      color: #428bca;
      outline: none;
    }

    .container main {
    padding: 20px 0;
    
    }
    .footer{
      background-color: #9a6600;
    }
    img.full{
      width: 100%;
      height: auto;
    }


.navbar-default{
  background-color:#9a6600;
}
</style>

<body>
<div class="container" style="padding-left: 0px;padding-right: 0px;">
          <!-- header -->
          <div>
              <div><img class="head"  src="{{asset('images/head01.jpg')}}">
              </div>
          </div>
          <!-- navbar -->
          <nav class="navbar navbar-default" style="    margin-bottom: 0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="    padding-left: 5px;    padding-right: 5px;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
                      <li class="dropdown">
                          <div class="dropdown">
                              <button class="dropbtn" style="    padding-left: 4px;font-size:16px;padding-top: 19px;"">
                                  <fontTh>ข้อมูลสำนักสงฆ์สิริมงคล</fontTh>
                              </button>
                              <div class="dropdown-content">

                                  <a href="{{ url ('/History') }}" >
                                      <fontTh>ประวัติสำนักสงฆ์</fontTh>
                                  </a>
                                  <a href="{{ url ('/DirectoryMainUser') }}">
                                      <fontTh>ทำเนียบเจ้าอาวาส</fontTh>
                                  </a>
                                  <a href="{{ url ('/PersonsUser') }}">
                                      <fontTh>บุคคลสำคัญที่เกี่ยวข้อง</fontTh>
                                  </a>
                                  <a href="{{ url ('/MapUser') }}">
                                      <fontTh>ที่ตั้งสำนักสงฆ์</fontTh>
                                  </a>
                              </div>
                          </div>
                      </li>
        <li><a href="{{ url ('/NewsMainUser') }}" style="    padding-left: 4px;color:white;padding-top: 20px;font-size:16px;"><fontTh>ข่าวประชาสัมพันธ์</fontTh></a></li>
        <li><a href="{{ url ('/ActivityMainUser') }}" style="    padding-left: 4px;color:white;padding-top: 20px;font-size:16px;"><fontTh>รูปภาพกิจกรรม</fontTh></a></li>
        <li><a href="{{ url ('/GalleryUser') }}" style="    padding-left: 4px;color:white;padding-top: 20px;font-size:16px;"><fontTh>แกลอรี่</fontTh></a></li>
                      <li class="dropdown">
                          <div class="dropdown">
                              <button class="dropbtn" style="  font-size:16px;padding-top: 19px;"">
                                  <fontTh> สิ่งมงคล </fontTh>
                              </button>
                              <div class="dropdown-content">

                                  <a href="{{ url ('/KingpinTypeUser') }}">
                                      <fontTh>สิ่งสำคัญภายในสำนักสงฆ์</fontTh>
                                  </a>
                                  <a href="{{ url ('/WorshipMainUser') }}">
                                      <fontTh>เครื่องสักการะบูชา</fontTh>
                                  </a>
                                  </a>
                                  <a href="{{ url ('/SacredTypeUser') }}">
                                      <fontTh>วัตถุมงคล</fontTh>
                                  </a>
                              </div>
                          </div>
                      </li>
                      <li class="dropdown">
                          <div class="dropdown">
                              <button class="dropbtn" style="    padding-left: 4px;font-size:16px;padding-top: 19px;"">
                                  <fontTh>สื่อธรรมะ</fontTh>
                              </button>
                              <div class="dropdown-content">
                                  <a href="{{ url ('/PrayMainUser') }}">
                                      <fontTh>บทสวดมนต์</fontTh>
                                  </a>
                                  <a href="{{ url ('/Ebookforuser') }}">
                                      <fontTh>e-book</fontTh>
                                  </a>
                                  </a>
                              </div>
                          </div>
                      </li>
        <li><a href="{{ url ('/Guestbookuser') }}" style="    padding-left: 4px;color:white;padding-top: 20px;font-size:16px;"><fontTh>สมุดเยี่ยมชม</fontTh></a></li>
        <li><a href="{{ url ('/PlaceUser') }}" style="    padding-left: 4px;color:white;padding-top: 20px;font-size:16px;"><fontTh>สถานที่ใกล้เคียง</fontTh></a></li>
        <li><a href="{{ url ('/Developer') }}" style="    padding-left: 4px;color:white;padding-top: 20px;font-size:16px;"><fontTh>ผู้พัฒนาเว็บไซต์</fontTh></a></li>
        <li><a href="{{ url ('/Loginadmin') }}" style="    padding-left: 4px;color:white;padding-top: 20px;font-size:16px;"><fontTh>ผู้ดูแลระบบ</fontTh></a></li>
        
      </ul>

     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      </div>



     <div class="container main">    
            <section id="main">
                @yield('content')        
            </section>
    </div>

 <div class="container footer">
        <br>
        <br>
        
                <center style="color:white; font-size:20px;"><fontTh>สำนักสงฆ์ศิริมงคล </fontTh><fontEng>Samnaksong Siri Mongkon</fontEng></center><br></center>

                <center style="color:white; font-size:16px;"><fontTh>ตั้งอยู่  ณ  บ้านแม่เตี๊ยะใต้  หมู่ที่  ๑๔  ต.สบเตี๊ยะ  อ.จอมทอง  จังหวัดเชียงใหม่</fontTh></center>
  
                <center style="color:white; font-size:16px;"><fontTh>ผู้จัดทำเว็บไซต์ นางสาว ประภาภรณ์ ทิพย์รักษ์ คณะวิทยาศาสตร์สาขาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยเชียงใหม่ </fontTh></center>
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
    <script src="{{ asset('js/photo-gallery.js ') }}"></script>
</body>
</html>
