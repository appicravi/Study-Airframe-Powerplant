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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header cards" style="background-color: white;">
                                        <strong>Profile</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('change_password')}}"  method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Old password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="password" name="Old_password" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">New password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password1" name="New_password" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"> password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password2" name="confirm_password" class="form-control" value="">
                                                </div>
                                            </div>
											<!-- <div class="row form-group">
												<div class="col col-md-3">
													<label for="file-input" class="form-control-label">Profile Image</label>
												 </div>
												<div class="col-12 col-md-9">
													<input type="file" id="image" accept="image/x-png,image/gif,image/jpeg" name="image" class="form-control-file">
													@if($profile)
														@if($profile->profile_image)
															<img width="100" src="{{url('public\system\admin_images')}}/{{$profile->profile_image}}">
														@endif
													@endif
												</div>
											</div> -->
                                            
                                            <div class="row card-footer">
                                                <div class="col col-md-3">
                                                   &nbsp;
                                                </div>
                                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="type" id="type" value="profile">
                                                <div class="col-12 col-md-9">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Submit
                                                    </button>
                                                    <button id="reset" type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    &nbsp;
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="xxxnresult">hbhb</div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
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
 