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
        <br>

            <table class="table table-striped table-bordered ">
                    <thead  >
                      <tr >
                        <th width="30%">รูปสิ่งสำคัญภายในสำนักสงฆ์</th>
                        <th width="5%"></th>
                      </tr>
                    </thead>
                    <tbody>

                     <?php foreach ($news_pic as $row) { ?>
                      <tr>
                        <td>   
                                               
                            <img src='../images/resize/<?php echo $row->news_file_pic; ?>'>
                        </td>
                            <td>
                        <?= Form::open(array('url' => 'Newspicadmin/' . $row->news_pic_id,
                        'method' => 'delete')) ?>
                        <button class="btn btn-danger btn-lg active btn-sm" type="submit">ลบ</button>
                        {!! Form::close() !!}
                      </td> 
                       

                                        
                      </tr>
                      <?php } ?>
                    </tbody>
            </table>

                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                             {{ $news_pic->links() }}
                        </div>  
                    </div>
                </div>
        </div>

   

</body>

</html>
@stop