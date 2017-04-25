<?php
session_start();

    if(!isset($_SESSION['username'])){
        return redirect()->action('AdloginController@index');
    }
?>
@extends('site.layoutadmin')
@section('content')

<style type="text/css">
    .pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  background-color:  #8a6d3b;
}

.pagination > li > a,
.pagination > li > span {
  color: #8a6d3b;
}

</style>

<body>        
        
        <div class="col-md-9">
            <?php if(empty($worship_pic)){ ?> 
            <a href="{{ url ('/Worship') }}" class="btn btn-info btn-lg "  style='float:left; margin-top:5px; margin-left:5px;'>Back</a>   
            <a href="{{url('Subpicworship/'.$empty.'/create')}}" class="btn btn-info btn-lg "  style='float:right;margin-bottom:5px; margin-top:5px;'>เพิ่มรูปภาพในอัลบัม</a>
            <?php }?>

           <?php if(!empty($worship_pic)){ ?>
            <a href="{{ url ('/Worship') }}" class="btn btn-info btn-lg "  style='float:left; margin-top:5px; margin-left:5px;'>Back</a>
            <div><a href="{{url('Subpicworship/'.$worship_pic[0]->worship_id.'/create')}}" class="btn btn-info btn-lg "  style='float:right;margin-top:5px;margin-bottom:5px; '>เพิ่มรูปภาพในอัลบัม</a></div>
            

            <table class="table table-striped table-bordered ">
                    <thead  >
                      <tr >
                        <th width="30%">รูปเครื่องสักการะบูชา</th>
                        <th width="5%">ลบ</th>
                      </tr>
                    </thead>
                    <tbody>
                   
                     <?php foreach ($worship_pic as $row) { ?>
                      <tr>
                        <td>   
                                               
                            <img src='../images/resize/<?php echo $row->worship_file_pic; ?>'>
                        </td>


                        <td>

                          <?= Form::open(array('url' => '/Worshippic/' . $row->worship_pic_id,
                        'method' => 'delete')) ?>
                        <button href="#delete{{$row->worship_pic_id }}" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('ต้องการลบรูปภาพเครื่องสักการะบูชา?')" type="submit">ลบ</button>


                         
                          {!! Form::close() !!}
                        </td> 
                       
                     
                                        
                      </tr>
                      <?php } ?>
                    
                    </tbody>
            </table>


             <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $worship_pic->links() }}
                        </div>  
                    </div>
                </div>
                  <?php }?>
        </div>

   

</body>

</html>
@stop