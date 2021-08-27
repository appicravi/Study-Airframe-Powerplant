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
                                     <h5 class="title-5">Service List</h5>
                                      <div role="group" class="btn-group btn-group-sm">
									  <input type="text" class="form-control" id="search_service" placeholder="Search by NAME">
											<input type="hidden" class="form-control" id="crf" value="{{ csrf_token() }}">
                                          <a href="{{url('super-admin/add-service')}}" class="btn btn-sm btn-secondary">Add Service</a></div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
                                                <th style="color: #000;">ID</th>
                                                <th style="color: #000;">Name</th>                                                
                                                <th style="color: #000;">Charge</th>
                                                <th style="color: #000;">Count</th> 
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="allcust">
                                        @if($serviceList)
	@foreach($serviceList as $key => $service)
<tr class="tr-shadow" id="row_{{$service->id}}" style="border-top: 1px solid #ebe8f8;">
        <td>{{$service->id}}</td>
        <td>{{$service->ser_name}}</td>
		
		<td>{{$service->charge}}</td>
		 <td>{{$service->quantity}}</td>
        <td>
            <div class="table-data-feature">
				<a class="item" data-toggle="tooltip" data-placement="top" href="{{url('')}}/super-admin/edit-service/{{$service->id}}"><i class="zmdi zmdi-edit"></i></a>
				<a class="item deleteme" data-id="{{$service->id}}" data-type="service" data-token="{{ csrf_token() }}" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
            </div>
        </td>
    </tr>

   
	@endforeach
	@endif
                                        </tbody>
                                    </table>
                                </div>
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











