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
</style>
<body>
             @foreach($kingpin_state as $title)
                @if ($loop->first)
              <div class="container">
                  <ul class="breadcrumb">
                      <li><a href="{{ url('/')}}" style="font-size:18px;"><fontTh>กลับสู่หน้าหลัก</fontTh></a></li>
                      <li><a href="{{ url('/KingpinTypeUser')}}" style="font-size:18px;"><fontTh>สิ่งสำคัญภายในสำนักสงฆ์</fontTh></a></li>
                      <li class="active"><a href="javascript:void(0);" style="font-size:18px;"><fontTh>{{$title->kingpin_name}}</fontTh></a></li>
                  </ul>          
              </div>
                @endif
            @endforeach
            
</body>
@stop




@section('content')

<head>
    <title>ActivityUser</title>



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
</head>
<body>

            <div class="col-md-12">
                    <br>
                    <br>
                    <br>
                    @foreach($kingpin_state2 as $name)
                      @if ($loop->first)
                    <center style="color:#330033; font-size:24px;"><b><fontTh>{{$name->kingpin_name}}</fontTh></b></center>
                      @endif
                    @endforeach
                    <br>
                    <br>
                     @foreach($kingpin_state2 as $head)
                      @if ($loop->first)
                        <div align="center"><img class="full" src="{{asset('images/Kingpin/'.$head->kingpin_file_pic)}}" alt="page1"></div>
                     @endif
                    @endforeach
                    <br>

                    @foreach($kingpin_state2 as $info)
                      @if ($loop->first)
                    <div class="col-md-12">
                        <div align="left"><font color="black" style="font-size:18px;"><fontTh>{{$info->kingpin_detail}}</fontTh></font></div>               
                     <br>
                    </div>
                      @endif
                    @endforeach
 
          @foreach($kingpin_state as $row)
            
                <div> 
                  <ul >
                    <li class=" col-xs-4">
                        <img class="img-responsive" src="{{asset('images/Kingpin/'.$row->kingpin_file_pic)}}"><br>
                    </li>
                  </ul> 
                                          
                </div>
          @endforeach         
        


         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


			<br>
			<br>
			<br>

                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $kingpin_state->links() }}
                        </div>  
                    </div>
                </div>
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
</body>
</html>
@stop