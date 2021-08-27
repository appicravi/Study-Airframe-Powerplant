<html>
    <title></title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
 <!-- jQuery library -->
 <script src="{{url('public/system/admin/js/jquery.validate.js')}}"></script>
 {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  --}}
 
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    <!-- Google Font CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
    <link href="{{url('public/system/users/css/style-1.css')}}" rel="stylesheet" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&amp;display=swap" rel="stylesheet">
    
    <script src="{{url('public/system/admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('public/system/admin/js/jquery.validate.js')}}"></script>
    <script src="{{url('public/system/admin/js/customer.js')}}"></script>
    <script src="{{url('public/system/admin/js/jquery-ui.js')}}"></script>
    </head>
    <style>
        .padf{
   padding:10px;
}
.container.padf {
    width: 80%;
}
.menu-bar ul {
   display: flex;
    float: left;
    margin-top: 8px;
}

.heads{
	height: 3.5em!important;
}
.button_one{
      width: 100%;
      margin-bottom: 10px!important;
      margin-top: 20px;
}
u.terms{
	color: green;
}
.headings{
	padding-bottom: 10px;
	padding-top: 0px;
}
.headings1{
	padding-bottom: 40px;
	padding-top: 0px;
}
input#gridCheck {
    margin: 6px -19px;
}
.icons{
	list-style: none!important;
	display: inline-block;
}

.head-login {
    background: #ffff;
    padding: 14px 42px;
    margin: 26px 149px;
    border-radius: 10px;
    box-shadow: 11px 1px 75px -37px rgba(0,0,0,0.53);
}
    
section.headline {
    padding: 100px 110px;
}


.custom-dialog-container1
form.sample1 {
    background: #f2f3f7;
    padding: 12px 48px;
}
.form-check {
    position: relative;
    display: block;
    padding-left: 0.50rem;
    margin-left: 18px;
}

@media only screen and (min-width: 992px){
    .header--transparent .header__link {
        color: #000000;
        -webkit-transition: all ease-in-out 0.4s;
        transition: all ease-in-out 0.4s;     
    }

    .header--transparent {
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        background-color: #fefefe;
        -webkit-transition: all ease-in-out 0.4s;
        transition: all ease-in-out 0.4s;
    }
}

.form-group {
    margin-bottom: 1.4rem !important;
}

button.btn.btn-success.text-center.btn-lg.button_one {
    background: #739348;
   
}

.head h2 {
    font-size: 36px !important;
    margin:0px;
    padding-top: 15px;
}  
.login-text{
    text-align:center;
    color: black;
}
section.headline{
    background: #e6edf6d1;
    padding-top: 110px;
    padding-bottom: 17px;
}

section.headline{
    /* padding: 100px 110px; */
    padding-top: 110px;
    padding-bottom: 40px;
}

section.headline{
    background: #e6edf6d1;
   
}
button.btn.btn-success.text-center.btn-lg.button_one {
    /* background: linear-gradient(#0499f2 0%, #26f596 100%); */
    /* border-radius: 30px; */
    color: white;
    border: none;
    background: #35c2ec;
    font-size: 15px;
    font-weight: 900;
    min-height: 47px;
}
.fxt-template-layout19 .fxt-bg-img:before {
    content: "";
   
    position: absolute;
    z-index: -1;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
}

