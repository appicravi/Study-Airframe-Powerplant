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
                                     <h5 class="title-5">Agents List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
									  <input type="text" class="form-control" id="searchcleaner" placeholder="Search by NAME">
											<input type="hidden" class="form-control" id="crf" value="{{ csrf_token() }}">
                                          <a href="{{url('super-admin/add-agent')}}" class="btn btn-sm btn-secondary">Add Agents</a></div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">ID</th>
                                                <th style="color: #000;">Name</th>
                                                <th style="color: #000;">Email</th>
												<!-- <th style="color: #000;">Address</th> -->
                                                <th style="color: #000;">Phone</th>
                                                <!-- <th style="color: #000;">Description</th>
                                                <th style="color: #000;">Reviews</th> -->
                                                 <th style="color: #000;">Action</th> 

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="allcust">
                                        @if($cleanerList)
                                                @foreach($cleanerList as  $cleaner)
                                            <tr class="tr-shadow" id="row_{{$cleaner->id}}" style="border-top: 1px solid #ebe8f8;">
                                                    <td>{{$cleaner->id}}</td>
                                                    <td>{{$cleaner->name}}</td>
                                                    <td>{{$cleaner->email}}</td>
                                                    
                                                    <td>{{$cleaner->phone}}</td>
                                                    <td><a href="#" class="btn btn-secondary">Active</a></td>

                                                    
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a class="item" data-toggle="tooltip" data-placement="top" href="{{url('')}}/super-admin/edit-agent/{{$cleaner->id}}"><i class="zmdi zmdi-edit"></i></a>
                                                            <a class="item deleteme" data-id="{{$cleaner->id}}" data-type="cleaner" data-token="{{ csrf_token() }}" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>


                                            
                                                @endforeach
                                                @endif
                                              </tbody>
                                            </table>
                                        </div>
                                        {{ $cleanerList->links() }}
                                <!-- END DATA TABLE -->
                            </div>
                        </div>

                         <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                        <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />


   
                        
                       
                    </div>
                </div>
            </div>
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