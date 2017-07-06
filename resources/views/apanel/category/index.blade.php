@extends('apanel.master')
@section('title', 'Category')

  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.css">

@section('content')
   

   

    <section class="content-header">
      <h1>
         Category
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
    	 <div class="row">
        <div class="col-xs-12">

          <div class="box">
            
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Title </th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                 
                  @if(!empty($t_categories))
                    @foreach($t_categories as $key=>$t_category)
                        <tr id="{{$t_category['id']}}">
                          <td>{{($key+1)}}</td>
                          <td> <img style="height: 50px;width: 50px" src="{{URL::to('/images/category').'/'.$t_category['category_image']}}"></td>
                          <td>{{$t_category['title']}}</td>
                            
                          <td><a href="/apanel/category/edit/{{$t_category['id']}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                           <span class="delete_category"><i class="fa fa-trash-o" aria-hidden="true"></i></span></td>                          
                        </tr>
                	                      
                  	@endforeach
                  @endif  
                  
                </tbody>
                <tfoot>
                <tr>
                   <th>#</th>
                  <th>Image</th>
                  <th>Title </th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->

    @endsection

@section('footer')

<script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.min.js"></script>


<script type="text/javascript">
  

    var table = $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "aaSorting": [],
      'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': [-1] /* 1st one, start by the right */
      }]
    });

  
$(document).on('click','.delete_category',function(){
    if(confirm('Are you sure to want to delete Category?')){
      if($(this).closest('tr').attr('id')){
          var tr = $(this).closest('tr');
          $.ajax({
              url:'/apanel/category/delete/'+tr.attr('id'),
              type:'GET',
              dataType:'JSON',
              success:function(res){
                  if(res.flag){
                      table.row(tr.get(0)).remove().draw();    
                      alert('Delete Successfully.');
                  }else{
                      alert('Category Not Delete.');
                  }
              },
              error:function(){
                   alert('Category Not Delete.');
              }
          })
      }
    }
  })


</script>
@endsection
