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
                                        <strong>Add</strong> Service
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="service"  enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Service Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="dial_code" name="service" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Charge</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="phone" name="charge" class="form-control">
                                                </div>
                                            </div>
                                          
                                            <div class="row card-footer">
                                                <div class="col col-md-3">
                                                   &nbsp;
                                                </div>
                                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="type" id="type" value="add_service">
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
                                                    <div class="result"></div>
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
 