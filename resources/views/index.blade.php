@extends('site.layoutmainuser')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
	<div class="container main">
        <div class="col-md-5">
            <div class="breadcrumbA">
                <br><font color="black"><b><fontTh>ข่าวประชาสัมพันธ์</fontTh></b></font>
            </div>

            <div class="col-xs-4">

                <br>
                <img src="images/pic1.jpg">
                <br>
                <br><img src="images/pic2.jpg">
            </div>

            <div class="col-xs-8">

                <br>
                <br><font color="black"><fontTh><a href="#">ขอเชิญร่วมงานสรงน้ำพระ ประเพณีสงกรานต์ ประจำปี 2560</a></fontTh></font>
                <br>
                <br>
                <br>
                <br><font color="black"><fontTh><a href="#">ขอเชิญร่วมงานผ้าป่าสามัคคี ประจำปี 2560 </a></fontTh></font>
                <br>
                <br>

                <br>
                <br>
                <br>
                <p align="right">
                    <a href="{{ url('NewsMainUser')}}" class="btn btnNews">อ่านข่าวเพิ่มเติม</a>
                </p>
                <br>    

            </div>
            <div align="center"><img src="images/pic1.jpg" width="250" height="300"></div>
            <br>
            <font color="black"><center><b><fontTh>เจ้าอาวาส ศิริมงคล<br>ธัมชโย (ผู้ชนะด้วยธรรม)</fontTh></b></center></font>
            <br>
            <br>

            <div class="list-group">
			  	<fontTh><a href="HistoryUser.php" class="list-group-item"><center>ประวัติสำนักสงฆ์</center></a></fontTh>
                <fontTh><a href="{{ url ('/DirectoryMainUser') }}" class="list-group-item"><center>ทำเนียบเจ้าอาวาส</center></a></fontTh>
                <fontTh><a href="{{ url ('/PersonsUser') }}" class="list-group-item"><center>บุคคลสำคัญที่เกี่ยวข้อง</center></a></fontTh>
                <fontTh><a href="#" class="list-group-item"><center>ที่ตั้งสำนักสงฆ์</center></a></fontTh>
			</div>

        </div>


        <div class="col-md-7">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="images/page1.jpg" alt="page1" width="460" height="345">
                        <div class="carousel-caption">
                            <h5><fontTht>สำนักสงฆ์ศิริมงคล</fontTht><fontEng>  Samnaksong Siri Mongkon</fontEng></h5>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/page2.jpg" alt="page2" width="460" height="345">
                        <div class="carousel-caption">
                            <h5><fontTht>สำนักสงฆ์ศิริมงคล</fontTht><fontEng>  Samnaksong Siri Mongkon</fontEng></h5>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/page3.jpg" alt="page3" width="460" height="345">
                        <div class="carousel-caption">
                            <h5><fontTht>สำนักสงฆ์ศิริมงคล</fontTht><fontEng>  Samnaksong Siri Mongkon</fontEng></h5>
                        </div>
                    </div>
                </div>





                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <div class="breadcrumbB">
                <br><font color="black"><b><fontTh>รูปภาพกิจกรรม</fontTh></b></font>
            </div>
            <br>

            <div class="col-md-6">
            	<div class="col-md-5">
            		<img src="images/pic1.jpg">
            	</div>
            	<div class="col-md-7">
            		<br><font color="black"><fontTh><a href="#">ประเพณีสงกรานต์ ประจำปี 2560</a></fontTh></font>
            	</div>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
				<br>	

            	<div class="breadcrumbD">
                	<br><font color="black"><b><fontTh>สิ่งมงคล</fontTh></b></font>
           		</div>
           		<br>
           		<div class="col-md-5">
            		<img src="images/pic1.jpg">
            		<br>
            		<br>
            		<img src="images/pic2.jpg">
            		<br>
            		<br>
            		<img src="images/pic3.jpg">
            	</div>
            	<div class="col-md-7">
            		<br>
            		<br>
            		<font color="black"><a href="#"><fontTh>สิ่งสำคัญภายในสำนักสงฆ์</fontTh></a></font>
            		<br>
            		<br>
            		<br>
            		<br>
            		<br>
            		<br>
            		<font color="black"><a href="#"><fontTh>เครื่องสักการะบูชา</fontTh></a></font>
					<br>
            		<br>
            		<br>
            		<br>
            		<br>
            		<br>
            		<font color="black"><a href="#"><fontTh>วัตถุมงคล</fontTh></a></font>
            		<br>
            		<br>
            	</div>
            </div>


            <div class="col-md-6">
            	<div class="col-md-5">
            		<img src="images/pic2.jpg">
            	</div>
            	<div class="col-md-7">
            		<br><font color="black"><fontTh><a href="#">ขอเชิญร่วมงานผ้าป่าสามัคคี ประจำปี 2560 </a></fontTh></font>
            	</div>

            	<p align="right">
					<br>
					<br>
					<br>
					<br>
					<br>
                        <a href="{{ url('ActivityMainUser')}}" class="btn btnNews">อ่านพิ่มเติม</a>
	                </p>  
	                <br>
            	<div class="breadcrumbC">
                	<br><font color="black"><b><fontTh>สถานที่ใกล้เคียง</fontTh></b></font>
           		</div>
           		<br>
           		<div class="col-md-5">
            		<img src="images/pic1.jpg">
            		<br>
            		<br>
            		<img src="images/pic2.jpg">
            		<br>
            		<br>
            		<img src="images/pic3.jpg">
            	</div>
				<div class="col-md-7">
            		<br>
            		<br>
            		<font color="black"><fontTh><a href="#">โรงพยาบาลจอมทอง</a></fontTh></font>
            		<br>
            		<br>
            		<br>
            		<br>
            		<br>
            		<br>
            		<font color="black"><fontTh><a href="#">วัดพระธาตุศรีจอมทอง</a></fontTh></font>
					<br>
            		<br>
            		<br>
            		<br>
            		<br>
            		<br>
            		<font color="black"><fontTh><a href="#">ที่ว่าการอำเภอจอมทอง</a></fontTh></font>
            		<br>
            		<br>
            	</div>
	        </div>

					<p align="right">
					<br>
					<br>
                        <a href="{{ url('PlaceUser')}}" class="btn btnNews">อ่านพิ่มเติม</a>

	                </p>           
        </div>
    </div>



</body>
</html>
@stop
