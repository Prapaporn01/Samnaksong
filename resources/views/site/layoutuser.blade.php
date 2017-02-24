<!DOCTYPE html>
<html lang="en">

<head>
    <title>User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville|Trirong' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/design.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/square-loader.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" />
    <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">

    <script type="text/javascript" src="{{ asset('js/cufon-yui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/georgia.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cuf_run.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('photo-gallery.js') }}"></script>


<style type="text/css">
    body{
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    background-image: url(images/bg1.jpg); 
}

 
a {
  text-decoration: none;
  color: #428bca;
  outline: none;
}

</style>
</head>


<body>
<div class="container" style="padding-left: 0px;padding-right: 0px;">
          <!-- header -->
          <div>
              <div><img src="images/head.jpg">
              </div>
          </div>
          <!-- navbar -->
          <nav class="navbar navbar-custom">

              <div class="container-fluid">
                  <ul class="nav navbar-nav">

                      <li class="dropdown">
                          <div class="dropdown">
                              <button class="dropbtn">
                                  <fontTh>ข้อมูลสำนักสงฆ์ศิริมงคล</fontTh>
                              </button>
                              <div class="dropdown-content">

                                  <a href="HistoryUser.php">
                                      <fontTh>ประวัติสำนักสงฆ์</fontTh>
                                  </a>
                                  <a href="{{ url ('/DirectoryMainUser') }}">
                                      <fontTh>ทำเนียบเจ้าอาวาส</fontTh>
                                  </a>
                                  <a href="{{ url ('/PersonsUser') }}">
                                      <fontTh>บุคคลสำคัญที่เกี่ยวข้อง</fontTh>
                                  </a>
                                  <a href="#">
                                      <fontTh>ที่ตั้งสำนักสงฆ์</fontTh>
                                  </a>
                              </div>
                          </div>
                      </li>

                      <li>
                          <a href="{{ url ('/NewsMainUser') }}">
                              <div class="fontsize16"><fontTh>ข่าวประชาสัมพันธ์</fontTh></div>
                          </a>
                      </li>
                      <li>
                          <a href="{{ url ('/ActivityMainUser') }}">
                              <div class="fontsize16"><fontTh>รูปภาพกิจกรรม</fontTh></div>
                          </a>
                      </li>
                      <li>
                          <a href="GalleryUser.php">
                              <div class="fontsize16"><fontTh>แกลอรี่</fontTh></div>
                          </a>
                      </li>

                      <li class="dropdown">
                          <div class="dropdown">
                              <button class="dropbtn">
                                  <fontTh> สิ่งมงคล </fontTh>
                              </button>
                              <div class="dropdown-content">

                                  <a href="{{ url ('/KingpinMainUser') }}">
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
                              <button class="dropbtn">
                                  <fontTh>สื่อธรรมะ</fontTh>
                              </button>
                              <div class="dropdown-content">
                                  <a href="{{ url ('/PrayMainUser') }}">
                                      <fontTh>บทสวดมนต์</fontTh>
                                  </a>
                                  <a href="#">
                                      <fontTh>e-book</fontTh>
                                  </a>
                                  </a>
                              </div>
                          </div>
                      </li>


                      <li>
                          <a href="{{ url ('/Guestbookuser') }}">
                              <div class="fontsize16"><fontTh>สมุดเยี่ยมชม</fontTh></div>
                          </a>
                      </li>
                      <li>
                          <a href="{{ url ('/PlaceUser') }}">
                              <div class="fontsize16"><fontTh>สถานที่ใกล้เคียง</fontTh></div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="fontsize16"><fontTh>ผู้พัฒนาเว็บไซต์</fontTh></div>
                          </a>
                      </li>
                  </ul>
              </div>

          </nav>
      </div>


      <section id="main">
                @yield('menutop')        
      </section>

     <div class="container main">    
        <div class="col-md-4">
            <br>
            <br>
            <div align="center"><img src="images/pic1.jpg" width="250" height="300"></div>
            <br>
            <font color="black"><center><b><fontTh>เจ้าอาวาส ศิริมงคล<br>ธัมชโย (ผู้ชนะด้วยธรรม)</fontTh></b></center></font>
            <br>
            <br>

            <div class="list-group">
                <fontTh><a href="HistoryUser.php" class="list-group-item"><center>ประวัติสำนักสงฆ์</center></a></fontTh>
                <fontTh><a href="{{ url('DirectoryMainUser')}}" class="list-group-item"><center>ทำเนียบเจ้าอาวาส</center></a></fontTh>
                <fontTh><a href="{{ url('PersonsUser')}}" class="list-group-item"><center>บุคคลสำคัญที่เกี่ยวข้อง</center></a></fontTh>
                <fontTh><a href="#" class="list-group-item"><center>ที่ตั้งสำนักสงฆ์</center></a></fontTh>
            </div>
        </div>

        <div class="col-md-8" style="padding-right: 0px;">
            <section id="main">
                @yield('content')        
            </section>
        </div>

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
