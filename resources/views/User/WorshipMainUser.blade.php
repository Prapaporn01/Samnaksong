@extends('site.layoutuser')
@section('menutop')
<body>
            <div class="col-md-11 col-xs-11" >
                <ul class="breadcrumb" style="padding-top: 8px;margin-bottom: 0px;margin-left: 150px;margin-right: 25px;">
                    <li><a href="{{ url('/')}}">กลับสู่หน้าหลัก</a></li>
                    <li class="active">เครื่องสักการะบูชา</li>
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
                     <center style="color:black; font-size:18px;"><b><fontTh>เครื่องสักการะบูชา</fontTh></b></center>
                    <br>
                    <br>
                    <br>


                @foreach ($worship as $row)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a class="grid__link" href="{{ url('/WorshipUser')}}">
                            <img class="grid__img" src="{{'images/resize/'.$row->worshipmain_pic}}" alt="Some image" />
                            <div class="grid__item-title" style="font-size:14px;">{{$row->worship_name}}</div>
                        </a>
                    </div>
                </div>
                @endforeach
                    
				<div class="row">
                    <div class="col-md-12">
                        <div align="center">
                            {{$worship->links() }}
                        </div>  
                    </div>
                </div>
                <br>
                <br>



                </div>




                
                     
            </div>


</body>
</html>
@stop