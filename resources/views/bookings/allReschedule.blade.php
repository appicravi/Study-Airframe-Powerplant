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
                                     <h5 class="title-5">Reschedule List</h5>
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
												<option value="Assign">Reshedule</option>	
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
										<input type="hidden" name="search_type" value="filter_reschedule">
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
												<th style="color: #000;">Reschedule Date</th>
                                                <th style="color: #000;">Reschedule Time</th>
                                                <th style="color: #000;">Status</th>	
                                                <th style="color: #000;">Time</th>							
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="search_data">
                                        @if($rescheduleList)
                                            @foreach($rescheduleList as $key => $reschedule)
                                       <tr class="tr-shadow" id="row_{{$reschedule['id']}}" style="border-top: 1px solid #ebe8f8;">
												<td>#{{$reschedule['booking_id']}}</td>
                                                <td>{{$reschedule['date']}}</td>
                                                <td>{{$reschedule['time']}}</td>												
                                                <td>{{$reschedule['status']}}</td>
												<td>{{$reschedule['creaetd_at']}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                          <input type="hidden" id="_token" name="_token" value="{{ csrf_token()}}">                                            
                                                       @if($reschedule['status']=='Rescheduled') <button type="button" id="reschedule" class="btn btn-primary small" disabled>Rescheduled</button>@else<button type="button" id="reschedule" data-id="{{$reschedule['booking_id']}}" class="btn btn-primary small">Reschedule</button>@endif
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
