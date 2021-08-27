@include('inc.header')
<?php $checkLogin = session('user_id'); ?>
<div class="page-wrapper">
        @include('inc.adminSidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('inc.adminHeader')

			{{-- model --}}
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
						
								<input type="hidden" name="booking_id" id="id" value="{{$bookList->booking_id}}">
								<input type="hidden" name="date" id="id" value="{{$bookList->date}}">
								<input type="hidden" name="time" id="id" value="{{$bookList->time}}">								
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
								<div class="card-header d-flex justify-content-between align-items-center">
									<h5>Booking</h5> #{{$bookList->booking_id}}</h5> 
									<div role="group" class="btn-group btn-group-sm">
										<select name="option" id="option" class="form-control" 
										@if($bookList->status=='Cancelled' || $bookList->status=='Completed') disabled @endif>
											<option value="Pending" @if($bookList->status=='Pending') selected @endif>Pending</option>
		<a href="#" data-toggle="modal" data-target="#exampleModal" > <option value="Assign" id="assign"  @if($bookList->status=='Assign') selected @endif>Assign</option></a>
											{{-- <option value="On the Way" @if($bookList->status=='On the Way') selected @endif>On the Way</option> --}}
											<option value="Completed" @if($bookList->status=='Completed') selected @endif>Completed</option>
											<option value="Cancelled" @if($bookList->status=='Cancelled') selected @endif>Cancelled</option>
										</select> &nbsp;&nbsp;&nbsp;&nbsp;
										<input type="hidden" id="metype" value="item">
										<input type="hidden" id="makehidden" value="{{$bookList->booking_id}}">
										<input type="hidden" id="token" value="{{ csrf_token() }}">
										<button onclick="printDiv('printme')" class="btn btn-sm btn-secondary"><i class="fa fa-fw fa-print"></i> Print</button>
									</div>
								</div>
								<div id="printme">
								
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Booking Id</strong>  <span>{{$bookList->booking_id}}</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Schedule date</strong>  <span>{{$bookList->date}}</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Schedule time</strong>  <span>{{$bookList->time}}</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Total Amount</strong>  <span>${{$bookList->Amount}}</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Customer Name</strong>  <span>@if($bookList->fname){{$bookList->fname." ".$bookList->lname}}@endif</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Address</strong>  <span>{{$bookList->apartment."  ".$bookList->street." ".$bookList->city}}</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>State</strong>  <span>{{$bookList->state}}</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										
									
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Zip Code</strong>  <span>{{$bookList->code}}</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Special Request</strong>  <span>@if($bookList->sp_request){{$bookList->sp_request}}@endif</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Cleaner Request</strong>  <span>@if($bookList->cleaner_rq){{$bookList->cleaner_rq}}@endif</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Bedrooms</strong>  <span>@if($bookList->bedroom){{$bookList->bedroom}}@endif</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Bathrooms</strong>  <span>@if($bookList->bath){{$bookList->bath}}@endif</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>How Often </strong>  <span>@if($bookList->how_often){{$bookList->how_often}}@endif</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Subsciption</strong>  <span>@if($bookList->subs){{$bookList->subs}}@endif</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Need Extra</strong>  <span>@if($bookList->extra){{$bookList->extra}}@endif</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>ow Supply</strong>  <span>@if($bookList->supplie){{$bookList->supplie}}@endif</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										<div class="col-md-6">
											<div class="d-flex justify-content-between"><strong>Supply Description</strong>  <span>@if($bookList->supply_msg){{$bookList->supply_msg}}@endif</span>
											</div>
											<hr class="my-1" style="opacity: 0.9;">
										</div>
										
									</div>
								</div>
								{{-- <table class="table bg-white">
									<thead>
										<tr>
											<th class="table-fit">#</th>
											<th>Description</th>
											<th class="text-right">Price/Item</th>
											<th class="text-right">Quantity</th>
											<th class="text-right">Price</th>
										</tr>
									</thead>
									<tbody>
										@if($orderInner)
										<?php $i=1; ?>
										@foreach($orderInner as $key=>$product)	
										<tr>
											<td><?php echo $i; ?></td>
											<td><strong>{{$product['product_name']}}</strong> ({{$product['qty']}})
												
											</td>
											<td class="text-right">{{$product['price']}}</td>
											<td class="text-right">{{$product['qty']}}</td>
											<td class="text-right">{{$product['subtot']}}</td>
										</tr>
										<?php $i++; ?>
										@endforeach
										@endif
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td class="text-right"><strong>Subtotal</strong>
											</td>
											<td class="text-right">@if($order->total){{$order->total}}@endif</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td colspan="2" class="text-right"><strong>TAX</strong>
											</td>
											<td class="text-right">@if($order->tax){{$order->tax}} @else 0 @endif</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td colspan="2" class="text-right"><strong>Discount</strong>
											</td>
											<td class="text-right">@if($order->discount){{$order->discount}} @else 0 @endif</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td class="text-right"><strong>Total</strong>
											</td>
											<td class="text-right">@if($order->total){{$order->total}} @endif</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td class="text-right">## Payments ##</td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td class="text-right">@if($order->creaetd_at){{$order->creaetd_at}}@endif</td>
											<td class="text-right"><strong>Shabaka</strong>
											</td>
											<td class="text-right ">@if($order->total){{$order->total}} @endif</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td class="text-center">
											<img src="{{url('')}}/public/system/admin/images/icon/logos.png">
											</td>
											<td class="text-right"> 
											</td>
											<td class="text-right "> </td>
										</tr>
									</tbody>
								</table> --}}
								</div>
							  </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
<script> 
        function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
    </script> 

    </div>
    @include('inc.adminFooter')
@include('inc.footer')
