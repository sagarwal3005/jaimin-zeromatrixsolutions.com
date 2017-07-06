@extends('apanel.master')
@section('title', 'Society')
@section('content')
   
   <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/parsley.css">   

    <section class="content-header">
      @php $i_id = (isset($t_society) && !empty($t_society) ? $t_society[0]['id'] : '' ) @endphp
      <h1>
         Society {{ (!empty($i_id) ? 'Edit' : 'Add' ) }}
      </h1>

       @php $s_image = (isset($t_society) && !empty($t_society) ? $t_society[0]['society_image'] : '' ) @endphp
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       
        <div class="col-md-12">
       <div class="box box-primary">
            
            @php $i_country_id = (isset($t_society) && !empty($t_society) ? $t_society[0]['country_id'] : '' ) @endphp
            @php $i_state_id = (isset($t_society) && !empty($t_society) ? $t_society[0]['state_id'] : '' ) @endphp
            @php $i_city_id = (isset($t_society) && !empty($t_society) ? $t_society[0]['city_id'] : '' ) @endphp
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" id="societyform" action="/apanel/society/create{{ (!empty($i_id) ? '/'.$i_id : '' ) }}" data-parsley-validate  autocomplete="off" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                 {!! csrf_field() !!}
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-parsley-required="true" data-parsley-trigger="change" value="{{ (isset($t_society) && !empty($t_society) ? $t_society[0]['name'] : '' ) }}">
                </div>
               

                  <div class="form-group">
                  <label >Upload Image</label>
                  <input type="file" name="society_image1" class="form-control" id="society_image" {{ (empty($s_image) ? 'data-parsley-required="true"' : '' ) }}  data-parsley-trigger="change" >
                  @if(!empty($s_image))
                      <img src="/images/society/{{ $s_image }}" width="100px" height="100px" />
                  @endif
                </div>



                <div class="form-group">
                  <label for="exampleInputPassword1">Address Line 1</label>
                  <textarea name="address_line_1" class="form-control" id="address_1" data-parsley-required="true" data-parsley-trigger="change"> {{(isset($t_society) && !empty($t_society) ? $t_society[0]['address_line_1'] : '' )}} </textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Address Line 2</label>
                  <textarea name="address_line_2" class="form-control" id="address_1" > {{(isset($t_society) && !empty($t_society) ? $t_society[0]['address_line_2'] : '' )}} </textarea>
                </div>

                
                <div class="form-group">
                  <label for="exampleInputPassword1">Country</label>
                  <select id="country" name="country_id" data-parsley-required="true" onchange="getStates(this);" >
                    <option value="">Select Country</option>
                    @if(!empty($t_countries))
                        @foreach($t_countries as $o_country)
                            <option value="{{ $o_country->id }}" {{ ($i_country_id == $o_country->id ? 'selected' : '' ) }} >{{ $o_country->country_name }}</option>
                        @endforeach
                    @endif
                  </select>
                </div>    

                <div class="form-group">
                  <label for="exampleInputPassword1">State</label>
                  <select id="state" name="state_id" data-parsley-required="true" onchange="getCities(this);">
                    <option value="">Select State</option>
                  </select>
                </div>   

                <div class="form-group">
                  <label for="exampleInputPassword1">City</label>
                  <select id="city" name="city_id" data-parsley-required="true">
                    <option value="">Select City</option>
                  </select>
                </div>  

                <div class="form-group">
                  <label for="exampleInputEmail1">Pin</label>
                  <input type="text" name="pin" class="form-control" id="pin" data-parsley-type="digits" data-parsley-maxlength="8" data-parsley-minlength="4" data-parsley-required="true" data-parsley-trigger="change" value="{{ (isset($t_society) && !empty($t_society) ? $t_society[0]['pin'] : '' ) }}">
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

    var i_state_id = '{{ $i_state_id }}';
    var i_city_id = '{{ $i_city_id }}';
    var load_time_flag = 1;
    if($('#country').val()){
        $('#country').change();
    }
    
    function getStates(obj) {
        $('#state').html('<option value="">Select State</option>');
        $('#city').html('<option value="">Select City</option>');
        if($(obj).val()){            
            $.ajax({
                url:'/apanel/society/getStates',
                type:'get',
                data:{country_id:$(obj).val()},
                dataType:'JSON',
                success:function(res){
                    if(res.flag && res.states){                        
                        $.each(res.states,function(i,val){
                            $('#state').append('<option value="'+val.id+'" '+(load_time_flag ==1 && val.id == i_state_id ? 'selected' : '' )+' >'+val.state_name+'</option>');
                        });
                        if(i_city_id){
                            $('#state').change();
                        }
                    }
                }
            })
        }
    } 

    function getCities(obj) {
        $('#city').html('<option value="">Select City</option>');
        if($(obj).val()){            
            $.ajax({
                url:'/apanel/society/getCities',
                type:'get',
                data:{state_id:$(obj).val()},
                dataType:'JSON',
                success:function(res){
                    if(res.flag && res.cities){                        
                        $.each(res.cities,function(i,val){
                            $('#city').append('<option value="'+val.id+'" '+(val.id == i_city_id ? 'selected' : '' )+' >'+val.city_name+'</option>');
                        });
                    }
                }
            })
        }
    }



</script>


@endsection	
