@extends('site.layoutuser')
@section('menutop')
<style type="text/css">
body{ background-image: url(images/bg1.jpg); }
.widget-area.blank {
background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
-webkit-box-shadow: none;
-moz-box-shadow: none;
-ms-box-shadow: none;
-o-box-shadow: none;
box-shadow: none;
}
body .no-padding {
padding: 0;
}
.widget-area {
background-color: #fff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
float: left;
margin-top: 30px;
padding: 25px 30px;
position: relative;
width: 100%;
}
.status-upload {
background: none repeat scroll 0 0 #f5f5f5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
float: left;
width: 100%;
}
.status-upload form {
float: left;
width: 100%;
}
.status-upload form textarea {
background: none repeat scroll 0 0 #fff;
border: medium none;
-webkit-border-radius: 4px 4px 0 0;
-moz-border-radius: 4px 4px 0 0;
-ms-border-radius: 4px 4px 0 0;
-o-border-radius: 4px 4px 0 0;
border-radius: 4px 4px 0 0;
color: #777777;
float: left;
font-family: Lato;
font-size: 14px;
height: 142px;
letter-spacing: 0.3px;
padding: 20px;
width: 100%;
resize:vertical;
outline:none;
border: 1px solid #F2F2F2;
}

.status-upload ul {
float: left;
list-style: none outside none;
margin: 0;
padding: 0 0 0 15px;
width: auto;
}
.status-upload ul > li {
float: left;
}
.status-upload ul > li > a {
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #777777;
float: left;
font-size: 14px;
height: 30px;
line-height: 30px;
margin: 10px 0 10px 10px;
text-align: center;
-webkit-transition: all 0.4s ease 0s;
-moz-transition: all 0.4s ease 0s;
-ms-transition: all 0.4s ease 0s;
-o-transition: all 0.4s ease 0s;
transition: all 0.4s ease 0s;
width: 30px;
cursor: pointer;
}
.status-upload ul > li > a:hover {
background: none repeat scroll 0 0 #606060;
color: #fff;
}
.status-upload form button {
border: medium none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #fff;
float: right;
font-family: Lato;
font-size: 14px;
letter-spacing: 0.3px;
margin-right: 9px;
margin-top: 9px;
padding: 6px 15px;
}
.dropdown > a > span.green:before {
border-left-color: #2dcb73;
}
.status-upload form button > i {
margin-right: 7px;
}
</style>
<body>
            <div class="col-md-11 col-xs-11" >
                <ul class="breadcrumb" style="padding-top: 8px;margin-bottom: 0px;margin-left: 150px;margin-right: 25px;">
                  <li><a href="{{ url('/')}}">กลับสู่หน้าหลัก</a></li>
                  <li class="active">สมุดเยี่ยมชมเว็บไซต์</li>
                </ul>
            </div>
            
</body>
@stop


@section('content')
<body>


        <div class="col-md-12">


                  <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="widget-area no-padding blank">
                                <div class="status-upload" >
                                    {!! Form::open(array('url' => 'Guestbookuser','files' => true)) !!} 
                                        <textarea placeholder="ร่วมแสดงความคิดเห็น" name="guest_detail" style="    margin-bottom: 10px; margin-bottom:5px;"></textarea>
                                        <div class="col-md-8 col-xs-6">
                                        <div style="padding-left: 0px;margin-bottom: 5px;"><b>ชื่อผู้แสดงความคิดเห็น : </b><input type="text" style="width: 200px;    height: 30px;" name="guest_name"></input></div></div>
                                        <div class="col-md-4 col-xs-6">
                                        <button type="submit" class="btn btn-warning" style="    margin-top: 0px;"><i class="fa fa-share"></i><b>แสดงความคิดเห็น</b></button></div>
                                    {!! Form::close() !!}
                                </div><!-- Status Upload  -->
                            </div><!-- Widget Area -->
                        </div>
                  </div>
            <br>
            <br>
            @foreach ($guestbook as $row)
            <div class="row">
                <div class="col-md-2 col-xs-2">
                    <div class="thumbnail">

                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div><!-- /thumbnail -->
                </div><!-- /col-sm-1 -->

                <div class="col-md-10 col-xs-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <strong>{{$row->guest_name}}</strong> <span class="text-muted">แสดงความคิดเห็นเมื่อ : {{$row->guest_date}}</span>
                        </div>
                        <div class="panel-body" style="color:black;">{{$row->guest_detail}}</div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-10-->
            </div><!-- /row-->
             @endforeach

           

                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $guestbook->links() }}
                        </div>  
                    </div>
                </div>


</body>
</html>
@stop