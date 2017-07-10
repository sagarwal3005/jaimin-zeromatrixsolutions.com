@extends('apanel.master')
@section('title', 'Category')
@section('content')
   
   <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/parsley.css">

   	@php
		$i_category_id = '';
		$title = '';
		$description = '';
   @endphp
   

    <section class="content-header">
      @php $i_id = (isset($t_category) && !empty($t_category) ? $t_category[0]['id'] : '' ) @endphp
      <h1>
         Category {{ (!empty($i_id) ? 'Edit' : 'Add' ) }}
      </h1>
      
    </section>

    

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       
        <div class="col-md-12">
       <div class="box box-primary">
            
            @php $s_image = (isset($t_category) && !empty($t_category) ? $t_category[0]['category_image'] : '' ) @endphp
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" id="category_form" action="/apanel/category/create{{ (!empty($i_id) ? '/'.$i_id : '' ) }}" data-parsley-validate enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                 {!! csrf_field() !!}
                  <input type="hidden" name="category_id" value="{{ $i_category_id }}">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" id="title" data-parsley-required="true" data-parsley-trigger="change" value="{{ (isset($t_category) && !empty($t_category) ? $t_category[0]['title'] : '' ) }}">
                </div>
               

                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea name="description" class="form-control" id="description" data-parsley-required="true" data-parsley-trigger="change"> {{(isset($t_category) && !empty($t_category) ? $t_category[0]['description'] : '' )}} </textarea>
                </div>



                <div class="form-group">
                  <label >Upload Image</label>
                  <input type="file" name="category_image" class="form-control" id="category_image" {{ (empty($s_image) ? 'data-parsley-required="true"' : '' ) }}  data-parsley-trigger="change" >
                  @if(!empty($s_image))
                  		<img src="/images/category/{{ $s_image }}" width="100px" height="100px" />
                  @endif
                </div>

                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="save_btn" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

          </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
     
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

    @endsection


@section('footer')

<script src="{{ asset('admin') }}/dist/js/parsley.js"></script> 
<script type="text/javascript">
  


  


  function checkCategoryTitle(){
    var status = 1;
    if($('#title').val()){
          var category_id = '<?php echo $title; ?>';

          // $.ajax({
          //     url:'/apanel/checkCategoryTitle',
          //     type:'get',
          //     data:{category_id:category_id,title:$('#title').val()},
          //     dataType:'JSON',
          //     async:false,
          //     success:function(res){
          //         if(res.status==1){
          //             $('#title').val('');
          //             status = 0;
          //             alert('This Category Title is Already Exists');
          //         }
          //     },
          //     error:function(){
          //          alert('Something Went Wrong');
          //     }
          // })
        }
        return status;
  }

  $(document).on('blur','#title',function(){
      checkCategoryTitle();        
  })

  $('#save_btn').click(function(e){
     e.preventDefault();
     if(checkCategoryTitle() == 1){
        $('#category_form').submit();
     }
     
 });


</script>
@endsection	
