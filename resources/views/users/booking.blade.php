<!DOCTYPE html>
<html>
<title></title>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Google Font CSS -->
    <link href="{{url('public/system/users/css/style-1.css')}}" rel="stylesheet" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<style>


    @media (min-width: 768px){
    .navbar-nav {
        float: revert;
        margin: 0;
    }
    }
    
    .selected {
        border: 2px solid #35c2ec !important;
    }
    
    .seclected1{
        border: 2px solid #35c2ec !important; 
    }
    
    .nopad {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
    /*image gallery*/
    .image-checkbox {
        cursor: pointer;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        margin-bottom: 0;
        outline: 0;
        margin-right: 20px;
    }
    .image-checkbox input[type="checkbox"] {
        display: none;
    }
    
    .image-checkbox-checked {
        /*background: #cccccc1f;*/
    }
    .image-checkbox .fa {
        position: absolute;
        color: #fff;
        background-color: #35c2ec;
        padding: 7px;
        top: 5px;
        right: 15px;
        font-size: 9px;
            
    }
    .image-checkbox-checked .fa {
      display: block !important;
    }
    .image-checkbox span.sd {
        color: #9c9c9c;
        margin-top: 39px;
    }
    
        </style>
<body>
<section class="line">
    <div class="container-fluid fdfdsf">
        <div class="row sds">
         <div class="col-sm-4 top">
            <a href="{{ url("user/welcome") }}"><img src="{{url("public/system/users/img/logo_booking.png")}}" style="width: 170px;"></a>
        </div>
        <div class="col-sm-8 p-0 custom-df">
            <div class="menu-bar">
                <ul class="listed">
                   @if(empty(session('user')) && empty(session('user')) && empty(session('user'))) 
                    <a href="{{ url('/user/login') }}">
                        <li>Login </li>
                        </a>
                    <a href="{{ url('user/signup') }}">
                    <li><span class="signs">Sign Up</span></li>
                    </a>
                    @else
                    <a href="{{ url('/actions/logout-user') }}">
                        <li>Logout </li>
                        </a>
                    @endif

                    <a href="#working">
                    <li>How it Works</li>
                    </a>
                    <button class="joins">Join as Talent</button>
                </ul>
            </div>
        </div>
        </div>
    </div>
</section>
<header>
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
       <div class="container  news-logo">
        <a href="{{ url("user/welcome") }}">
             <img src="{{url("public/system/users/img/logo_booking.png")}}" style="width: 100px;">
             <!--Logo Default-->
          </a>
          <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
          <span></span>
          <span></span>
          <span></span>
          </a>
       </div>
    </nav>
    <!--Side Nav-->
    <div class="side-menu">
       <div class="inner-wrapper">
          <span class="btn-close" id="btn_sideNavClose"><i class="far fa-times-circle"></i></span>
          <nav class="side-nav w-100">
             <ul class="navbar-nav">
                @if(empty(session('user')) && empty(session('user')) && empty(session('user')))                 
                    <li class="nav-item"><a  class="nav-link"  href="{{ url('/user/login') }}"> Login  </a></li>
                    <li class="nav-item" ><a  class="nav-link"  href="{{ url('user/signup') }}">Sign Up </a></li>               
                @else
                    <li class="nav-item"> <a class="nav-link"  href="{{ url('/actions/logout-user') }}">Logout</a></li>
                    
                @endif
                <li class="nav-item">
                   <a class="nav-link" href="#working">How it Works</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link joins1" href="#">Join as Talent</a>
                </li>
             </ul>
          </nav>
          <div class="side-footer text-white w-100">
              <img src="{{url("public/system/users/img/logo_booking.png")}}"  alt="logo" class="logo-dark"> 
          </div>
       </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);" style="display: none;"></a>
    <!-- End side menu -->
 </header>
