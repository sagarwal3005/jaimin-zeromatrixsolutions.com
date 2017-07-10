@extends('apanel.master')
@section('title', 'Society')

  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.css">
@section('content')
   
    <section class="content-header">
      <h1>
         Society
      </h1>
      
    </section>

  @if(Session::has('s'))
      <div class="alert alert-success" style="width:auto;float:right"><span class="glyphicon glyphicon-ok"></span><em> {!! session('s') !!}</em></div>
 @endif

  @if(Session::has('e'))
      <div class="alert alert-error" style="width:auto;float:right"><span class="glyphicon glyphicon-ok"></span><em> {!! session('e') !!}</em></div>
  @endif


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
                  <th>Name</th>
                  <th>Address Line 1</th>
                  <th>Country</th>
                  <th>State</th>
                  <th>City</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                 
                  @if(!empty($t_societies))
                    @foreach($t_societies as $key=>$t_society)
                        <tr id="{{$t_society['id']}}">
                          <td>{{($key+1)}}</td>
                          <td> <img style="height: 50px;width: 50px" src="{{URL::to('/images/society').'/'.$t_society['society_image']}}"></td>
                          <td>{{$t_society['name']}}</td>                            
                          <td>{{$t_society['address_line_1']}}</td>                            
                          <td>{{$t_society['country_name']}}</td>                            
                          <td>{{$t_society['state_name']}}</td>                            
                          <td>{{$t_society['city_name']}}</td>                            
                          <td><a href="/apanel/society/edit/{{$t_society['id']}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                           <span class="delete_society"><i class="fa fa-trash-o" aria-hidden="true"></i></span></td>                          
                        </tr>
                	                      
                  	@endforeach
                  @endif  
                  
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Address Line 2</th>                  
                  <th>Country</th>
                  <th>State</th>
                  <th>City</th>
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

  
$(document).on('click','.delete_society',function(){
    if(confirm('Are you sure to want to delete Society?')){
      if($(this).closest('tr').attr('id')){
          var tr = $(this).closest('tr');
          $.ajax({
              url:'/apanel/society/delete/'+tr.attr('id'),
              type:'GET',
              dataType:'JSON',
              success:function(res){
                  if(res.flag){
                      table.row(tr.get(0)).remove().draw();    
                      alert('Society Deleted Successfully.');
                  }else{
                      alert('Society Not Deleted.');
                  }
              },
              error:function(){
                   alert('Society Not Deleted.');
              }
          })
      }
    }
  })


</script>
@endsection
