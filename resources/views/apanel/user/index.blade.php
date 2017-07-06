@extends('apanel.master')
@section('title', 'User')

  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.css">

@section('content')
   

   

    <section class="content-header">
      <h1>
         User List
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
                  <th>Name </th>
                  <th>Email </th>
                  <th>Active</th>
                </tr>
                </thead>
                <tbody>
                
                 
                  @if(!empty($t_users))
                    @foreach($t_users as $key=>$t_user)
                        <tr id="{{$t_user['id']}}">
                          <td>{{($key+1)}}</td>
                          <td> <img style="height: 50px;width: 50px" src="{{URL::to('/images/profile').'/'.$t_user['profile_image']}}"></td>
                          <td>{{$t_user['name']}}</td>
                          <td>{{$t_user['email']}}</td>
                            
                          <td>
                           <input type="checkbox" class="active_status" {{ ($t_user['is_active']==1 ? "checked" : "")}} > </td>                          
                        </tr>
                	                      
                  	@endforeach
                  @endif  
                  
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                  <th>Image</th>
                  <th>Name </th>
                  <th>Email </th>
                  <th>Active</th>
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

  
  $(document).on('click','.active_status',function(){
          var tr = $(this).closest('tr');
          is_active = 0;
          if($(this).prop("checked") == true){
              is_active=1;
          }
          $.ajax({
              url:'/apanel/user/changeStatus/',
              type:'POST',
              data:{id:tr.attr('id'),is_active:is_active,_token: "{{ csrf_token() }}"},
              dataType:'JSON',
              success:function(res){
                  if(res.status==0){
                      alert('Active Status Not Change.');
                  }
              },
              error:function(){
                   alert('Something Went Wrong.');
              }
          })
  })



</script>
@endsection