<section class="books-details">
    <div class="container container1 ">
        <div class="row">
        <div class="col-md-8 col-sm-12 ">
            <h3 class="heads">Booking</h3>
            <div class="bacxk">
                <div class="roms">
                    <div class="asds">
                    <p class="fdfdfdf1">Let us know how we can help</p>
                    <div class="para">
                        <span class="fdfd">1</span>
                        <p>How many bedrooms and baths?</p>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 col-sm-12">
                            <div class="mainwrapper">
                                <div class="fdhjk">
                                <label for="inputPassword" class="">Bedrooms</label>
                                <input type="number" id="bed" value="2" min="0" max="4" class="dsdfdf">
                                </div>
                                <div class="fdhjkw">
                                <label for="inputPassword" class="">Baths</label>
                                <input type="number" id="bath" value="2" min="1" max="4" class="dsdfdf">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="custp" id="myDIV">
                    <h4>How often do you need cleaning?</h4>
                    <p class="fdfdfdf">You can always pause, reschedule or save cleanings for later</p>
                    <div class="inner"><button type="submit" id="week" class="msgBtns-6 active" value="Weekly" >Weekly</button></div>
                    <div class="inner"><button type="submit" id="biweek" class="msgBtns-6 " value="BiWeekly">BiWeekly</button></div>
                    <div class="inner"><button type="submit" id="month" class="msgBtns-6" value="Monthly">Monthly</button></div>
                    </div>
                    <div class="asds" id="adsdds">
                    <div class="para">
                        <span class="fdfd">2</span>
                        <p>Choose one time cleaning or subscription  </p>
                    </div>
                    <p class="fdfdfdf">
                        Select a one time cleaning or SAVE with a monthly subscription
                        Unused cleaning will carry over 
                    </p>
                    <div class="nex" >
                        <div class="inner"><button type="submit" id="onetime" class="msgBtns-7 active1" value="onetime">1 Time</button></div>
                        <div class="inner"><button type="submit" id="onemonth"class="msgBtns-7 " value="onemonth">1   Month</button></div>
                    </div>
                    </div>
                </div>
                <div class="refg">
                    <div class="needextera" style="display: inline-block;width: 100%;">
                        <h5>Need Extras?</h5>
                        <!--<ul class="navbar-nav">
                           <li  class="nav-item"><a class="nav-link" ><img src="img/cupboard.png" alt=""><span class="sd">&nbsp;&nbsp;Inside <br/>Cabinets</span></a></li>
                           <li class="nav-item"><a class="nav-link"><img src="img/fridge.png" alt=""><span class="sd">Inside<br/>Fridge</span></a></li>
                           <li class="nav-item"><a class="nav-link"><img src="img/fridge.png" alt=""><span class="sd">Inside<br/>Oven</span></a></li>
                           <li class="nav-item"><a class="nav-link"><img src="img/laundry.png" alt=""><span class="sd">&nbsp;&nbsp;Laundry<br/>wash & dry</span></a></li>
                        </ul>-->
                        <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                          <label class="image-checkbox">
                            <img class="img-responsive" src="{{url("public/system/users/img/img/cupboard.png")}}" />
                            <input type="checkbox" id="cabinate" name="image[]" value="Cabinet" class="Checkbox"/>
                            <i class="fa fa-check hidden"></i>
                            <span class="sd">&nbsp;&nbsp;Inside <br/>Cabinets</span>
                          </label>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                          <label class="image-checkbox">
                            <img class="img-responsive" src="{{url("public/system/users/img/img/fridge.png")}}"/>
                            <input type="checkbox" id="fridge" name="image[]" value="Fridge"class="Checkbox" />
                            <i class="fa fa-check hidden"></i>
                            <span class="sd">Inside<br/>Fridge</span>
                          </label>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                          <label class="image-checkbox">
                            <img class="img-responsive" src="{{url("public/system/users/img/img/oven.png")}}"/>
                            <input type="checkbox" id="oven" name="image[]" value="Oven" class="Checkbox" />
                            <i class="fa fa-check hidden"></i>
                            <span class="sd">Inside<br/>Oven</span>
                          </label>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                          <label class="image-checkbox">
                            <img class="img-responsive" src="{{url("public/system/users/img/img/laundry.png")}}" />
                            <input type="checkbox" id="laundry" name="image[]" value="Laundry" class="Checkbox"/>
                            <i class="fa fa-check hidden"></i>
                            <span class="sd">&nbsp;&nbsp;Laundry<br/>wash & dry</span>
                          </label>
                        </div>
  
                     </div>
                    <!-- requestcleannersection -->
                    <div class="loction">
                    <h5>Have your ow supplies?</h5>
                    <div id="alloq">
                    <div class="inner"><button type="submit" id="supplie" class="msgBtns_demo active4" value="Yes">Yes</button></div>
                    <div class="inner"><button type="submit" id="supplieno" class="msgBtns_demo" value="No">No</button></div>
                 </div>
                 <form id="details">
                        <div class="wrrpaer">
                            <div class="form-grou mb-2 rew1">
                                <input type="text" class="form-control" id="inputPassword2" name="supply_msg" placeholder="Which supplies do you have?">
                            </div>
                        </div>
                    
                        </div>
                        <div class="loction">
                        <h5>Request a cleaner?   </h5>
                        
                            <div class="wrrpaer">
                                <div class="form-grou mb-2 rew">
                                    <input type="input" class="form-control" name="cleaner" id="inputPassword2" placeholder="Optional">
                                </div>
                            </div>
                    
                        </div>
                        <!-- selecttimecss -->
                        <div class="loction">
                        <h5>Select date and time </h5>
                        
                        <div class="wrrpaer">
                            <div class="form-grou mb-2 custrtime">
                                <label for="inputPassword2" class="sr-only"></label>
                                <input type="date" class="form-control" name="date" id="inputPassword2" placeholder="" required>
                            </div>
                            <div class="form-grou mb-2 custrtime">
                                <label for="input" class="sr-only"></label>
                                <input type="text" class="form-control" name="time" id="inputPassword2" placeholder="" required>
                            </div>
                        </div>
                   
                         </div>
                        <!-- loctionsectiondesign -->
                         <div class="loction">
                        <h5>Location? </h5>
                    
                        <div class="wrrpaer">
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <input type="text" class="form-control" name="fname" id="inputPassword2" placeholder="First" required>
                            </div>
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <input type="text" class="form-control" name="lname" id="inputPassword2" placeholder="last" required>
                            </div>
                        </div>
                        <div class="wrrpaer">
                            <div class="form-group mx-sm-3 mb-2 custr1">
                                <input type="input" class="form-control" name="street" id="inputPassword2" placeholder="Street" required>
                            </div>
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <input type="text" class="form-control" name="apart" id="inputPassword2" placeholder="Apt #" required>
                            </div>
                        </div>
                        <div class="wrrpaer">
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <label for="inputPassword2" class="sr-only"></label>
                                <input type="text" class="form-control" name="city" id="inputPassword2" placeholder="City" required>
                            </div>
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <label for="inputPassword2" class="sr-only">Password</label>
                                <input type="text" class="form-control" name="state" id="inputPassword2" placeholder="State" required>
                            </div>
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <label for="inputPassword2" class="sr-only">Password</label>
                                <input type="text" class="form-control" name="code" id="inputPassword2" placeholder="Zip" required>
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                        <div class="wrrpaer">
                            <div class="form-group mx-sm-3 mb-2 custr5">
                                <label for="inputPassword2" class="sr-only"></label>
                                <input type="text" class="form-control"  name="sp_req" id="inputPassword2" placeholder="Special requests" >
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-12">
                            <button type="submit" id="book" class="btn btn-primary fdf">Continue to Payments</button>
                            </div>
                        </div>
                        
                    </form>
                    <div class="showmst1"></div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 plans col-sm-12">
            <div class="pricback">
                <div class="title-price">
                    <h5><span class="often">Weekly</span> Cleaning Plan</h5>
                  </div>
                <div class="finalprice">
                    <div class="d-flex justify-content-between bg-secondary mb-3">
                    <div class="p-2 bas">Subscription</div>
                    <div class="p-2 bas ">$<span class="total">120.00 </span></div>
                    </div>
                    <div class="d-flex justify-content-between bg-secondary mb-3">
                    <div class="p-2 bas1">Savings</div>
                    <div class="p-2 bas1 ">-$<span class="save">20.00 </span> </div>
                    </div>
                    <div class="d-flex justify-content-between bg-secondary mb-3">
                    <div class="p-2 bas">Sales Tax</div>
                    <div class="p-2 bas">+$<span class="tax">3.00 </span></div>
                    </div>
                </div>
                <div class="totalprice">
                    <div class="d-flex justify-content-between bg-secondary mb-3">
                    <div class="p-2 bas_totla">Month</div>
                    <div class="p-2 bas_totla2">$173<sup>00</sup></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    <script src="{{url('public/system/admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('public/system/admin/js/jquery.validate.js')}}"></script>
    <script src="{{url('public/system/admin/js/customer.js')}}"></script>
    <script src="{{url('public/system/admin/js/jquery-ui.js')}}"></script>
