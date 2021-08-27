@include('inc.header')
<?php $checkLogin = session('user_id'); ?>
<div class="page-wrapper">
        @include('inc.adminSidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('inc.adminHeader')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            
                                <!-- DATA TABLE -->
                                
                                <div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">User List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
									  <input type="text" class="form-control" id="searchcust-1" onkeyup="betterFunction()" placeholder="Search by NAME">
											<input type="hidden" class="form-control" id="crf" value="{{ csrf_token() }}">
                                          <a href="{{url('super-admin/add-user')}}" class="btn btn-sm btn-secondary">Add User</a></div>
                                </div>
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">ID</th>
                                                <th style="color: #000;">Name</th>
                                                
                                                <th style="color: #000;">Email</th>
                                                <!-- <th style="color: #000;">Phone</th> -->
                                                <th style="color: #000;">date</th> 
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="allcust">
                                        @if($customertList)
	@foreach($customertList as $key => $customert)
<tr class="tr-shadow" id="row_{{$customert->id}}" style="border-top: 1px solid #ebe8f8;">
        <td>{{$customert->id}}</td>
        <td>{{$customert->name}}</td>
		
		<td>{{$customert->email}}</td>
        <!-- <td>{{$customert->phone}}</td> -->
		 <td>{{$customert->created_at}}</td>
         <td>
           <input id="status" data-id="{{ $customert->id }}" type="checkbox" @if($customert->status) checked @endif>        
        </td>
        <td>
            <div class="table-data-feature">
				<a class="item" data-toggle="tooltip" data-placement="top" href="{{url('')}}/super-admin/edit-user/{{$customert->id}}"><i class="zmdi zmdi-edit"></i></a>
				<a class="item deleteme" data-id="{{$customert->id}}" data-type="customer" data-token="{{ csrf_token() }}" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
            </div>
        </td>
    </tr>

   
	@endforeach
	@endif
                                        </tbody>
                                    </table>
                                </div>
                                {{ $customertList->links() }}
                                
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <a href="{{url('super-admin/dashboard')}}"><i class="fas fa-arrow-left"></i></a>
                         <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                        <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />


   
                        
                       
                    </div>
                </div>
            </div>
            @include('inc.footer')
            <script>
     $(document).ready(function(){
        var host = 'education';
        $("input").change(function(){
           var data= $(this).data('id');
            $.ajax({
                type:'post',
                url: "/"+host+"/actions/changeStatus",
                data:{
                    id:data,
                    _token:$("#token").val(),
                },
                success: function(response){
                    var obj=JSON.parse(response);
                    if(obj.status){
                        location.reload();
                    }else{

                    }
                }
            })
        })
    });
    </script>
            <script>
                var host = 'education';
                let counter=0;
                const getData =() =>{
                    jQuery.ajax({
                        type: 'post',
                        url: '/'+host+'/actions/searchCustomer',
                        data: { 
                            key: jQuery("#searchcust-1").val(),
                            _token: jQuery("#crf").val()
                        },
                        success: function(data) {
                            var obj = JSON.parse(data);
                            if(obj.status==true){
                                jQuery('#allcust').html(obj.data);
                            }else{
                                jQuery('#allcust').html('No data found');
                            }
                        }
                    });
                    console.log("fetch data",counter++);
                }

                const Magic = function(fn,d){
                    let timer;

                    return function (){
                        let context=this;
                        args=arguments;
                        clearTimeout(timer);
                        timer = setTimeout( () =>{
                            getData.apply(context,arguments);
                        },d);
                    }
                }
                const betterFunction =Magic(getData,300);
            </script>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
     @include('inc.adminFooter')
@include('inc.footer')











<script>
$(document).ready(function(){

   

 function clear_icon()
 {
  $('#id_icon').html('');
  $('#post_title_icon').html('');
 }

 function fetch_data(page, sort_type, sort_by, query)
 {
  $.ajax({
  //  url: '/'+host+'/actions/addRestaurant',
   url:"/rcontrol/super-admin/customerlist/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
   success:function(data)
   {
    $('tbody').html('');
    $('tbody').html(data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){   
  var query = $('#search').val();
  var column_name = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();
  var page = $('#hidden_page').val();
  fetch_data(page, sort_type, column_name, query);
 });

 $(document).on('click', '.sorting', function(){
  var column_name = $(this).data('column_name');
  var order_type = $(this).data('sorting_type');
  var reverse_order = '';
  if(order_type == 'asc')
  {
   $(this).data('sorting_type', 'desc');
   reverse_order = 'desc';
   clear_icon();
   $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
  }
  if(order_type == 'desc')
  {
   $(this).data('sorting_type', 'asc');
   reverse_order = 'asc';
   clear_icon
   $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
  }
  $('#hidden_column_name').val(column_name);
  $('#hidden_sort_type').val(reverse_order);
  var page = $('#hidden_page').val();
  var query = $('#serach').val();
  fetch_data(page, reverse_order, column_name, query);
 });

 $(document).on('click', '.pagination a', function(event){ alert('hi');
  event.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  $('#hidden_page').val(page);
  var column_name = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();

  var query = $('#serach').val();

  $('li').removeClass('active');
        $(this).parent().addClass('active');
  fetch_data(page, sort_type, column_name, query);
 });

});
</script>