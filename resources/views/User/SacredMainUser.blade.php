@extends('site.layoutuser')
@section('menutop')
<body>
            <div class="col-md-11 col-xs-11" >
                <ul class="breadcrumb" style="padding-top: 8px;margin-bottom: 0px;margin-left: 150px;margin-right: 25px;">
                    <li><a href="{{ url('/')}}">กลับสู่หน้าหลัก</a></li>
                    <li><a href="{{ url('/SacredTypeUser')}}">ประเภทของวัตถุมงคล</a></li>
                    <li class="active">พระเครื่อง</li>
                </ul>
            </div>
            
</body>
@stop




@section('content')
<body>

            <div class="col-md-12">

                    <br>
                    <br>
                 @foreach ($sacred_object as $row)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a class="grid__link" href="{{ url('/SacredUser')}}">
                            <img class="grid__img" src="{{'images/resize/'.$row->sacredmain_pic}}" alt="Some image" />
                            <div class="grid__item-title" style="font-size:14px;">{{$row->sacred_name}}</div>
                        </a>
                    </div>
                </div>
                @endforeach
               

                    
				<div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $sacred_object->links() }}
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