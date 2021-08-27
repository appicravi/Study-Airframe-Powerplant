<html>
    <head>
       <title>Home page</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <!-- jQuery library -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <!-- Latest compiled JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
       <!-- Google Font CSS -->
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
       {{-- <link rel="stylesheet" href="./css/landing.css"> --}}
       <link href="{{url('public/system/users/css/landing.css')}}" rel="stylesheet" media="all">
       <script>
          $(document).ready(function() {
 $('#sidebar-btn').on('click', function() {
    $('#sidebar').toggleClass('visible');
 });
 });
       </script>


    </head>
    <style>
       #sidebar {
    width: 200px;
    background: #2c3e50;
    position: absolute;
    height: 100%;
    top: 0;
    left: -200px;
    transition: left 0.5s ease;
 }

 #sidebar.visible {
    left: 0px;
    transition: left 0.7s ease;
 }

 ul {
    margin: 0;
    padding: 0;
 }

 li {
    list-style: none;
    
 }

 li a {
    text-decoration: none;
    color: white;
 }

 #sidebar-btn {
    display: inline-block;
    vertical-align: middle;
    width: 20px;
    height: 15px;
    cursor: pointer;
    margin: 20px;
    position: absolute;
    right: -60px;
    top: 0px;
 }

 #sidebar-btn span {
    background-color: black;
    height: 1px;
    display: block;
    margin-bottom: 5px;
 }

 #sidebar-btn span:nth-child(2) {
    width: 75%;
 }

 .love {
    width: 100%;
    height: 100%;
 }
 .sds{
          display: flex;
    align-items: center;
 }

    </style>
    <body>
 <section class="line">

    
 <div class="container-fluid">
             <div class="row sds">
                <div class="col-sm-4">
                   <a><img src="{{url("public/system/users/img/Logo.png")}}" style="width: 150px;"></a>
                </div>
                <div class="col-sm-8 custom-df">
                   <div class="menu-bar">
                      <ul class="listed">
                        <a href="{{ url('/user/login') }}"> <li>Login </li></a>
                        <a href="{{ url('/user/signup') }}"> <li><span class="signs">Sign Up</span></li></a>
                         <a href="#working"><li>How it Works</li></a>
                         <button class="joins">Join as Talent</button>
                      </ul>
                </div>

                <header class="header active">
          
          

                   <div class="btn-menu">
                      <div class="one"></div>
                      <div class="two"></div>
                      <div class="three"></div>
                   </div>
                </header>
                <div class="fixed-menu">
                   <div class="fixed-menu__header">
                     
             
                      <div class="btn-close">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve" width="512px" height="512px">
                               <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z" fill="#006DF0"></path></svg>
                      </div>
                   </div>
             
                   <div class="fixed-menu__content">
                      <ul class="mob-menu">
                         <li class="mob-menu__item">
                            <a href="{{ url('/user/login') }}" class="mob-menu__link">login</a>
                         </li>
                         <li class="mob-menu__item">
                            <a href="{{ url('/user/signup') }}" class="mob-menu__link">Sign up</a>
                         </li>
                         <li class="mob-menu__item">
                            <a href="#working" class="mob-menu__link">How it Works</a>
                         </li>
                         <li class="mob-menu__item">
                            <a href="#statistic" class="mob-menu__link dash">Join as Talent</a>
                         </li>
                        
                      </ul>
             
                   
                      
             
                   </div>
                </div>
               
                </div>

               
             </div>
 </section>   
 
       <section class="cleaner-sec ">
          <div class="container-fluid">
             <div class="row">
                <div class="col-md-6 col-sm-12  symbosis">
                   <img src="{{url("public/system/users/img/banner_leftside.png")}}" class="img-fluid"> 
                </div>
                <div class="col-md-6 col-sm-12  review-heads">
                   <div class="leftprt">
                   <h4 class="heads">Hire local home cleaners.<br>Review instant quotes.
                      <br>
                      <span class="span-bboks">Book and schedule.</span>
                   </h4>
                <div class="york-btn">
                    <input type="text"  id="code" class="form-controlss newsyrk" aria-describedby="emailHelp" placeholder="New York, NY">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <button type="button" id="check" class="btn-three " >Search</button>  
                    <div class="msg"></div> 
                   </div>
                </div>
                </div>
             </div>
          </div>
       </section>
       <div class="clearfix"></div>
       <section class="ionics">
          <div class="container-fluid dsdf">
             <div class="row">
                <div class="col-md-4 text-center">
                   <div class="circligsf">
                      <div class="imgesround">
                         <img src="{{url("public/system/users/img/one.png")}}">
                      </div>
                      <div class="hires-head">
                         <p class="para"><span class="local-span">Hire local cleaning talent!<br> Review full bios, reviews &<br>  ratings before they<br> arrive!</span></p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 text-center">
                   <div class="circligsf">
                      <div class="imgesround-2">
                         <img src="{{url("public/system/users/img/icon-4.png")}}">
                      </div>
                      <div class="hires-head">
                         <p class="para"><span class="local-span2">All cleaners are <br> background checked<br> and verified!</span></p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 text-center">
                   <div class="circligsf">
                      <div class="imgesround-1">
                         <img src="{{url("public/system/users/img/three.png")}}">           
                      </div>
                      <div class="hires-head">
                         <p class="para"><span class="local-span1">Quotes locked in<br>  and guaranteed with <br> payment protection!</span></p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
    <!-- howit'sworkssection -->
    <div class="section how-it-works" id="working" style="background: {{url("public/system/users/img/how_it_works1.png")}};  background-repeat: no-repeat; background-size: cover; background-position: 30% 50%;"  >
       <div class="container">
          <div class="textwraaper text-center">
          <h2>How it Works</h2>
                <p>All cleaners are verified and payments are protected. Want to request a new cleaner? Just let us know
                and we will make it happen!</p>
          </div>
          <div class="dfg text-center">
             <img src="{{url("public/system/users/img/right-arrow.png")}}" alt="">
          </div>
          <div class="fdf text-center">
             <img src="{{url("public/system/users/img/line.png")}}" alt="">
          </div>
          <div class="row">
                <div class="col-md-4 pb-5">
                   <div class="rectanele text-center ">
                      <div class="icon">
                         <img src="{{url("public/system/users/img/icon1.png")}}" alt="">
                      </div>
                      <div class="para1">
                         Tell us how many rooms need to be cleaned.
                      </div>
                   </div>
                </div>
                <div class="col-md-4 pb-5">
                   <div class="rectanele text-center ">
                   <div class="icon">
                      <img src="{{url("public/system/users/img/icon2.png")}}" alt="">
                   </div>
                   <div class="para2">
                      Review guaranteed
                   pricing from local
                   verified cleaners.
                   Select a one time cleaning or
                   a monthly subscription 
                   and save!

                   </div>
                   </div>
                </div>
                <div class="col-md-4 pb-5">
                   <div class="rectanele text-center ">
                   <div class="icon">
                      <img src="{{url("public/system/users/img/icon3.png")}}" alt="">
                   </div>
                   <div class="para1">
                      Book and schedule
                      in seconds.
                      Need to pause or cancel?
                      Just let us know through 
                      the portal.
                   </div>
                   </div>
                </div>
          </div>
       </div>
    </div>

    <script>
       // menu toggle btn 
      $('.btn-menu').click(function(){
          $('.fixed-menu').addClass('open');
      });

      $('.btn-close').click(function(){
          $('.fixed-menu').removeClass('open');
      });

      $(window).resize(function(){
          var ww = $(window).width();
          if(ww > 1200) {
              $('.fixed-menu').removeClass('open');
          }
      });


    $('.mob-menu__link').on('click', function(event) {
          var target = $(this.getAttribute('href'));
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top - 100
              }, 1000);
              $('.fixed-menu').removeClass('open');
          }
      });
    </script>
    <script>
        $(document).ready(function(){
            var host='scrubbing';
            $("#check").click(function(){
             var code=$("#code").val();
             var token=$("#token").val();
             $.ajax({
                 type:'post',
                 url:'/'+host+"/action/check",
                 data:{
                     code:code,
                     _token:token,
                 },
                 beforeSend: function() {
                        $('#check').text('Checking...');
                        $('#check').attr('disabled','disabled');
                    },
                 success: function(response){
                     var obj=JSON.parse(response);
                     if(obj.status==true){
                         $(".msg").html(obj.message)
                         $('#check').text('Book');                   
                            setTimeout(function(){
                            $('#check').removeAttr('disabled');                       
                            $('.msg').css('display','none').html(''); 
                            location.href='/'+host+"/booking";                     
                            }, 3000); 
                            
                     }else{
                        $(".msg").html(obj.message)
                        setTimeout(function(){
                            $('#check').text('Book');  
                            $('#check').removeAttr('disabled');   
                            $('.msg').css('display','none').html('');   
                            location.reload();
                        },2500);
                        
                     }

                 }
             })
         });
         
 
        });
 
         
        </script>
    </body>
 </html>