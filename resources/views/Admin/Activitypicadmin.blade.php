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
         <?php if(empty($activities_pic)){ ?> 
            <a href="{{ url ('/Activity') }}" class="btn btn-info btn-lg "  style='float:left; margin-top:5px; margin-left:5px;'>Back</a>   
            <a href="{{url('Subpicactivity/'.$empty.'/create')}}" class="btn btn-info btn-lg "  style='float:right;margin-bottom:5px; margin-top:5px;'>เพิ่มรูปภาพในอัลบัม</a>
        <?php }?>

       <?php if(!empty($activities_pic)){ ?>
          <a href="{{ url ('/Activity') }}" class="btn btn-info btn-lg "  style='float:left; margin-top:5px; margin-left:5px;'>Back</a>
          <div>
          <a href="{{url('Subpicactivity/'.$activities_pic[0]->activities_id.'/create')}}" class="btn btn-info btn-lg "  style='float:right;margin-top:5px;margin-bottom:5px; '>เพิ่มรูปภาพในอัลบัม</a></div>

            <table class="table table-striped table-bordered ">
                    <thead  >
                      <tr >
                        <th width="30%">รูปกิจกรรม</th>
                        <th width="5%"></th>
                      </tr>
                    </thead>
                    <tbody>

                     <?php foreach ($activities_pic as $row) { ?>
                      <tr>
                        <td>                                
                            <img src='../images/resize/<?php echo $row->activities_file_pic; ?>'>
                        </td>



                         <?= Form::open(array('url' => 'Activitypic/' . $row->activities_pic_id,
                        'method' => 'delete')) ?> 
                        <td>
                        <button href="#delete{{$row->activities_pic_id }}" type="submit" class="btn btn-danger btn-lg active btn-sm" onclick="return confirm('ต้องการลบรูปภาพกิจกรรม?')" >ลบ</button>
                        </td>
                           
                        {!! Form::close() !!}
                                        
                      </tr>
                      <?php } ?>
                    </tbody>
            </table>


             <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $activities_pic->links() }}
                        </div>  
                    </div>
                </div>
                <?php }?>
        </div>
</body>

</html>
@stop