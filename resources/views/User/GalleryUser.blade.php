@extends('site.layoutforuser')
@section('menutop')
<html>
<head>
    <title>Gallery</title>
    <meta name="description" content="สำนักสงฆ์สิริมงคล หรือ วัดแม่เตี๊ยะใต้ อำเภอจอมทอง จังหวัดเชียงใหม่ เป็นสำนักสงฆ์ที่มีความสงบ ร่มรื่น ควรค่าแก่การอนุลักษณ์ให้พุธศาสนิกชนได้ศึกษา"/>
    <meta name="keywords" content="สำนักสงฆ์สิริมงคล,แม่เตี๊ยะใต้,จอมทอง,เชียงใหม่,ศาลา,แกลอรี่,gallery,Samnaksong Siri Mongkon,วัด"/>
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

            <div class="container">
                  <ul class="breadcrumb">
                      <li><a href="{{ url('/')}}" style="font-size:18px;"><fontTh>กลับสู่หน้าหลัก</fontTh></a></li>
                      <li class="active"><a href="javascript:void(0);" style="font-size:18px;"><fontTh>แกลอรี่</fontTh></a></li>
                  </ul>          
            </div>
            
</body>
@stop




@section('content')
<head>
    <title>GalleryUser</title>
   
    <meta http-equiv="content-type" content="text/html; charset=UTF8">


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







/* Global */



.thumbnails li> .fff .caption { 
    background:#fff !important; 
    padding:10px
}

/* Page Header */
.page-header {
    background: #f9f9f9;
    margin: -30px -40px 40px;
    padding: 20px 40px;
    border-top: 4px solid #ccc;
    color: #999;
    text-transform: uppercase;
}
    
.page-header h3 {
    line-height: 0.88rem;
    color: #000;
}

ul.thumbnails { 
    margin-bottom: 0px;
}



/* Thumbnail Box */
.caption h4 {
    color: #444;
}

.caption p {  
    color: #999;
}



/* Carousel Control */
.control-box {
    text-align: right;
    width: 100%;
}
.carousel-control{
    background: #666;
    border: 0px;
    border-radius: 0px;
    display: inline-block;
    font-size: 34px;
    font-weight: 200;
    line-height: 18px;
    opacity: 0.5;
    padding: 4px 10px 0px;
    position: static;
    height: 30px;
    width: 15px;
}



/* Mobile Only */
@media (max-width: 767px) {
    .page-header, .control-box {
        text-align: center;
    } 
}
@media (max-width: 479px) {
    .caption {
        word-break: break-all;
    }
}


li { list-style-type:none;}

::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
::-moz-selection { background: #ff5e99; color: #FFFFFF; }


</style> 
<script type="text/javascript">
    $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });
</script>

<body>


            <div class="col-md-12 ">
                    <br>
                    <br>
                    <center style="color:#330033; font-size:24px;"><b><fontTh>แกลอรี่</fontTh></b></center>
                    <br>
                    
                    <br>
                    <br>



             

<?php 
$num = floor(count($gallery)/3);
$a = count($gallery)%3; 

if($a != 0){
  $num += 1;
}

?>

    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner" style="font-size:20px;">
        <?php 
         $aa=3;
for($j=0;$j<$num;$j++){ ?>
  
<?php if($j==0){ ?><div class="item active"><?php }else{ ?><div class="item"><?php }?>
                    <ul class="thumbnails">
                    <?php if($j==$num-1){
                          if($a != 0){
                          for($k=$aa-3;$k<$aa-(3-$a);$k++){ ?>
                        <li class="col-sm-4">
                          <div class="fff">
                            <div class="thumbnail">
                        
                              <img class="img-responsive" src="images/resizeBig/<?php echo $gallery[$k]['gallery_file_pic']; ?>" alt="">
                            </div>
                            <div style="font-size:16px;color:black;" class="caption">
                              <?php echo $gallery[$k]['gallery_detail']; ?>                                      
                            </div>
                          </div>
                          </li>
                        <?php } ?>
                        <?php }else{ for($k=$aa-3;$k<$aa;$k++){ ?>
                        <li class="col-sm-4">
                          <div class="fff">
                            <div class="thumbnail">
                              <img class="img-responsive" src="images/resizeBig/<?php echo $gallery[$k]['gallery_file_pic']; ?>" alt="">
                            </div>
                            <div style="font-size:16px;color:black;" class="caption">
                              <?php echo $gallery[$k]['gallery_detail']; ?>                                      
                            </div>
                          </div>
                          </li>
                        <?php }
                        }
                        } else{
                      
          
                      
                      for($k=$aa-3;$k<$aa;$k++){ ?>
                        <li class="col-sm-4">
                          <div class="fff">
                            <div class="thumbnail">
                              <img  class="img-responsive" src="images/resizeBig/<?php echo $gallery[$k]['gallery_file_pic']; ?>" alt="">
                            </div>
                            <div style="font-size:16px; color:black;" class="caption">
                              <?php echo $gallery[$k]['gallery_detail']; ?>
                            </div>
                          </div>
                          </li>
                        <?php } ?>
                        <?php $aa+=3;} ?>
                        </ul>
              </div><!-- /Slide1 -->  

              <?php } ?>
 
                       
                       
            
                    
        </div>
        
       
     <nav>
      <ul class="control-box pager">
        <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
        <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
      </ul>
    </nav>
     <!-- /.control-box -->   
                              
    </div><!-- /#myCarousel -->

</div><!-- /.container -->



</div>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">         
                  <div class="modal-body">                
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
     

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
</body>

@stop