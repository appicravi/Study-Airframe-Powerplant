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
                                     <h5 class="title-5">Review List</h5>                                   
                                 </div>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-earning">
                                        <thead>
                                            <tr>
												<th style="color: #000;">Cutomer Name</th>
                                                {{-- <th style="color: #000;">Customer</th> --}}
												<th style="color: #000;">Email</th>
                                                <th style="color: #000;">Rating</th>
                                                <th style="color: #000;">Feedback</th>	
                                                <th style="color: #000;">Time</th>							
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="search_data">
                                        @if($reviewList)
                                            @foreach($reviewList as $key => $review)
                                       <tr class="tr-shadow" id="row_{{$review['id']}}" style="border-top: 1px solid #ebe8f8;">
												<td>{{$review['name']}}</td>
                                                <td>{{$review['email']}}</td>
                                                <td>{{$review['rating']}}</td>												
                                                <td>{{$review['comment']}}</td>
												<td>{{$review['created_at']}}</td>
                                                
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
