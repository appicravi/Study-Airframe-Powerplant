@include('inc.header')
<?php $checkLogin = session('user_id'); ?>
<div class="page-wrapper">
        @include('inc.adminSidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('inc.adminHeader')
            <button type="button" id="modal" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" hidden='hidden'>
				Launch demo modal
			  </button>
			  
			  <!-- Modal -->
			  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="modal-body">
						<form action="" id="assign_cl" method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Cleaners</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="cleaner" id="cleaner" class="form-control" required>
										<option value="">Choose Cleaner</option>
										@if($cleaners)
										@foreach($cleaners as $cleaner)
										<option value="{{$cleaner->id}}">{{$cleaner->first_name}}</option>
										@endforeach
										@endif
									</select>
								</div>
							</div>
						
							<div class="row card-footer">
								<div class="col col-md-3">
								   &nbsp;
								</div>
								<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						
								<input type="hidden" name="booking_id" id="id" value="{{$changeList[0]['booking_id']}}">
								{{-- {{-- <input type="hidden" name="date" id="id" value="{{$bookList->date}}"> --}}
								<input type="hidden" name="type"  value="change">								
								<div class="col-12 col-md-9">
									<button type="submit" class="btn btn-primary">
										<i class="fa fa-dot-circle-o"></i> Assign
									</button>
									<button type="reset" class="reset" style="display:none;">reset </button>
									<button type="button" id="close" class="btn btn-secondary"  data-dismiss="modal">
										<i class="fa fa-ban"></i> Close
									</button>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									&nbsp;
								</div>
								<div class="col-12 col-md-9">
									<div class="result"></div>
								</div>
							</div>
						</form>
					</div>
					
				  </div>
				</div>
			  </div>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="card-header d-flex justify-content-between align-items-center">
                                     <h5 class="title-5">Change Cleaner Requests List</h5>
                                    <div class="table-data__tool">
                                    <div class="table-data__tool-left">
										<form action="" id="filter" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="rs-select2--light rs-select2--md" style="width: 200px;">
											<input type="text" id="date" name="date" class="form-control" placeholder="Filter by date">
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="status" id="status">
                                                <option value="" selected="selected">Filter by status</option>
												<option value="Pending">Pending</option>
												<option value="Changed">Changed</option>	
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
										<input type="hidden" name="search_type" value="filter_change">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" id="sub" class="au-btn-filter filterdata">
                                            <i class="zmdi zmdi-filter-list"></i>filter
										</button>
										<button type="button" id="clear" class="au-btn-filter" style="background:red; color:#fff;">
                                            <i class="zmdi zmdi-format-clear-all"></i>Clear Data
										</button>
										
										</form>
                                    </div>
                                </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
												<th style="color: #000;">Booking ID</th>
                                                {{-- <th style="color: #000;">Customer</th> --}}
												<th style="color: #000;">Cleaner Name</th>
                                                <th style="color: #000;">Status</th>	
                                                <th style="color: #000;">Time</th>							
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="search_data">
                                        @if($changeList)
                                            @foreach($changeList as $key => $change)
                                       <tr class="tr-shadow" id="row_{{$change['id']}}" style="border-top: 1px solid #ebe8f8;">
												<td>#{{$change['booking_id']}}</td>
                                                <td>{{$change['cleaner']}}</td>
                                                {{-- <td>{{$change['time']}}</td>												 --}}
                                                <td>{{$change['status']}}</td>
												<td>{{$change['creaetd_at']}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <input type="hidden" id="book" name="book" value="{{$change['booking_id']}}">
                                                        <input type="hidden" id="_token" name="_token" value="{{ csrf_token()}}">                                            
                                                       @if($change['status']=='Changed') <button type="button" id="change" class="btn btn-primary small" disabled>Changed</button>@else<button type="button" id="change" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary small">Change</button>@endif
                                                        {{-- <a class="item" data-toggle="tooltip" data-placement="top" href="{{url('')}}/super-admin/view-request/{{$change['id']}}"><i class="zmdi zmdi-view-list"></i></a> --}}
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
                        
                      
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
      @include('inc.adminFooter')
@include('inc.footer')
