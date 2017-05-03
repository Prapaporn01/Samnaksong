@extends('site.layoutforuser')
@section('menutop')
<html>
<head>
    <title>Persons</title>
    <meta name="description" content="สำนักสงฆ์สิริมงคล หรือ วัดแม่เตี๊ยะใต้ อำเภอจอมทอง จังหวัดเชียงใหม่ เป็นสำนักสงฆ์ที่มีความสงบ ร่มรื่น ควรค่าแก่การอนุลักษณ์ให้พุธศาสนิกชนได้ศึกษา"/>
    <meta name="keywords" content="สำนักสงฆ์สิริมงคล,วัดแม่เตี๊ยะใต้,จอมทอง,เชียงใหม่,วัด,บุคคล,บุคคลสำคัญ,Samnaksong Siri Mongkon"/>
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
                      <li class="active"><a href="javascript:void(0);" style="font-size:18px;"><fontTh>บุคคลสำคัญที่เกี่ยวข้อง</fontTh></li>
                </ul>       
            </div>   
</body>
@stop


@section('content')
<style>
div.imgpersons {
    margin: 15px;
    border: 1px solid  #337ab7;
    float: left;
    width: 100%;
    background-color:  #ebd382;

}

div.imgpersons:hover {
    border: 1px solid #777;
}

div.imgpersons img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 0px;
    text-align: center;
}

.modal-header
 {
    padding:0px 0px;
    border-bottom:0px solid #eee;
    background-color: #cc9933;
    border-radius: 5px; 
 }
 .modal-body
 {
    border-radius: 5px;
    background-color: #cccc66;
 }
</style>




<body>

            <div class="col-md-12">
                <br>
                <br>
                <br>
                <center style="color:#330033; font-size:24px;"><b><fontTh>บุคคลสำคัญที่เกี่ยวข้อง</fontTh></b></center>

                <br>
                <br>


                 @foreach ($related_persons as $row)

           
                <div class="col-md-4">
                    <div class="imgpersons" >
                        <div>
                        <button><img class="grid__img" src="{{ 'images/Persons/'.$row->person_file_pic }}" alt="Trolltunga Nor<td>way" width="300" height="200" href="#Modal_{{$row->person_id }}" class="btn btn-default btn-sm" data-toggle="modal" type="button"></button>
                         <div class="grid__item-title" style="font-size:18px;color:#337ab7;" ><fontTh>{{$row->person_name}}</fontTh></div>
                                <div class="modal fade" id="Modal_{{ $row->person_id  }}" role="dialog" >
                                    <div class="modal-dialog modal-sm" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>                    
                                            <div class="modal-body">

                                                <p style="font-size:18px;color:#663300;"><b>{{$row->person_name}} </b></p><br>
                                                <p style="font-size:16px;color:black;">{{$row->person_detail}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>  
                    </div>
                </div>
                @endforeach

               
                

                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $related_persons->links() }}
                        </div>  
                    </div>
                </div>
                <br>
                <br>
            </div>
    </div>

</body>
@stop