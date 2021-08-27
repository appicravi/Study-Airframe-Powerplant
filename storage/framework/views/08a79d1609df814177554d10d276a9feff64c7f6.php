<html>
    <title></title>
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
    <style>
        caption{
  background: white;
  height: 3em;
  line-height: 3em;
  font-size: 24px;
  padding: 12px 20px;
  /* box-shadow: 3px 0 2px black; */
  color: #060606;
  caption-side: top !important;
        }
        .d-flex.justify-content-between {
  align-items: center;
}
caption a{
color: white;
}
.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}
table{
background: #fff;
top: 50%;
left: 50%;
font-size: 20px;
border-collapse: collapse;
margin: 0 auto;
width: 396px;  

}

table,th,tr {
text-align: center;
vertical-align: middle;
}

table thead th{
border: solid 1px white; 
width: 3em;
height: 3em;
font-weight: 500;
color:#c7c6c6;
font-size: 13px;

}

table tbody td {
  border: solid 1px white;
  height: 2.4em;
  font-size: 15px;
}

a{
text-decoration: none;
font-family: 'Josefin Sans', sans-serif;
}

tbody a{
display: block;
height: 100%;
display:flex;
align-items: center;
justify-content: center;
color: black;

}


tbody a:hover{
background: #35c2ec;
  border-radius: 8px;
  color:white;
}

.null{
color: gray;
font-family: 'Josefin Sans', sans-serif;
}

.selected {
  background: #35c2ec;
  border-radius: 8px;
  color: white;
}

.selected a{
color: white;
}




.header a {
float: left;
color: black;
text-align: center;
padding: 12px;
text-decoration: none;
font-size: 18px; 
line-height: 25px;
border-radius: 4px;
}

.header a.logo {
font-size: 25px;
font-weight: bold;
}

.header a:hover {
background-color: #ddd;
color: black;
}

.header a.active {
background-color: dodgerblue;
color: white;
}

.header-right {
float: right;
position: relative;
  top: 8px;
}

.header1 {
  background: #35c2ec;
  height: 70px;
  display: flex;
  align-items: center;
}
.header-right span{
list-style: none;
  color: white;
  font-weight: 300;
  font-size: 16px;
  margin: 10px 11px;

}


