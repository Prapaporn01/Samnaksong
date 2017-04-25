@extends('site.layoutforuser')
@section('menutop')
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




.jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
        .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
        .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
        /* jssor slider thumbnail navigator skin 01 css *//*.jssort01 .p            (normal).jssort01 .p:hover      (normal mouseover).jssort01 .p.pav        (active).jssort01 .p.pdn        (mousedown)*/.jssort01 .p {    position: absolute;    top: 0;    left: 0;    width: 72px;    height: 72px;}.jssort01 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort01 .w {    position: absolute;    top: 0px;    left: 0px;    width: 100%;    height: 100%;}.jssort01 .c {    position: absolute;    top: 0px;    left: 0px;    width: 68px;    height: 68px;    border: #000 2px solid;    box-sizing: content-box;    _background: none;}.jssort01 .pav .c {    top: 2px;    _top: 0px;    left: 2px;    _left: 0px;    width: 68px;    height: 68px;    border: #000 0px solid;    _border: #fff 2px solid;    background-position: 50% 50%;}.jssort01 .p:hover .c {    top: 0px;    left: 0px;    width: 70px;    height: 70px;    border: #fff 1px solid;    background-position: 50% 50%;}.jssort01 .p.pdn .c {    background-position: 50% 50%;    width: 68px;    height: 68px;    border: #000 2px solid;}* html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {    /* ie quirks mode adjust */    width /**/: 72px;    height /**/: 72px;}


</style>
<script src="{{asset('js/jssor.slider-22.1.9.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">

        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>

<body>    
          @foreach($news2 as $title)
            @if ($loop->first)
            <div class="container">
                  <ul class="breadcrumb">
                      <li><a href="{{ url('/')}}" style="font-size:18px;"><fontTh>กลับสู่หน้าหลัก</fontTh></a></li>
                      <li><a href="{{ url('/NewsMainUser')}}" style="font-size:18px;"><fontTh>ข่าวประชาสัมพันธ์</fontTh></a></li>
                      <li class="active"><a href="javascript:void(0);" style="font-size:18px;"><fontTh>{{$title->news_title}}</fontTh></a></li>
                  </ul>          
            </div>
            @endif
          @endforeach
</body>
@stop




@section('content')
<head>
    <title>NewUser</title>

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
</style>


<body> 

                  <div class="col-md-12 col-xs-10" >
                    @foreach($news2 as $name)
                      @if ($loop->first)
                          <br>
                          <div align="right"><font color="black"><fontTh>อัพเดทวันที่ :</fontTh><fontEng> {{ $name->news_datetime->format('d.m.Y H:i:s') }}</fontEng></font></div>
                          <br><br>

                          <center style="color:#330033; font-size:24px;"><b><fontTh>{{$name->news_title}}</fontTh></b></center>
                      @endif
                    @endforeach
                    <br>
                    @foreach($news2 as $info)
                      @if ($loop->first)

                      <div class="col-md-12">
                        <div align="left"><font color="black" style="font-size:18px;"><fontTh>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$info->news_detail}}</fontTh></font></div>
                        <br>
                      </div>        
                      @endif
                    @endforeach

           
                  @foreach($news3 as $info)
                    <div class="col-md-10 col-xs-10" >
                    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:500px;height:440px;overflow:hidden;visibility:hidden;background-color:#24262e;">
                        <!-- Loading Screen -->
                            <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                <div style="position:absolute;display:block;top:0px;left:0px;width:100%;height:100%;"></div>
                            </div>
                            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:500px;height:350px;overflow:hidden;">
                                
                                 @foreach($news as $row)
                                <div >
                                    <img class="img-responsive" data-u="image" src="{{asset('images/News/'.$row->news_file_pic)}}" />
                                    <img class="img-responsive" data-u="thumb" src="{{asset('images/News/'.$row->news_file_pic)}}" />
                                </div>
                                 @endforeach    
                            </div>

                        <!-- Thumbnail Navigator -->
                            <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
                                <!-- Thumbnail Item Skin Begin -->
                                <div data-u="slides" style="cursor: default;">
                                    <div data-u="prototype" class="p">
                                        <div class="w">
                                            <div data-u="thumbnailtemplate" class="t"></div>
                                        </div>
                                        <div class="c"></div>
                                    </div>
                                </div>
                                <!-- Thumbnail Item Skin End -->
                            </div>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
                        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>

                    </div>
                    <br>
                  </div>

                    <script type="text/javascript">jssor_1_slider_init();</script>
                  </div>

                  @endforeach
             
        
                    @foreach($news2 as $info)
                      @if ($loop->first)
                    
                      <object data="{{ asset('/pdf/'.$info->news_file)}}" type="application/pdf" width="85%" height="600"  style="margin-bottom:10%;"></object>

                      @endif
                    @endforeach

</body>
</html>
@stop