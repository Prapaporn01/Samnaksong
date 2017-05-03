@extends('site.layoutforuser')
@section('menutop')
<html>
<head>
    <title>WorshipUser</title>
    <meta name="description" content="สำนักสงฆ์สิริมงคล หรือ วัดแม่เตี๊ยะใต้ อำเภอจอมทอง จังหวัดเชียงใหม่ เป็นสำนักสงฆ์ที่มีความสงบ ร่มรื่น ควรค่าแก่การอนุลักษณ์ให้พุธศาสนิกชนได้ศึกษา"/>
    <meta name="keywords" content="สำนักสงฆ์สิริมงคล,แม่เตี๊ยะใต้,จอมทอง,เชียงใหม่,เครื่องสักการะบูชา,วัด,เทียน,ประทีป,Samnaksong Siri Mongkon"/>
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
<body>
          @foreach($worship as $title)
            @if ($loop->first)
            <div class="container">
                  <ul class="breadcrumb">
                      <li><a href="{{ url('/')}}" style="font-size:18px;"><fontTh>กลับสู่หน้าหลัก</fontTh></a></li>
                      <li><a href="{{ url('/WorshipMainUser')}}" style="font-size:18px;"><fontTh>เครื่องสักการะบูชา</fontTh></a></li>
                      <li class="active"><a href="javascript:void(0);" style="font-size:18px;"><fontTh>{{$title->worship_name}}</fontTh></a></li>
                  </ul>          
            </div>
            @endif
          @endforeach
          
</body>
@stop


@section('content')
<head>
    <title>WorshipUser</title>


</head>


<style>
/*-------------------------------------------gallery*/
    ul {         
          padding:0 0 0 0;
          margin:0 0 0 0;
      }
      ul li {     
        list-style:none;
        margin-bottom:0px;           
      }
      ul li img {
          cursor: pointer;
      }
      .modal-body {
          padding:5px !important;
      }
      .modal-content {
          border-radius:0;
      }
      .modal-dialog img {
          text-align:center;
          margin:0 auto;
      }
    .controls{          
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold;          
    }
    .next {
        float:right;
        text-align:right;
    }
      /*override modal for demo only*/
      .modal-dialog {
          max-width:500px;
          padding-top: 90px;
      }
      @media screen and (min-width: 768px){
          .modal-dialog {
              width:500px;
              padding-top: 90px;
          }          
      }
      @media screen and (max-width:1500px){
          #ads {
              display:none;
          }
      }

      body{
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    background-image: url({{ url('images/bg1.jpg')}});
}
img.full{
    width: 100%;
    height: auto;
}
</style>

<body>

            <div class="col-md-12">

                    <br>
                    <br>
                    <br>

                    @foreach($worship2 as $name)
                      @if ($loop->first)
                    <center style="color:#330033; font-size:24px;"><b><fontTh>{{$name->worship_name}}</fontTh></b></center>
                      @endif
                    @endforeach
                    <br>
                    <br>             
                    @foreach($worship2 as $head)
                      @if ($loop->first)
                          <div align="center"><img class="full" src="{{asset('images/Worship/'.$head->worship_file_pic)}}" alt="page1"></div>
                      @endif
                    @endforeach

                    <br>
                    
                    <div class="col-md-12">
                    <font color="black"><center><fontTh></fontTh></center></font>
                    @foreach($worship2 as $info)
                      @if ($loop->first)
                        <div align="left" style="color:black;font-size:18px;"><fontTh>{{$info->worship_detail}}</fontTh></div>
                       @endif
                    @endforeach
                     <br>
                    </div>
                 
 
     @foreach($worship as $row)
          
            <div >
              <ul>
                <li class=" col-xs-4">
                    <img class="img-responsive" src="{{asset('images/Worship/'.$row->worship_file_pic)}}" style="margin-bottom:10px;">
                   <br>
                </li>
                
              </ul>
               
            </div>
                              
    @endforeach
    
                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $worship->links() }}
                        </div>  
                    </div>
                </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">         
              <div class="modal-body">                
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        
			<br>



        </div>
                  
</body>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</html>
@stop