.loaded.fxt-template-animation {
    opacity: 1;
}
.fxt-template-animation {
    position: relative;
    z-index: 1;
    width: 100%;
    opacity: 0;
    overflow: hidden;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.fxt-template-layout19 .fxt-bg-img {
    min-height: 100vh;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 30px 15px;
    position: relative;
    z-index: 1;
}
.fxt-template-layout19 .fxt-btn-ghost {
    margin-top: 15px;
    font-family: 'Montserrat', sans-serif;
    cursor: pointer;
    display: inline-block;
    font-size: 17px;
    font-weight: 500;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: none;
    border: 1px solid #fff;
    color: #fff;
    border-radius: 3px;
    background-color: transparent;
    padding: 10px 36px;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.fxt-template-layout19 .fxt-header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 480px;
    width: 100%;
    text-align: center;
}
.fxt-template-layout19 .fxt-header h1 {
    color: #fff;
    font-size: 24px;
    font-weight: 900;
}


.fxt-template-layout19 .fxt-bg-color {
    background-color: #ffffff;
    min-height: 100vh;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 30px 30px;
}
.fxt-template-layout19 .fxt-form {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    margin-bottom: 40px;
}
.fxt-template-layout19 .fxt-content {
    max-width: 340px;
    width: 100%;
}
.fxt-template-layout19 .fxt-header .fxt-logo {
    display: block;
   
}
.fxt-template-layout19 .fxt-header .fxt-logo img {
    width:600px;
   
}

.fxt-template-layout19 .fxt-btn-ghost:hover {
    background-color: #fff;
    border-color: #fff;
    color: #2670d4;
}

.fxt-template-layout19 .fxt-form h2 {
    font-weight: 500;
    margin-bottom: 40px;
    font-size: 24px;
}

.fxt-template-layout19 .fxt-form .form-control {
    min-height: 48px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 0;
    border-bottom: 1px solid #e7e7e7 !important;
    /* padding: 10px 30px 10px 0; */
    color: #111;
    background: #f7f7f7;
}
 .same {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
}
.loaded.fxt-template-animation .fxt-transition-delay-3 {
    -webkit-transition-delay: 0.3s;
    -o-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

.loaded.fxt-template-animation .fxt-transformY-50 {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
    -webkit-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
}
.fxt-template-animation .fxt-transformY-50 {
    opacity: 0;
    -webkit-transform: translateY(50px);
    -ms-transform: translateY(50px);
    transform: translateY(50px);
}
.form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1.5rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
}

.fxt-header p {
    color: #bedcff;
}
.fxt-template-layout19 .fxt-form .form-control {
    min-height: 48px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 0;
    border-bottom: 1px solid #e7e7e7 !important;
    padding: 10px 30px 10px 10px;
    color: #111;
}
.form-control {
   
    border: none !important;
   
}
.fxt-template-layout19 .fxt-content {
    max-width: 340px;
    width: 100%;
}
.custom-dialog-container1 .mat-dialog-container{
    padding:0px !important;
  }
  .dsdsd {
    position: absolute;
    bottom: 0px;
    background: #f7f7f7;
    width: 100%;
    margin: 0 auto;
    left: 0px;
    padding: 12px 0px;
    font-weight: 900;
    color: #8a8484;
}

.fxt-form img {
    width: 200px;
}
.fxt-form img {
    width: 200px;
    margin: 0 auto;
    text-align: center;
    align-items: center;
    align-self: stretch;
    display: grid;
}
.dsdsd a {
    color: #9f9898;
    font-weight: 600;
}
.fxt-header h1 {
    margin: 0px;
    padding-top: 35px;
    padding-bottom: 15px;
}
.dotted{
    font-size: 22px;
    color: #fff;
}
.self3 i {
    background: #35c2ec;
    color: white;
    font-size: 20px;
    padding: 15px 17px;
    border-radius: 27px;
    position: absolute;
    top: 21px;
    left: 15px;
    box-shadow: -4px 3px 10px -6px rgb(0 0 0);
}
@media only screen and (max-width: 600px) {
    .col-md-7.col-12.hideform.fxt-bg-img {
    display: none;
}
.form-group {
    margin-bottom: 15px;
    display: block;
}
}

    </style>
    <body>
    <!-- user login  screen -->
    <section class="fxt-template-animation fxt-template-layout19 loaded">
       <div class="container">
          <div class="row">
            <div class="col-md-5 col-12 fxt-bg-color" >
              <a href="{{ url('/user') }}">
                <div class="self3 pointer" tabindex="0"><i class="fas fa-long-arrow-alt-left"></i>
                </div></a>
                <div class="fxt-content">
                   <div class="fxt-form">
                    <img src="{{ url("public/system/users/img/Logos.png") }}" alt="Logo">
                <form [formGroup]="LoginForm" id="user_register" >
                  
                   <div class="">
                   <div class="">
                      <div class="fxt-transformY-50 fxt-transition-delay-3">
                      <div class="form-group">
                        <label for="male">Name</label>
                         <input type="text" name="name"class="form-control same" id="inputEmail4" placeholder="Enter Your Name"
                            formControlName="email">
                      
                      </div>
                   </div>
                      <div class="form-group">
                        <label for="male">Email</label>
                         <input type="email" name="email" class="form-control same" id="inputCity" minlength="6" placeholder="Enter Your Email"
                            formControlName="password" >
                      
                      </div>
                      <div class="form-group">
                        <label for="male">Password</label>
                        <input type="password" name="password" class="form-control same" id="inputC" minlength="6" placeholder="********"
                           formControlName="password">
                     
                     </div>
                     <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                   </div>
                   <div class="text-center">
                      <button type="submit" id="register" class="btn btn-success text-center btn-lg button_one" >Sign Up</button>
                   </div>
                   <div class="showmst1"></div>
                 
                   
                   <div class="dsdsd" style="text-align: center;">
                     If you already have an account? <a href="{{ url('/user/login') }}"><span style="color:#35c2ec; font-weight: 400;">Log In</span></a>
                   </div>
                </div>
    
                </form>
             </div>
          </div>
             </div>
             <div class="col-md-7 col-12 hideform  fxt-bg-img" data-bg-image="{{ url("public/system/users/img/figure/bg19-l.jpg") }}"  style="background-image: url({{url("public/system/users/img/Pattern.png")}});">
                <div class="self3 pointer">
               
               </div>
                <div class="fxt-header">
                   <a href="{{ url('/user/login') }}" class="fxt-logo"><img src="{{ url("public/system/users/img/fhd.png") }}" alt="Logo"></a>
                   <h1>Scrubbing Genius matches you with top local cleaning talanet!</h1>
                   <p>All cleaners have been verified tested and background checked! Book in 2 minutes. We'll Take of the rest  </p>
                 <span class="dotted">. . .</span>
                </div>
             </div>
             
       </div> 
    </div>
    </section>

    <script src="{{url('public/system/admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('public/system/admin/js/jquery.validate.js')}}"></script>
    {{-- <script src="{{url('public/system/admin/js/customer.js')}}"></script> --}}
    <script src="{{url('public/system/admin/js/jquery-ui.js')}}"></script>
    <script>
        $(document).ready(function(){
         var host="scrubbing";
         jQuery("#user_register").validate({
             rules: {
                 name: {required: true},
                 email:{required: true},
                 password: {required: true, minlength:6, maxlength:50},
            },
         messages: {
          name: "Please enter  name.",
          email: "Please enter an e-mail address.",
          password: {required: 'Please enter Password.',minlength:'Please enter minimum length of password limit 6 digit.'},
             },
             submitHandler: function(form,e) {   
               var formData= new FormData(jQuery('#user_register')[0]);
              jQuery.ajax({
              type: 'post',
              url: '/'+host+'/action/register',
              cache: false,
              data: formData,
              processData: false,
              contentType: false,
              beforeSend: function() {
                  jQuery('#register').text('saving ...');
                //   jQuery('#register').attr('disabled','disabled');
              },
              success:function(response) {      
                  var obj = JSON.parse(response);
                  if(obj.status==true){
                    jQuery('#register').text('Register Succesfully!');
                      jQuery('.showmst1').css('display','block').html(obj.message);
                      
                      setTimeout(function(){                                           
                        document.location.href= '/'+host+'/booking';                         
                        }, 2000);
                      
                        jQuery('#reset').trigger('click');
                  }
                  else if(obj.status=='book'){
                    jQuery('#register').text('Register Succesfully!');
                    jQuery('.showmst1').css('display','block').html(obj.message);                     
                      setTimeout(function(){                  
                      document.location.href= '/'+host+'/checkout';//document.location.href= '/'+host+'/user/payment';
                       
                      }, 2000);
                    
                      jQuery('#reset').trigger('click');

                  }else{
                      jQuery('#register').text('Sign up');
                      jQuery('#register').removeAttr('disabled');
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
   
</html>