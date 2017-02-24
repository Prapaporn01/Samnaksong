@extends('site.layoutuser')
@section('menutop')
<body>
            <div class="col-md-11 col-xs-11" >
                <ul class="breadcrumb" style="padding-top: 8px;margin-bottom: 0px;margin-left: 150px;margin-right: 25px;">
                    <li><a href="{{ url('/')}}">กลับสู่หน้าหลัก</a></li>
                    <li><a href="{{ url('/ActivityMainUser')}}">รูปภาพกิจกรรม</a></li>
                    <li class="active">สงกรานต์ ประจำปี 2559</li>
                </ul>
            </div>
            
</body>
@stop






@section('content')
<head>
    <title>ActivityUser</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville|Trirong' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/design.css" type="text/css" />
    <script src="js/photo-gallery.js"></script>


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
    background-image: url(images/bg1.jpg);
}
</style>


<body>


            <div class="col-md-12">
                    <br>
                    <br>
                <div align="right"><font color="black"><fontTh>อัพเดทวันที่ :</fontTh><fontEng> 2016-12-16</fontEng></font></div>
                    <br>
                    <br>
                    <br>
                    <center style="color:black; font-size:18px;"><b><fontTh>สงกรานต์ ประจำปี 2559</fontTh></b></center>
                    <br>
                    <center style="color:black; font-size:14px;"><fontTh>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เนื่องในวันดี พิธีสรงน้ำพระ ประจำปี 2559 ขอให้พุธศาสนิกชนทุกท่านจงมีแต่ความสุขความเจริญ ร่มเย็นตลอดไปด้วยเทอญ</fontTh></center>
                    <br>
                    <br>



                <ul class="row">
                <div>
                    <li class=" col-xs-4">
                        <img class="img-responsive" src="images/photodune-174908-rocking-the-night-away-xs.jpg">
                    </li>
                    <li class=" col-xs-4">
                        <img class="img-responsive" src="images/photodune-287182-blah-blah-blah-yellow-road-sign-xs.jpg">
                    </li>
                    <li class="col-xs-4">
                        <img class="img-responsive" src="images/photodune-460760-colors-xs.jpg">
                    <br>
                    </li>
                </div>
                            
                <div>
                    <li class="col-xs-4">
                        <img class="img-responsive" src="images/photodune-461673-retro-party-xs.jpg">
                    </li>
                    <li class=" col-xs-4">
                        <img class="img-responsive" src="images/photodune-514834-touchscreen-technology-xs.jpg">
                    </li>
                    <li class=" col-xs-4">
                        <img class="img-responsive" src="images/photodune-916206-legal-xs.jpg">
                    <br>
                    </li>
         
                </div>

                <div>
                    <li class="col-xs-4">
                        <img class="img-responsive" src="images/photodune-1062948-nature-xs.jpg">
                    </li>
                    <li class="col-xs-4">
                        <img class="img-responsive" src="images/photodune-1471528-insant-camera-kid-xs.jpg">
                    </li>
                    <li class="col-xs-4">
                        <img class="img-responsive" src="images/photodune-2255072-relaxed-man-xs.jpg">
                    <br>
                    </li>
                    
                </div>

                <div>
                    <li class="col-xs-4">
                        <img class="img-responsive" src="images/photodune-2360379-colors-xs.jpg">
                    </li>
                    <li class="col-xs-4">
                        <img class="img-responsive" src="images/photodune-2360571-jump-xs.jpg">
                    </li>
                    <li class=" col-xs-4">
                        <img class="img-responsive" src="images/photodune-2361384-culture-for-business-xs.jpg">
                    <br>
                    </li>
                    
                </div>
                </ul>
         
             
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">         
                  <div class="modal-body">                
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


        </div>




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
            </div>
                    
</body>

@stop