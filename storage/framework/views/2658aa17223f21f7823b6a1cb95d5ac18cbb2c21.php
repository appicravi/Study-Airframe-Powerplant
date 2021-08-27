<html>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    <!-- Google Font CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
  

    <link href="<?php echo e(url('public/system/users/css/style-1.css')); ?>" rel="stylesheet" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&amp;display=swap" rel="stylesheet">
    <script src="<?php echo e(url('public/system/admin/js/jquery.validate.js')); ?>"></script>

    </head>
    <body>
        <form id="reset">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control same" id="input"  placeholder="Enter your email"
                       formControlName="email">
              
              </div>
              <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
              <div class="center">
                 <button type="submit" id="password" class="btn btn-success text-center btn-lg button_one" >Reset Password</button>
              </div>
              <div class="showmst1"></div>
        </form>
        <script>
            $(document).ready(function(){
             var host="scrubbing";
             jQuery("#reset").validate({
                  rules: {
                      email:{required: true},       
                 },
              messages: {
               email: "Please enter an e-mail address.",
                  },
                  submitHandler: function(form,e) {  
                     e.preventDefault();
                   var formData= new FormData(jQuery('#reset')[0]);
                   jQuery.ajax({
                   type: 'post',
                   url: '/'+host+'/user/password_reset',
                   cache: false,
                   data: formData,
                   processData: false,
                   contentType: false,
                   beforeSend: function() {
                       jQuery('#password').text('checking ...');
                       jQuery('#password').attr('disabled','disabled');
                   },
                   success:function(response) {      
                       var obj = JSON.parse(response);
                      
                       if(obj.status==true){
                           jQuery('.showmst1').css('display','block').html(obj.message);                      
                           setTimeout(function(){
                            jQuery('#password').text('Reset Password');
                              jQuery('#password').removeAttr('disabled');
                              jQuery('.showmst1').css('display','none').html('');  
                              }, 2000);
                               jQuery('#reset').trigger('click');
                       }else{
                           jQuery('#password').text('Reset Password');
                          
                           jQuery('#password').removeAttr('disabled');
                           jQuery('.showmst1').css('display','block').html(obj.message);
                           setTimeout(function(){
                              jQuery('.showmst1').css('display','none').html('');
                             }, 3000);
                       }
                   }
                      });
          
                   }
              });
            });
             </script>
    </body>

</html><?php /**PATH C:\xampp\htdocs\scrubbing\resources\views/users/password_reset.blade.php ENDPATH**/ ?>