</section>
<div class="footer"></div>
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("msgBtns-6 ");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
    }
</script>
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("adsdds");
    var btns = header.getElementsByClassName("msgBtns-7");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active1");
        current[0].className = current[0].className.replace(" active1", "");
        this.className += " active1";
        });
    }
</script>
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("alloq");
        var btns = header.getElementsByClassName("msgBtns_demo");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active4");
            current[0].className = current[0].className.replace(" active4", "");
            this.className += " active4";
            });
        }
    </script>
 {{-- <script>
    $(document).ready(function () {

        $('ul.navbar-nav > li')
                .click(function (e) {
            $('ul.navbar-nav > li')
                .removeClass('active2');
            $(this).addClass('active2');
        });
    });
</script> --}}
<script>
    // selectpackgjs
$(document).ready(function () {
    $(".custp .inner .msgBtns-6").click(function () {
        $(".custp .inner .msgBtns-6").removeClass("seclected1");
        $(this).addClass("seclected1");
    });
});
    </script>
    <script>
        // image gallery
        // init the state from the input
        $(".image-checkbox").each(function () {
          if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
            $(this).addClass('image-checkbox-checked');
            
          }
          else {
            $(this).removeClass('image-checkbox-checked');
          }
        });
        
        // sync the state to the input
        $(".image-checkbox").on("click", function (e) {
           // console.clear();
          $(this).toggleClass('image-checkbox-checked');
          var $checkbox = $(this).find('input[type="checkbox"]');
          $checkbox.prop("checked",!$checkbox.prop("checked"))

         
        
          e.preventDefault();
        });
        
            if ($("#sidemenu_toggle").length) {
                $("#sidemenu_toggle").on("click", function () {
                    $(".pushwrap").toggleClass("active");
                    $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
                }), $("#close_side_menu").on("click", function () {
                    $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active")
                }), $(".side-nav .navbar-nav .nav-link").on("click", function () {
                    $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
                }), $("#btn_sideNavClose").on("click", function () {
                    $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
                });
            }
          </script>
    <script>
        $(window).on("load", function () {
   
            "use strict";
            
            /* ===================================
                    Loading Timeout
            ====================================== */
            
            $('.side-menu').removeClass('hidden');
            
            setTimeout(function(){
                $('.preloader').fadeOut();
            }, 1000);
            
            });
    </script>