@media  screen and (max-width: 500px) {
.header a {
  float: none;
  display: block;
  text-align: left;
}

.header-right {
  float: none;
}
}
.container3{
width: 77%;
  margin: 0 auto;
}
.cleaner {
  float: left;
}
/* popupdesign */
.rating {
    position: relative;
    text-align: center;
    padding: 15px 0;
}
.rating .rating-wrapper {
    display: inline-block;
    overflow: hidden;
    vertical-align: middle;
}
.rating .rating-wrapper > input {
    position: absolute;
    width: 0;
    height: 0;
    opacity: 0;
    z-index: -1;
}
input[type=radio] {
    position: relative;
    top: 2px;
    left: 2px;
    margin: 0 8px;
    cursor: pointer;
}
input[type=radio]:before {
    background-color: #fff;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 1px solid #f55a4e;
    display: inline-block;
    top: -5px;
    left: -8px;
    background-image: radial-gradient(circle, #f55a4e 60%, #fff 70%);
    background-size: 0;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    will-change: background-size;
    z-index: 2;
}
input[type=radio]:after, input[type=radio]:before {
    content: '';
    position: absolute;
    transition: all .3s cubic-bezier(.64, .09, .08, 1);
}
input[type=radio]:after {
    width: 20px;
    height: 20px;
    background: #fff;
    border-radius: 50%;
}
input[type=radio]:after, input[type=radio]:before {
    content: '';
    position: absolute;
    transition: all .3s cubic-bezier(.64, .09, .08, 1);
}
.rating.star .rating-wrapper > label {
    font-size: 32px;
}

.rating .rating-wrapper > label {
    padding-top: 0px;
    padding-bottom: 0px;
}
.rating .rating-wrapper > label {
    float: right;
    padding-right: 2px;
    padding-left: 2px;
    color: #3C4857;
    cursor: pointer;
}
.rating.star .rating-wrapper > input:checked ~ label {
    color: #fdd043;
}
.modern-red {
  background: #35c2ec;
    border: 1px solid #35c2ec;
    box-shadow: 0 12px 20px -10px rgb(53 194 236 / 48%), 0 4px 20px 0px rgb(0 0 0 / 12%), 0 7px 8px -5px rgb(244 67 54 / 20%);
}

.modern-button {
    margin: 15px 0;
    padding: 8px 24px;
    border-radius: 50px;
    color: #fff;
    transition: all .3s cubic-bezier(.64, .09, .08, 1);
    font-size: 14px;
    font-weight: 100;
    outline: none;
}
.title {
    font-size: 21px;
    color: #35c2ec;
    font-weight: 400;
    text-transform: uppercase;
    margin-bottom: 10px;
}
.title-description {
    margin: 10px 0;
    color: #3C4857;
    font-weight: 100;
}
input[type=email], input[type=text], textarea, input[type=password], input[type=number] {
    position: relative;
    z-index: 2;
    margin-bottom: 15px;
    width: 100%;
    display: block;
    border: 1px solid #DDD;
    border-radius: 4px;
    padding: 8px;
    will-change: background-position;
    transition: all .3s cubic-bezier(.64, .09, .08, 1);
    background-position: -1920px 0;
    background-size: 100%;
    background-repeat: no-repeat;
    color: #3C4857;
    font-size: 13px;
    font-weight: 100;
}
.headr {
    position: relative;
    right: 0px;
    /* padding: 13px 10px; */
    padding: 10px 20px;
}


label {
    color: #3C4857;
    font-weight: 300;
    transition: all .3s cubic-bezier(.64, .09, .08, 1);
    display: inline-block;
    font-size: 12px;
}
      </style>
  <body>


      <header>
          <div class="container2">
              <div class="d-flex justify-content-between">
                  
              <a class="">
                  <img src="<?php echo e(url("public/system/users/img/Logos.png")); ?>" class="scrub-img">
              </a>
              <div class="btn-one">
                <?php if(empty(session('user')) && empty(session('user')) && empty(session('user'))): ?> 
                 <a href="<?php echo e(url('/user/login')); ?>">
                     <li>Login </li>
                     </a>
                 <a href="<?php echo e(url('user/signup')); ?>">
                 <li><span class="signs">Sign Up</span></li>
                 </a>
                 <?php else: ?>
                 <a href="<?php echo e(url('/actions/logout-user')); ?>">
                     <li>Logout </li>
                     </a>
                 <?php endif; ?>
           <button class="joins">Join as Talent</button>
       </div>
          </div>
          </div>
        
      </header>
      <div class="header1">
        <div class="container3">
          <div class="cleaner">
            <h4>Cleaning Bank</h4>
        </div>
        <div class="header-right">
        <span><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; Subscription : 1 <?php if($bookings_details->subs=='onetime'): ?>Time <?php else: ?> Month <?php endif; ?></span> 
          <span><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Frequency : <?php echo e($bookings_details->how_often); ?></span> 
          <span class="dsescf"><i class="fas fa-broom"></i>&nbsp; Remaining Cleanings : <?php echo e($booking->clean); ?></span> 
        </div>
      </div>
      </div>



      <section class="portls">
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-sm-12 dds">
                <div class="media row">
                  
                  <img class="col-sm-2 p-5 p-sm-0 " src="<?php echo e(url('public/images/'.$cleaner->image)); ?>" alt="Generic placeholder image" width="230">
                  <div class="col-sm-12 media-body">
                      <div class="cleaners">
                        <h5>Meet your Cleaner</h5>
                      </div>
                      <p class="eva"><?php if($cleaner->first_name): ?><?php echo e($cleaner->first_name." ".$cleaner->last_name); ?><?php endif; ?>
                       <?php if(floor($avg)==1): ?> <span><i class="fa fa-star" aria-hidden="true"></i></span>
                       <?php elseif(floor($avg)==2): ?> <span><i class="fa fa-star" aria-hidden="true"></i></span><span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <?php elseif(floor($avg)==3): ?><span><i class="fa fa-star" aria-hidden="true"></i></span><span><i class="fa fa-star" aria-hidden="true"></i></span><span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <?php elseif(floor($avg)==4): ?><span><i class="fa fa-star" aria-hidden="true"></i></span><span><i class="fa fa-star" aria-hidden="true"></i></span><span><i class="fa fa-star" aria-hidden="true"></i></span><span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <?php elseif(floor($avg)==5): ?><span><i class="fa fa-star" aria-hidden="true"></i></span><span><i class="fa fa-star" aria-hidden="true"></i></span><span><i class="fa fa-star" aria-hidden="true"></i></span><span><i class="fa fa-star" aria-hidden="true"></i></span><span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <?php endif; ?>
                        <span class="reviews">(<?php echo e($count); ?> reviews)</span>
                      </p>
                    
                        <p class="checks">Years of Experience : 5 Years<br> Background Check<span><i class="fa fa-check" aria-hidden="true"></i></span> </p>
                  <p class="checks1"><?php echo e($cleaner->description); ?></p>
                  <div class="btns-ones">
                      <button type="button" class="btn1" data-toggle="modal" data-target="#myModal">Leave a Review</button>
                      <input type="hidden" id="book" name="book" value="<?php echo e($assign->booking_id); ?>">
                      <input type="hidden" id="cl_id" name="cl_id" value="<?php echo e($cleaner->id); ?>">
                      <input type="hidden" id="_token" name="_token" value="<?php echo e(csrf_token()); ?>">
                      <input type="hidden" id="cust" name="cust" value="<?php echo e(session('user')); ?>">
                      <?php if($status!='Pending'): ?><button type="button" id="change" class="btn2">Select new Cleaner</button>
                      <?php else: ?><button type="button" id="change" class="btn2" disabled>Request Sent</button>
                      <?php endif; ?>
                      
                      <div class="btns-two">
                        <button type="button" class="btn1"  data-toggle="modal" data-target="#myModal3">Get in Touch</button>
                    </div>
                  </div>
                    
                  </div>
                </div>
                  
              </div>
              <input type="hidden" id="schedule" value="<?php echo e($booking_schedule->date); ?>">
              <div class="col-md-5 col-sm-12">

                    <table summary="a calendar"> 
                      <caption>
                        <a href="#" rel="prev"></a>Next Cleaning : <?php echo e(date('M d, Y', strtotime($booking_schedule->date))); ?> <a href="#" rel="next"></a>
                      </caption>
            
                      <thead>
                        <tr>
                            <th scope="col">Sun</th>
                            <th scope="col">Mon</th>
                            <th scope="col">Tue</th>
                            <th scope="col">Wed</th>
                            <th scope="col">Tur</th>
                            <th scope="col">Fri</th>
                            <th scope="col">Sat</th>
                        </tr>
                      </thead>
            
                      <tbody class="sample">
                        <tr>
                            <td><a href="#" >30</a></td>
                            <td><a href="#">31</a></td>
                            <td><a href="#" id="01">1</a></td>
                            <td><a href="#" id="02">2</a></td>
                            <td><a href="#" id="03">3</a></td>
                            <td><a href="#" id="04">4</a></td>
                            <td><a href="#"id="05">5</a></td>
                        </tr>
            
                        <tr>
                            <td><a href="#" id="06">6</a></td>
                            <td><a href="#" id="07">7</a></td>
                            <td><a href="#" id="08" >8</a></td>
                            <td><a href="#" id="09" >9</a></td>
                            <td><a href="#" id="10">10</a></td>
                            <td><a href="#" id="11">11</a></td>
                            <td><a href="#" id="12">12</a></td>
                        </tr>
            
                        <tr>
                            <td><a href="#" id="13">13</a></td>
                            <td><a href="#" id="14">14</a></td>
                            <td><a href="#" id="15">15</a></td>
                            <td><a href="#" id="16">16</a></td>
                            <td><a href="#" id="17">17</a></td>
                            <td><a href="#" id="18">18</a></td>
                            <td><a href="#" id="19">19</a></td>
                        </tr>
            
            
                        <tr>
                            <td><a href="#" id="20">20</a></td>
                            <td><a href="#" id="21">21</a></td>
                            <td><a href="#" id="22">22</a></td>
                            <td><a href="#" id="23">23</a></td>
                            <td><a href="#" id="24">24</a></td>
                            <td><a href="#" id="25">25</a></td>
                            <td><a href="#" id="26">26</a></td>
                        </tr>
            
                        <tr>
                            <td><a href="#" id="27">27</a></td>
                            <td><a href="#" id="28">28</a></td>
                            <td><a href="#" id="29">29</a></td>
                            <td><a href="#" id="30">30</a></td>
                            <td><a href="#" id="31">31</a></td>
                            <td><a href="#">1</a></td>
                            <td><a href="#">2</a></td>
                        </tr>
            
                      </tbody>
            
                    
                  </table>
                  <div class="btns-one">
                     <?php if($status_resh=="Pending"): ?> <button type="button" class="btn11" data-toggle="modal" data-target="#myModal1" disabled>Reschedule Sent</button> <?php else: ?> <button type="button" class="btn11" data-toggle="modal" data-target="#myModal1">Reschedule</button> <?php endif; ?>
                    <button type="button" class="btn21" data-toggle="modal" data-target="#myModal2">Change Subscription </button>
                     
                  </div>
                  
              </div>
            </div>
          </div>

         
          <!-- modelreview -->
          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="headr">
                  <h4 class="modal-title"></h4>
                  <button type="button" id="closereview" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                  <form id="rating" method="post" >
                    <!-- Form Title -->
                    <div class="form-heading text-center">
                        <div class="title">Write a Review</div>
                        <div class="title-description">We'd love to hear more from our visitors. Your feedback will help us to undestand what we do well and where we can improve.</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Name" required=""> 
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="Email Address" required=""> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea placeholder="Your Comments" name="comment" rows="3" maxlength="120"></textarea>
                        </div>
                    </div>
                    <!-- Rating Star & Send Review Button -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="rating rating star">
                                <div class="rating-wrapper">
                                    <input type="radio" name="star-rating-2" id="star-rating-5-2" value="5">
                                    <label class="fa fa-star" for="star-rating-5-2"></label>
                                    <input type="radio" name="star-rating-2" id="star-rating-4-2" value="4">
                                    <label class="fa fa-star" for="star-rating-4-2"></label>
                                    <input type="radio" name="star-rating-2" id="star-rating-3-2" value="3" checked="checked">
                                    <label class="fa fa-star" for="star-rating-3-2"></label>
                                    <input type="radio" name="star-rating-2" id="star-rating-2-2" value="2">
                                    <label class="fa fa-star" for="star-rating-2-2"></label>
                                    <input type="radio" name="star-rating-2" id="star-rating-1-2" value="1">
                                    <label class="fa fa-star" for="star-rating-1-2"></label>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    
                                   
                                });
                                </script>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="cleaner_id" value="<?php echo e($cleaner->id); ?>">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button id="review" class="modern-button modern-red">Send Review</button>
                        </div>
                        <div class="showmst1"></div>
                    </div>
                </form>
                </div>
          
                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div> -->
          
              </div>
            </div>
          </div>


          <!-- modeldatechoose -->
          <div class="modal" id="myModal1">
            <div class="modal-dialog">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="headr">
                  <h4 class="modal-title"></h4>
                  <button type="button" id='closereschedule' class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                  <form id="reschedule" method="post">
                    <!-- Form Title -->
                    <div class="form-heading text-center">
                        <div class="title">Reschedule</div>
                        <div class="title-description">We'd love to hear more from our visitors. Your feedback will help us to undestand what we do well and where we can improve.</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="date" name='date' placeholder="Date" required=""> 
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="time" placeholder="Time" required=""> 
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="booking_id" value="<?php echo e($assign->booking_id); ?>">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button id="submit" class="modern-button modern-red">Reschedule</button>
                        </div>
                        <div class="showmst2"></div>
                    </div>
                </form>
                </div>
          
                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div> -->
          
              </div>
            </div>
          </div>

           <!-- subscriber -->
           <div class="modal" id="myModal2">
            <div class="modal-dialog">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="headr">
                  <h4 class="modal-title"></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                
                    <!-- Form Title -->
                    <div class="form-heading text-center">
                        <div class="title">Subscription</div>
                        
                    </div>
                    
                  
                <div class="row">
                  <div class="col-md-12 text-center">
                     <a href="<?php echo e(url('/booking')); ?>"><button class="modern-button modern-red">Change Subscription</button>
                     </a>
                    </div>
              </div>
                <div class="row">
                  <div class="col-md-12 text-center">
                      <button class="modern-button modern-red">Cancle Subscription</button>
                  </div>
              </div>
                </div>
          
                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div> -->
          
              </div>
            </div>
          </div>

          <!-- Get in touch -->
          <!-- The Modal -->
          <div class="modal" id="myModal3">
            <div class="modal-dialog">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="headr">
                  <h4 class="modal-title"></h4>
                  <button type="button" id="closetouch" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                  <form id="touch" method="post">
                    <!-- Form Title -->
                    <div class="form-heading text-center">
                        <div class="title">Get in Touch</div>
                        <div class="title-description">We'd love to hear more from our visitors. Your feedback will help us to undestand what we do well and where we can improve.</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="name" placeholder="Username" required=""> 
                        </div>
                        <div class="col-md-12">
                            <input type="email"  name="email" placeholder="Email Address" required=""> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="comment" placeholder="Your Comments" rows="3" maxlength="120"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button id="contact" type="submit" class="modern-button modern-red">Contact</button>
                        </div>
                    </div>
                    <div class="showmst3"></div>
                </form>
                </div>
          
                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div> -->
          
              </div>
            </div>
          </div>

      </section>

      <div class="footer">
          <p>Scrubbing Genius.All rights Reserved</p>
        </div>

        <script src="js/app.js"></script>
        <script>
          $(document).ready(function(){
          //   var b=$("tbody.sample").find("a.selected").text();
          //  //var a= $(".sample a:nth-child(1)").text();
          //  alert(b);
            // $(this).addClass('selected');
          });
        var currentMonth = 0,
  currentYear = 2015,
  monthMap = ['JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER'];
  $dayList = $('.days');

