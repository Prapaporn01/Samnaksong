@extends('site.layoutformainuser')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <meta name="description" content="สำนักสงฆ์สิริมงคล หรือ วัดแม่เตี๊ยะใต้ อำเภอจอมทอง จังหวัดเชียงใหม่ เป็นสำนักสงฆ์ที่มีความสงบ ร่มรื่น ควรค่าแก่การอนุลักษณ์ให้รุ่นหลานได้ศึกษา"/>
    <meta name="keywords" content="สำนักสงฆ์สิริมงคล,แม่เตี๊ยะใต้,จอมทอง,เชียงใหม่,วัตถุมงคล,พระพุทธรูป,ยันต์,วัด,สักการะบูชา,Samnaksong Siri Mongkon"/>
</head>

<style type="text/css">
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

<body>

	<div class="container main" style="margin-left:5%;">
    <div>
        <div class="col-md-5 ">
        
            <div class="breadcrumbA" style="    margin-left: 0px;">
                <div style="font-size:24px;padding-top:10px;color:#003333;"><b><fontTh>ข่าวประชาสัมพันธ์</fontTh></b></div>
            </div>
            @foreach($news as $row)
            <div class="col-md-12 " style="padding-left: 0px;">
                    <div class="body" style="    margin-right: 0px;    padding-left: 0px;" >
                        <div class="left_resize" style="    height: 320;">        
                          <div class="left1" style="border-left-width: 1px;margin-top: 10px;margin-right: 0px;width: 100%;">
                            <div class="col-md-5 col-xs-12">
                                <div align="center"><img class="img-responsive" src="{{'images/resize/'.$row->newsmain_pic }}" width="150" height="150" style="    margin-left: 0px;"></div>
                            </div>
                              <div class="col-md-7 col-xs-12">
                                  <div align="left"><p><span style="    padding-left: 20px;    margin-left: 0px; color:#337ab7; font-size:18px;">{{$row->news_title}}</span><br><div style=" color:black; font-size:16px;"> {{$row->news_description  }}</div></p></div>
                                  <p><a href="{{ url('/NewsMainUser/'.$row->news_id)}}" class="btn btnNews" style="   float:right;color:#666633; "><fontTh><b>อ่านเพิ่มเติม</b></fontTh></a></p>
                              </div>
                          </div>                         
                        </div> 
                    </div> 
            </div>        
            @endforeach
            
            <p align="right">
                <br>
                <br>
                <a href="{{ url('NewsMainUser')}}" class="btn btnNews" style="color:#666633;" ><fontTh><b>อ่านข่าวอื่นเพิ่มเติม</b></fontTh></a>
            </p>

            <br>
            <br>