</body>

</html>



{{-- <!DOCTYPE html>
<html>
<title></title>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Google Font CSS -->
    <link href="{{url('public/system/users/css/style-1.css')}}" rel="stylesheet" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<style>
    .nav-link {
    color: green;
}

.nav-item>a:hover {
    color: green;
}

/*code to change background color*/
.navbar-nav>.active2>a img {
background-color: #e8e8e8;
color: green;
border-radius: 45px;
}
a.nav-link {
cursor: pointer;
}
@media (min-width: 768px){
.navbar-nav {
float: revert;
margin: 0;
}
}
</style>
<body>
<section class="line">
    <div class="container-fluid fdfdsf">
        <div class="row sds">
        <div class="col-sm-4">
            <a><img src="{{url("public/system/users/img/logo_booking.png")}}" style="width: 150px;"></a>
        </div>
        <div class="col-sm-8 p-0">
            <div class="menu-bar">
                <ul class="listed">
                   @if(empty(session('user')) && empty(session('user')) && empty(session('user'))) 
                    <a href="{{ url('/user/login') }}">
                        <li>Login </li>
                        </a>
                    <a href="{{ url('user/signup') }}">
                    <li><span class="signs">Sign Up</span></li>
                    </a>
                    @else
                    <a href="{{ url('/actions/logout-user') }}">
                        <li>Logout </li>
                        </a>
                    @endif

                    <a href="#working">
                    <li>How it Works</li>
                    </a>
                    <button class="joins">Join as Talent</button>
                </ul>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="books-details">
    <div class="container container1 ">
        <div class="row">
        <div class="col-md-8 col-sm-12 ">
            <h3 class="heads">Booking</h3>
            <div class="bacxk">
                <div class="roms">
                    <div class="asds">
                    <p class="fdfdfdf1">Let us know how we can help</p>
                    <div class="para">
                        <span class="fdfd">1</span>
                        <p>How many bedrooms and baths?</p>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 col-sm-12">
                            <div class="mainwrapper">
                                <div class="fdhjk">
                                <label for="inputPassword" class="">Bedrooms</label>
                                <input type="number" id="bed" value="2" min="0" max="4" class="dsdfdf">
                                </div>
                                <div class="fdhjkw">
                                <label for="inputPassword" class="">Baths</label>
                                <input type="number" id="bath" value="2" min="1" max="4" class="dsdfdf">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="custp" id="myDIV">
                    <h4>How often do you need cleaning?</h4>
                    <p class="fdfdfdf">You can always pause, reschedule or save cleanings for later</p>
                    <div class="inner"><button type="submit" id="week" class="msgBtns-6 active" value="Weekly" >Weekly</button></div>
                    <div class="inner"><button type="submit" id="biweek" class="msgBtns-6 " value="BiWeekly">BiWeekly</button></div>
                    <div class="inner"><button type="submit" id="month" class="msgBtns-6" value="Monthly">Monthly</button></div>
                    </div>
                    <div class="asds" id="adsdds">
                    <div class="para">
                        <span class="fdfd">2</span>
                        <p>Choose one time cleaning or subscription  </p>
                    </div>
                    <p class="fdfdfdf">
                        Select a one time cleaning or SAVE with a monthly subscription
                        Unused cleaning will carry over 
                    </p>
                    <div class="nex" >
                        <div class="inner"><button type="submit" id="onetime" class="msgBtns-7 active1" value="onetime">1 Time</button></div>
                        <div class="inner"><button type="submit" id="onemonth"class="msgBtns-7 " value="onemonth">1   Month</button></div>
                    </div>
                    </div>
                </div>
                <div class="refg">
                    <div class="needextera">
                    <h5>Need Extras?</h5>
                    <ul class="navbar-nav">
                        <li  class="nav-item " id="cabinate" data-value="Cabinet"><a class="nav-link" ><img src="{{url("public/system/users/img/img/cupboard.png")}}" alt=""><span class="sd">&nbsp;&nbsp;Inside <br/>Cabinets</span></a></li>
                        <li class="nav-item" id="fridge" data-value="Fridge"><a class="nav-link"><img src="{{url("public/system/users/img/img/fridge.png")}}" alt=""><span class="sd">Inside<br/>Fridge</span></a></li>
                        <li class="nav-item" id="oven" data-value="Oven"><a class="nav-link"><img src="{{url("public/system/users/img/img/oven.png")}}" alt=""><span class="sd">Inside<br/>Oven</span></a></li>
                        <li class="nav-item" id="laundry" data-value="Laundry" ><a class="nav-link"><img src="{{url("public/system/users/img/img/laundry.png")}}" alt=""><span class="sd">&nbsp;&nbsp;Laundry<br/>wash & dry</span></a></li>
                    </ul>
                    </div>
                    <!-- requestcleannersection -->
                    <div class="loction">
                    <h5>Have your ow supplies?</h5>
                    <div id="alloq">
                    <div class="inner"><button type="submit" id="supplie" class="msgBtns_demo active4" value="Yes">Yes</button></div>
                    <div class="inner"><button type="submit" id="supplieno" class="msgBtns_demo" value="No">No</button></div>
                 </div>
                 <form id="details">
                        <div class="wrrpaer">
                            <div class="form-grou mb-2 rew1">
                                <input type="text" class="form-control" id="inputPassword2" name="supply_msg" placeholder="Which supplies do you have?">
                            </div>
                        </div>
                    
                        </div>
                        <div class="loction">
                        <h5>Request a cleaner?   </h5>
                        
                            <div class="wrrpaer">
                                <div class="form-grou mb-2 rew">
                                    <input type="input" class="form-control" name="cleaner" id="inputPassword2" placeholder="Optional">
                                </div>
                            </div>
                    
                        </div>
                        <!-- selecttimecss -->
                        <div class="loction">
                        <h5>Select date and time </h5>
                        
                        <div class="wrrpaer">
                            <div class="form-grou mb-2 custrtime">
                                <label for="inputPassword2" class="sr-only"></label>
                                <input type="date" class="form-control" name="date" id="inputPassword2" placeholder="" required>
                            </div>
                            <div class="form-grou mb-2 custrtime">
                                <label for="input" class="sr-only"></label>
                                <input type="text" class="form-control" name="time" id="inputPassword2" placeholder="" required>
                            </div>
                        </div>
                   
                         </div>
                        <!-- loctionsectiondesign -->
                         <div class="loction">
                        <h5>Location? </h5>
                    
                        <div class="wrrpaer">
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <input type="text" class="form-control" name="fname" id="inputPassword2" placeholder="First" required>
                            </div>
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <input type="text" class="form-control" name="lname" id="inputPassword2" placeholder="last" required>
                            </div>
                        </div>
                        <div class="wrrpaer">
                            <div class="form-group mx-sm-3 mb-2 custr1">
                                <input type="input" class="form-control" name="street" id="inputPassword2" placeholder="Street" required>
                            </div>
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <input type="text" class="form-control" name="apart" id="inputPassword2" placeholder="Apt #" required>
                            </div>
                        </div>
                        <div class="wrrpaer">
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <label for="inputPassword2" class="sr-only"></label>
                                <input type="text" class="form-control" name="city" id="inputPassword2" placeholder="City" required>
                            </div>
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <label for="inputPassword2" class="sr-only">Password</label>
                                <input type="text" class="form-control" name="state" id="inputPassword2" placeholder="State" required>
                            </div>
                            <div class="form-group mx-sm-3 mb-2 custr">
                                <label for="inputPassword2" class="sr-only">Password</label>
                                <input type="text" class="form-control" name="code" id="inputPassword2" placeholder="Zip" required>
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                        <div class="wrrpaer">
                            <div class="form-group mx-sm-3 mb-2 custr5">
                                <label for="inputPassword2" class="sr-only"></label>
                                <input type="text" class="form-control"  name="sp_req" id="inputPassword2" placeholder="Special requests" >
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-12">
                            <button type="submit" id="book" class="btn btn-primary fdf">Continue to Payments</button>
                            </div>
                        </div>
                        
                    </form>
                    <div class="showmst1"></div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 plans col-sm-12">
            <div class="pricback">
                <div class="title-price">
                    <h5><span class="often">Weekly</span> Cleaning Plan</h5>
                    <p>1 Month Subscription</p>
                    <p>Subscription (<span class="sub">1200</span>/Month)</p>
                    <p>Savings - $<span class="saving">20</span></p>
                </div>
                <div class="finalprice">
                    <div class="d-flex justify-content-between bg-secondary mb-3">
                    <div class="p-2 bas">Subscription</div>
                    <div class="p-2 bas ">$<span class="total">120.00 </span></div>
                    </div>
                    <div class="d-flex justify-content-between bg-secondary mb-3">
                    <div class="p-2 bas1">Savings</div>
                    <div class="p-2 bas1 ">-$<span class="save">20.00 </span> </div>
                    </div>
                    <div class="d-flex justify-content-between bg-secondary mb-3">
                    <div class="p-2 bas">Sales Tax</div>
                    <div class="p-2 bas">+$<span class="tax">3.00 </span></div>
                    </div>
                </div>
                <div class="totalprice">
                    <div class="d-flex justify-content-between bg-secondary mb-3">
                    <div class="p-2 bas_totla">Month</div>
                    <div class="p-2 bas_totla2">$173<sup>00</sup></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    <script src="{{url('public/system/admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('public/system/admin/js/jquery.validate.js')}}"></script>
    <script src="{{url('public/system/admin/js/customer.js')}}"></script>
    <script src="{{url('public/system/admin/js/jquery-ui.js')}}"></script>
</section>
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("msgBtns-6 ");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
    }
</script>
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("adsdds");
    var btns = header.getElementsByClassName("msgBtns-7");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active1");
        current[0].className = current[0].className.replace(" active1", "");
        this.className += " active1";
        });
    }
</script>
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("alloq");
        var btns = header.getElementsByClassName("msgBtns_demo");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active4");
            current[0].className = current[0].className.replace(" active4", "");
            this.className += " active4";
            });
        }
    </script>
 <script>
    $(document).ready(function () {

        $('ul.navbar-nav > li')
                .click(function (e) {
            $('ul.navbar-nav > li')
                .removeClass('active2');
            $(this).addClass('active2');
        });
    });
</script>


</body>

</html>






 --}}
 {{--  --}}
{{--  --}}
{{--  --}}
{{--  --}}
{{--  --}}