var addDayElement = function(date, $container) {
var element = $(document.createElement('div')).addClass('date');
if (date.getMonth() !== currentMonth) { element.addClass('out-of-scope'); }
element.text(date.getDate());
$container.append(element);
};

var getFirstLastDates = function(date) {
var startDate, endDate;
//First, find the first Monday prior to the beginning of the current month.
startDate = new Date(date.getFullYear(), date.getMonth(), 1);
while (startDate.getDay() !== 1) { startDate.setDate(startDate.getDate() - 1); }
//Now, find the Sunday nearest the last day of the current month.
endDate = new Date(date.getFullYear(), date.getMonth() + 1, 0);
while (endDate.getDay() !== 0) { endDate.setDate(endDate.getDate() + 1); }
return [startDate, endDate];
};

var renderDays = function(dateRange) {
$dayList.empty();
var startDate = dateRange[0],
    endDate = dateRange[1],
    currentDate = startDate;

while (currentDate <= endDate) {
  addDayElement(currentDate, $dayList);
  currentDate.setDate(currentDate.getDate() + 1);
}
}

var loadCalendar = function(date) {
$('.headline .month').text(monthMap[currentMonth]);
$('.headline .year').text(currentYear);
renderDays(getFirstLastDates(date));
};

//start us off on the current month & date;
loadCalendar(new Date());