<!-- 
            @foreach($directory as $row)
            @if($loop->first)
            <div align="center"><img class="img-responsive" src="{{asset('images/resize/'.$row->directorymain_pic)}}" ></div>
            
            
            <br>
            <div style="font-size:20px;padding-top:10px;" align="center"><fontTh><b>{{$row->directory_name}} ( {{$row->directory_name_fair}} )<br>{{$row->directory_position}}</b></fontTh>
            </div>
            <br>
            <br>

            @endif
            @endforeach -->
            <div align="center"><img class="img-responsive" src="{{asset('images/Directory/main.jpg')}}" ></div>
            
            
            <br>
            <div style="font-size:20px;padding-top:10px;" align="center"><fontTh><b>พระนพปฏลวงศ์ ภรณ์รัตนตรัย ( คนฺธสีโล )<br>เจ้าสำนักสงฆ์สิริมงคล </b></fontTh>
            </div>
            <br>
            <br>

            <div class="list-group">
			  	    <fontTh><a href="{{ url ('/History')}}" class="list-group-item" style="font-size:20px;color:#003333;"><center><fontTh>ประวัติสำนักสงฆ์</fontTh></center></a></fontTh>
              <fontTh><a href="{{ url ('/DirectoryMainUser') }}" style="font-size:20px;color:#003333;" class="list-group-item"><center><fontTh>ทำเนียบเจ้าอาวาส</fontTh></center></a></fontTh>
              <fontTh><a href="{{ url ('/PersonsUser') }}" style="font-size:20px;color:#003333;" class="list-group-item"><center><fontTh>บุคคลสำคัญที่เกี่ยวข้อง</fontTh></center></a></fontTh>
              <fontTh><a href="{{ url ('MapUser')}}" style="font-size:20px;color:#003333;" class="list-group-item"><center><fontTh>ที่ตั้งสำนักสงฆ์</fontTh></center></a></fontTh>
			      </div>

        </div>


        <div class="col-md-7 col-xs-12">
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
                        <img class="img-responsive" src="{{url('images/resizeBig/Gallerymain_OyGy5Urh3g.jpg')}}" alt="page1" width="460" height="345">
                        <div class="carousel-caption">
                            <h5><fontTht>สำนักสงฆ์ศิริมงคล</fontTht><fontEng>  Samnaksong Siri Mongkon</fontEng></h5>
                        </div>
                    </div>

                    <div class="item ">
                        <img class="img-responsive" src="{{url('images/resizeBig/Gallerymain_SmeyJlCzGk.jpg')}}" alt="page2" width="460" height="345">
                        <div class="carousel-caption">
                            <h5><fontTht>สำนักสงฆ์ศิริมงคล</fontTht><fontEng>  Samnaksong Siri Mongkon</fontEng></h5>
                        </div>
                    </div>

                    <div class="item ">
                        <img class="img-responsive" src="{{url('images/resizeBig/Gallerymain_i43UqujWPg.jpg')}}" alt="page3" width="460" height="345">
                        <div class="carousel-caption">
                            <h5><fontTht>สำนักสงฆ์ศิริมงคล</fontTht><fontEng>  Samnaksong Siri Mongkon</fontEng></h5>
                        </div>
                    </div>
                </div>

 

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="left: 0%;right: 100%;margin-top: 0%;width: 2%;margin-left: 0px;padding-right: 0px;">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="left: 102%; right: 0%;margin-top: 0%;width: 3%;margin-left: 0px;padding-right: 0px;">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

              <br>
            
              <div class="breadcrumbB" style="    margin-right: 15px;">
                <div style="font-size:24px;padding-top:10px;color:#003333;"><b><fontTh>รูปภาพกิจกรรม</fontTh></b></div>
              </div>

              <br>
            @foreach($activity as $row)
            <div class="col-md-12 col-xs-12">
                    <div class="body" style="    margin-right: 0px;    padding-left: 0px;">
                        <div class="left_resize" style="    height: 320;">        
                          <div class="left1" style="border-left-width: 1px;margin-top: 0px;margin-right: 0px;width: 100%;">
                            <div class="col-md-4 col-xs-12">
                                <div align="center"><img  class="img-responsive" src="{{'images/resize/'.$row->activitiesmain_pic }}" width="150" height="150" style="    margin-left: 0px;"></div>
                            </div>
                              <div class="col-md-8 col-xs-12">
                                  <div align="left"><fontTh><p><span style=" color:#337ab7;   padding-left: 20px;    margin-left: 0px; font-size:18px;">{{$row->activities_name}}<br></span></p><div style="   font-size:16px;">{{$row->activities_description }}</div></fontTh></div>
                                  <p><a href="{{ url('/ActivityMainUser/'.$row->activities_id)}}" class="btn btnNews" style="    margin-left: 5%;float:right;color:#666633;"><fontTh><b>อ่านเพิ่มเติม</b></fontTh></a></p>
                              </div>
                          </div>                         
                        </div> 
                    </div> 
            </div>
            @endforeach
            

            <p align="right">
                <br>
                <br>
                <a href="{{ url('ActivityMainUser')}}" class="btn btnNews" style="margin-right: 0%;color:#666633;" ><fontTh><b>อ่านกิจกรรมอื่นเพิ่มเติม</b></fontTh></a>
            </p> 
        </div>
        <br>
        <br>        
    </div>        


        <div class="col-md-12 col-xs-12">
            <div class="col-md-6 col-xs-12">
              <div class="breadcrumbD" align="left">
                   <div style="font-size:24px;padding-top:10px; margin-top:30px;left: 0px;color:#003333; "><b><fontTh>สิ่งมงคล</fontTh></b></div>
              </div> 
              <br>
              <div class="col-md-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                      <div class="body" style="    margin-right: 0px;    padding-left: 0px;">
                          <div class="left_resize" style="    height: 320;">        
                            <div class="left1" style="border-left-width: 1px;margin-top: 0px;margin-right: 0px;width: 100%;">
                              <div class="col-md-4 col-xs-12">
                                  <div align="center"><img class="img-responsive" src="{{ url('images/bb.jpg')}}" width="150" height="150" style="    margin-left: 0px;"></div>
                              </div>
                                <div class="col-md-8 col-xs-12">
                                    <div align="left"><p><span style="    padding-left: 18px;    margin-left: 0px;font-size:18px;color:#337ab7;"><fontTh>สิ่งสำคัญภายในสำนักสงฆ์</fontTh></span></p><div style="   font-size:16px;">สิ่งสำคัญภายในสำนักสงฆ์ ประกอบไปด้วย พระพุทธรูป รูปปั้น ศาลา เป็นต้น</div></div>

                                    <div class="col-md-8 col-xs-12">
                                        <p><a href="{{ url('KingpinTypeUser')}}" class="btn btnNews" style="    margin-left: 5%;margin-left:50%;float:right;color:#666633;"><fontTh><b>อ่านเพิ่มเติม</b></fontTh></a></p>
                                    </div>
                                </div>
                            </div>                         
                          </div> 
                      </div> 
              </div>
              <div class="col-md-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                      <div class="body" style="    margin-right: 0px;    padding-left: 0px;">
                          <div class="left_resize" style="    height: 320;">        
                            <div class="left1" style="border-left-width: 1px;margin-top: 0px;margin-right: 0px;width: 100%;">
                              <div class="col-md-4 col-xs-12">
                                  <div align="center"><img class="img-responsive" src="{{ url('images/aa.jpg')}}" width="150" height="150" style="    margin-left: 0px;"></div>
                              </div>
                                <div class="col-md-8 col-xs-12">
                                    <div align="left"><p><span style="    padding-left: 18px;    margin-left: 0px;font-size:18px;color:#337ab7;"><fontTh>เครื่องสักการะบูชา</fontTh></span></p><div style="   font-size:16px;">เครื่องสักการะบูชา ประกอบไปด้วย เทียน และ ประทีป </div></div>
                                    <div class="col-md-8 col-xs-12">
                                        <p><a href="{{ url('WorshipMainUser')}}" class="btn btnNews" style="    margin-left: 5%; float:right;color:#666633;"><fontTh><b>อ่านเพิ่มเติม</b></fontTh></a></p>
                                    </div>
                                </div>
                            </div>                         
                          </div> 
                      </div> 
              </div>
              <div class="col-md-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                      <div class="body" style="    margin-right: 0px;    padding-left: 0px;">
                          <div class="left_resize" style="    height: 320;">        
                            <div class="left1" style="border-left-width: 1px;margin-top: 0px;margin-right: 0px;width: 100%;">
                              <div class="col-md-4 col-xs-12">
                                  <div align="center"><img class="img-responsive" src="{{ url('images/cc.jpg')}}" width="150" height="150" style="    margin-left: 0px;"></div>
                              </div>
                                <div class="col-md-8 col-xs-12">
                                    <div align="left"><p><span style="    padding-left: 18px;    margin-left: 0px;font-size:18px;color:#337ab7;"><fontTh>วัตถุมงคล</fontTh></span></p><div style="   font-size:16px;">วัตถุมงคล ประกอบไปด้วย พระเครื่อง ผ้ายันต์ พระพุทธรูป เป็นต้น</div></div>
                                    <div class="col-md-8 col-xs-12">
                                        <p><a href="{{ url('SacredTypeUser')}}" class="btn btnNews" style="    margin-left: 5%; float:right;color:#666633;"><fontTh><b>อ่านเพิ่มเติม</b></fontTh></a></p>
                                    </div>
                                </div>
                            </div>                         
                          </div> 
                      </div> 
              </div>
            </div>

            <div class="col-md-6 col-xs-12">
              <div class="breadcrumbC">
                  <div style="font-size:22px;padding-top:10px; margin-top:30px;font-size:24px;color:#003333;"><b><fontTh>สถานที่ใกล้เคียง</fontTh></b></div>
              </div>
              <br>
              @foreach($place as $row)
              <div class="col-md-12 col-xs-12" style="padding-left: 0px;">
                      <div class="body" style="    margin-right: 0px;    padding-left: 0px;">
                          <div class="left_resize" style="    height: 320;">        
                            <div class="left1" style="border-left-width: 1px;margin-top: 0px;margin-right: 0px;width: 100%;">
                              <div class="col-md-4 col-xs-12">
                                  <div align="center"><img class="img-responsive" src="{{'images/resize/'.$row->place_pic }}" width="150" height="150" style="    margin-left: 0px;"></div>
                              </div>
                                <div class="col-md-8 col-xs-12">
                                    <div align="left"><p><span style="    padding-left: 20px;    margin-left: 0px; color:black; font-size:18px;"><a href="{{$row->place_url}}">{{$row->place_name}}</a></span><br><div style="font-size:16px;";>{{$row->place_description}}</div></p></div>
                                </div>
                            </div>                         
                          </div> 
                      </div> 
              </div>          
              @endforeach
              <p align="right">
                <br>
                <br>
                <a href="{{ url('PlaceUser')}}" class="btn btnNews" style="margin-right: 0%; color:#666633;"><b><fontTh>อ่านสถานที่ใกล้เคียงอื่นเพิ่มเติม</fontTh></b></a>
              </p> 
                <br>
                <br>  
            </div>
        </div>  					       
  </div>



</body>
</html>
@stop
