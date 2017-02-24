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
    <link rel="stylesheet" href="css/design.css" type="text/css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />

</head>
<style type="text/css">
    body{
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    background-image: url(images/bg1.jpg);
}
</style>



<body>

          <div class="container" style="padding-left: 0px;padding-right: 0px;">
          <!-- header -->
          <div>
              <div><img src="images/head.jpg" ></div>
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
                          <li class="active"><h4 style="font-size:20px; line-height:1.5; font-color:white;"><fontTh>ระบบจัดการเว็บไซต์สำนักสงฆ์ศิริมงคล</fontTh></h4></li> 

                            
                          <li class="active"><h4 style="border-left-width: 30px;padding-left: 600px;"></h4></li> 

                                           
                          <li>
                              <a href="{{ url ('/') }}">
                                  <div class="fontsize16"><fontTh>ไปยังเว็บไซต์</fontTh></div>
                              </a>
                          </li>
                          <li>
                              <a style="background-color:#745b44;">
                                  <div class="fontsize16"><fontTh>เข้าสู่ระบบ</fontTh></div>
                              </a>
                          </li>
          
                      </ul>
                  </div>
              </nav>                    
  </div>
 


    <div class="container main" style ="padding-left: 0px;"> 
      <div class="class-col-md-9 col-xs-12>
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
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>




   

</body>

</html>