// $('.days').on('click', '.date', function(e) {
// $('.date').removeClass('selected');
// $(this).addClass('selected');
// });

$('.click-left').on('click', function(e) {
currentMonth--;
if (currentMonth < 0) {
  currentMonth = 11;
  currentYear--;
}
loadCalendar(new Date(currentYear, currentMonth));
});

$('.click-right').on('click', function(e) {
currentMonth++;
if (currentMonth > 11) {
  currentMonth = 0;

  currentYear++;
}
loadCalendar(new Date(currentYear, currentMonth));
});
            
        </script>
<script>
$('.sample tr td a').on('click', function() {
    $('.sample tr td a.selected').removeClass('selected');
    $(this).addClass('selected');
});
</script>
<script>
  $(document).ready(function(){
    var r="#";
    var dat=$("#schedule").val().split("-");
    var add=dat[2];
    add=r.concat(add);
   $(add).addClass('selected');

  });
  </script>

  <script>

    $(document).ready(function(){

      var host="scrubbing";
     
      jQuery("#rating").validate({
           rules: {
               email:{required: true},
               comment: {required: true},
               name:{required: true},
          },
       messages: {
        email: "Please enter an e-mail address.",
        comment: {required: 'Please enter Password.'},
        name: {required: 'Please enter Password.'},
           },
           submitHandler: function(form,e) {  
             e.preventDefault();
            var rating= $("input[name='star-rating-2']:checked").val();
             var formData= new FormData(jQuery('#rating')[0]);
             formData.append('rating',rating);
            jQuery.ajax({
            type: 'post',
            url: '/'+host+'/action/review',
            cache: false,
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                jQuery('#review').text('submitting...');
                jQuery('#review').attr('disabled','disabled');
            },
            success:function(response) {      
                var obj = JSON.parse(response);
                if(obj.status==true){
                    jQuery('.showmst1').css('display','block').html(obj.message);  
                    jQuery('#review').text('send review');                   
                    setTimeout(function(){
                       jQuery('#review').removeAttr('disabled');                       
                       jQuery('.showmst1').css('display','none').html('');  
                       $("#closereview")[0].click();
                       location.reload();
                       }, 3000);
                        $("#rating")[0].reset();
                        
                }else{
                  alert("hello");
                    jQuery('#review').text('send review');                   
                    jQuery('#review').removeAttr('disabled');
                    jQuery('.showmst1').css('display','block').html(obj.message);
                    setTimeout(function(){
                       jQuery('.showmst1').css('display','none').html('');
                       $("#closereview")[0].click();
                      }, 3000);
                      
                }
            }
               });
   
            }
       });  
  
    jQuery("#reschedule").validate({
         rules: {
             date:{required: true},
             time: {required: true},
             
        },
     messages: {
      date: "Please enter an date.",
      time: {required: 'Please enter time.'},
         },
         submitHandler: function(form,e) {  
           e.preventDefault();
         // var rating= $("input[name='star-rating-2']:checked").val();
           var formData= new FormData(jQuery('#reschedule')[0]);
           
          jQuery.ajax({
          type: 'post',
          url: '/'+host+'/action/reschedule',
          cache: false,
          data: formData,
          processData: false,
          contentType: false,
          beforeSend: function() {
              jQuery('#submit').text('submitting...');
              jQuery('#submit').attr('disabled','disabled');
          },
          success:function(response) {      
              var obj = JSON.parse(response);
              if(obj.status==true){
                  jQuery('.showmst2').css('display','block').html(obj.message);  
                  jQuery('#submit').text('Reschedule');                   
                  setTimeout(function(){
                     jQuery('#submit').removeAttr('disabled');                       
                     jQuery('.showmst2').css('display','none').html('');  
                     $("#closereschedule")[0].click();
                     location.reload();
                     }, 3000);
                      $("#reschedule")[0].reset();
                      
              }else{
               
                  jQuery('#submit').text('send review');                   
                  jQuery('#submit').removeAttr('disabled');
                  jQuery('.showmst2').css('display','block').html(obj.message);
                  setTimeout(function(){
                     jQuery('.showmst2').css('display','none').html('');
                     $("#closereschedule")[0].click();
                     location.reload();
                    }, 3000);
                    
              }
          }
             });
 
          }
     });  

    jQuery("#touch").validate({
         rules: {
             email:{required: true},
             comment: {required: true},
             name:{required: true},
        },
     messages: {
      email: "Please enter an e-mail address.",
      comment: {required: 'Please enter message.'},
      name: {required: 'Please enter name.'},
         },
         submitHandler: function(form,e) {  
           e.preventDefault();
         // var rating= $("input[name='star-rating-2']:checked").val();
           var formData= new FormData(jQuery('#touch')[0]);
           //formData.append('rating',rating);
          jQuery.ajax({
          type: 'post',
          url: '/'+host+'/action/contact',
          cache: false,
          data: formData,
          processData: false,
          contentType: false,
          beforeSend: function() {
              jQuery('#contact').text('submitting...');
              jQuery('#contact').attr('disabled','disabled');
          },
          success:function(response) {      
              var obj = JSON.parse(response);
              if(obj.status==true){
                  jQuery('.showmst3').css('display','block').html(obj.message);  
                  jQuery('#contact').text('send review');                   
                  setTimeout(function(){
                     jQuery('#contact').removeAttr('disabled');                       
                     jQuery('.showmst3').css('display','none').html('');  
                     $("#closetouch")[0].click();
                     location.reload();
                     }, 3000);
                      $("#touch")[0].reset();
                      
              }else{
                alert("hello");
                  jQuery('#contact').text('send review');                   
                  jQuery('#contact').removeAttr('disabled');
                  jQuery('.showmst3').css('display','block').html(obj.message);
                  setTimeout(function(){
                     jQuery('.showmst3').css('display','none').html('');
                     $("#closetouch")[0].click();
                    }, 3000);
                    
              }
          }
             });
 
          }
     });  

    });
    </script>

<script src="<?php echo e(url('public/system/admin/vendor/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(url('public/system/admin/js/jquery.validate.js')); ?>"></script>
    <script src="<?php echo e(url('public/system/admin/js/customer.js')); ?>"></script>
    <script src="<?php echo e(url('public/system/admin/js/jquery-ui.js')); ?>"></script>
        
  </body>
</html><?php /**PATH C:\xampp\htdocs\scrubbing\resources\views/users/info.blade.php ENDPATH**/ ?>