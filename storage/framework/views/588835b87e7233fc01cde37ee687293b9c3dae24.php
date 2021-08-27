
<?php $checkLogin = session('booking_data'); ?>
<html>
    <head>
        <head>
     
            <!-- Latest compiled and minified CSS -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
      <!-- Google Font CSS -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
        <link href="<?php echo e(url('public/system/users/css/style.css')); ?>" rel="stylesheet" media="all">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     
    
        </head>
    </head>
    <body>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header cards" style="background-color: white;">
                                        
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="payment" enctype="multipart/form-data" class="form-horizontal">
                                           <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                           <input type="hidden" name="type" id="type" value="add_customer">
                                            <div class="col-12 col-md-9">
                                                    <button type="buttun" id="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Submit
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
                <script>

                    $(document).ready(function(){                        
                    $("#payment").submit(function(e){
                        e.preventDefault();
                        var formdata=new FormData($("#payment")[0]);
                        
                        $.ajax({
                            type:'post',
                            url:"/scrubbing/user/makepayment",
                            cache: false,
                            data: formdata,
                            processData: false,
                            contentType: false,
                            success:function(response){
                                var data=JSON.parse(response);
                                if(data.status==200){
                                    location.href="/scrubbing/action/booking_py";
                                        alert("payment succesfull");
                                }else{

                                }
                            }
                        })
                    });
                    });
                </script>
    </body>
</html>
        

  

 <?php /**PATH C:\xampp\htdocs\scrubbing\resources\views/customer/payment.blade.php ENDPATH**/ ?>