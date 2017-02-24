@extends('site.layoutuser')
@section('menutop')
<body>
            <div class="col-md-11 col-xs-11" >
                <ul class="breadcrumb" style="padding-top: 8px;margin-bottom: 0px;margin-left: 150px;margin-right: 25px;">
                    <li><a href="{{ url('/')}}">กลับสู่หน้าหลัก</a></li>
                    <li class="active">ทำเนียบเจ้าอาวาส</li>
                </ul>
            </div>
            
</body>
@stop

@section('content')
<body>
   
            <div class="col-md-12">
                <br>
                <br>
                <br>
                <center style="color:black; font-size:18px;"><b><fontTh>ทำเนียบเจ้าอาวาส</fontTh></b></center>



                 @foreach ($directory as $row)
                <div class="col-md-4">
                    <br>
                    <br>
                    <div align="center"><img src="images/pic1.jpg" width="170" height="200"></div>
                    <div align="center"><font color="black" style="font-size:14px;"><b><fontTh><a href="{{ url('DirectoryUser')}}">{{$row->directory_name}}<br>({{$row->directory_time}})</a></fontTh></b></center></font>
                   </div>                
                </div>
                @endforeach
               
 

                <br>
                <br>



                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $directory->links() }}
                        </div>  
                    </div>
                </div>
                <br>
                <br>


</body>
</html>
@stop