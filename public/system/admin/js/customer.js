

      var host ="development/education";
	  
    $(document).ready(function(){

    jQuery("#user_register").on('submit',function(e, a) {
        e.preventDefault();
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
                        //  jQuery('#register').text('Save');
                        //  jQuery('#register').removeAttr('disabled');
                        //  jQuery('.showmst1').css('display','none').html('');                    
                        document.location.href= '/'+host+'/user';
                         
                        }, 2000);
                      
                        jQuery('#reset').trigger('click');
                  }else if(obj.status=='book'){
                    jQuery('#register').text('Register Succesfully!');
                    jQuery('.showmst1').css('display','block').html(obj.message);                     
                      setTimeout(function(){
                      //  jQuery('#register').text('Save');
                      //  jQuery('#register').removeAttr('disabled');
                      //  jQuery('.showmst1').css('display','none').html('');                    
                      document.location.href= '/'+host+'/user/payment';
                       
                      }, 2000);
                    
                      jQuery('#reset').trigger('click');

                  }
                  else{
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
    

     jQuery("#user_login").submit(function(e) {
        e.preventDefault(); 
        jQuery("#user_login").validate({
             rules: {
                 email:{required: true},
                 password: {required: true, minlength:6, maxlength:50},
            },
         messages: {
          email: "Please enter an e-mail address.",
          password: {required: 'Please enter Password.',minlength:'Please enter minimum length of password limit 6 digit.'},
             },
             submitHandler: function(form) {  
                
            var formData= new FormData(jQuery('#user_login')[0]);
              jQuery.ajax({
              type: 'post',
              url: '/'+host+'/action/login',
              cache: false,
              data: formData,
              processData: false,
              contentType: false,
              beforeSend: function() {
                  jQuery('#login').text('checking ...');
                  jQuery('#login').attr('disabled','disabled');
              },
              success:function(response) {      
                  var obj = JSON.parse(response);
                  if(obj.status==true){
                      jQuery('.showmst1').css('display','block').html(obj.message);
                      
                      setTimeout(function(){
                         jQuery('#login').removeAttr('disabled');
                         document.location.href= '/'+host+'/home';
                         jQuery('.showmst1').css('display','none').html('');  
                         }, 2000);
                          jQuery('#reset').trigger('click');
                  }else{
                      jQuery('#login').text('Login');
                     
                      jQuery('#login').removeAttr('disabled');
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
    });
     jQuery("#rating").submit(function(e) {
      e.preventDefault(); 
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
           submitHandler: function(form) {  
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
   });

   jQuery("#reschedule").submit(function(e) {
    e.preventDefault(); 
    jQuery("#reschedule").validate({
         rules: {
             date:{required: true},
             time: {required: true},
             
        },
     messages: {
      date: "Please enter an date.",
      time: {required: 'Please enter time.'},
         },
         submitHandler: function(form) {  
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
                     }, 3000);
                      $("#reschedule")[0].reset();
                      
              }else{
                alert("hello");
                  jQuery('#submit').text('send review');                   
                  jQuery('#submit').removeAttr('disabled');
                  jQuery('.showmst2').css('display','block').html(obj.message);
                  setTimeout(function(){
                     jQuery('.showmst2').css('display','none').html('');
                     $("#closereschedule")[0].click();
                    }, 3000);
                    
              }
          }
             });
 
          }
     });  
 });

 jQuery("#touch").submit(function(e) {
    e.preventDefault(); 
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
         submitHandler: function(form) {  
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

 jQuery("#change").click(function(e) {
    e.preventDefault(); 
    var booking_id=$("#book").val();
    var cleaner_id=$("#cl_id").val();
    var token=$("#_token").val();
    var cust=$("#cust").val();
    var formData=new FormData();
    formData.append('booking_id',booking_id);
    formData.append('cleaner_id',cleaner_id);
    formData.append('customer_id',cust);
    formData.append('_token',token);

    jQuery.ajax({
        type: 'post',
        url: '/'+host+'/action/change',
        cache: false,
        data: formData,
        processData: false,
        contentType: false,
        beforeSend: function() {
            jQuery('#change').text('sending...');
            jQuery('#change').attr('disabled','disabled');
        },
        success:function(response) {      
            var obj = JSON.parse(response);
            if(obj.status==true){
               // jQuery('.showmst4').css('display','block').html(obj.message);  
               alert(obj.message);
                jQuery('#change').text('Request Sent');                   
                setTimeout(function(){
                   //jQuery('#change').removeAttr('disabled');                       
                   jQuery('.showmst4').css('display','none').html('');                      
                   }, 3000);                              
            }else{
             
                //jQuery('#change').text('change cleaner');                   
                jQuery('#change').removeAttr('disabled');
                jQuery('.showmst4').css('display','block').html(obj.message);
                setTimeout(function(){
                   jQuery('.showmst4').css('display','none').html('');                    
                  }, 3000);                    
            }
        }
           }); 
 });

 
$(document).ready(function(){


 $("#bed").change(function(){

    var formdata=new FormData();
    formdata.append('bed',$("#bed").val());
    formdata.append('bath',$("#bath").val());
    formdata.append('often',$(".active").val());
    formdata.append('sub',$(".active1").val());
   
    formdata.append('supply',$(".active4").val());
    formdata.append('_token',$("#token").val()); 
   
    /// checkbox values 
    formdata.append('Cabinet','');
    formdata.append('Fridge','');
    formdata.append('Oven','');
    formdata.append('Laundry','');
    var extraArr= $('.Checkbox:checked').map(function() {return  this.value;})   
    for(let x=0; x < extraArr.length; x++){
        formdata.set(extraArr[x],extraArr[x]);
        ;
    }
    
     $.ajax({
         type:'post',
         url:'/'+host+"/action/price",
         data: formdata,
         contentType:false,
         processData:false,
         success: function(response){
            var obj = JSON.parse(response);
             if(obj.status==true){
                 var q="$".concat(obj.price).concat('<sup>00</sup>');
                $(".bas_totla2").html(q);
                $(".often").html(obj.often);
                $(".saving").html(obj.saving);
                $(".save").html(obj.saving);
                $(".total").html(obj.total);
                $(".tax").html(obj.tax);
                $(".sub").html(q);
             }else{

             }
         }
     });
});
$("#bath").change(function(){
    var formdata=new FormData();
    formdata.append('bed',$("#bed").val());
    formdata.append('bath',$("#bath").val());
    formdata.append('often',$(".active").val());
    formdata.append('sub',$(".active1").val());
    formdata.append('supply',$(".active4").val());
    formdata.append('_token',$("#token").val());
    
    formdata.append('Cabinet','');
    formdata.append('Fridge','');
    formdata.append('Oven','');
    formdata.append('Laundry','');
    var extraArr= $('.Checkbox:checked').map(function() {return  this.value;})   
    for(let x=0; x < extraArr.length; x++){
        formdata.set(extraArr[x],extraArr[x]);
        ;
    }
   
     

     $.ajax({
         type:'post',
         url:'/'+host+"/action/price",
         data: formdata,
         contentType:false,
         processData:false,
         success: function(response){
            var obj = JSON.parse(response);
             if(obj.status==true){
                 var q="$".concat(obj.price).concat('<sup>00</sup>');
                $(".bas_totla2").html(q);
                $(".often").html(obj.often);
                $(".saving").html(obj.saving);
                $(".save").html(obj.saving);
                $(".total").html(obj.total);
                $(".tax").html(obj.tax);
                $(".sub").html(q);
             }else{

             }
         }
     });
});
$("#week").click(function(){
    var formdata=new FormData();
    formdata.append('bed',$("#bed").val());
    formdata.append('bath',$("#bath").val());
    formdata.append('often',$(".active").val());
    formdata.append('sub',$(".active1").val());
    formdata.append('supply',$(".active4").val());
    formdata.append('_token',$("#token").val());
   
    formdata.append('Cabinet','');
    formdata.append('Fridge','');
    formdata.append('Oven','');
    formdata.append('Laundry','');
    var extraArr= $('.Checkbox:checked').map(function() {return  this.value;})   
    for(let x=0; x < extraArr.length; x++){
        formdata.set(extraArr[x],extraArr[x]);
        ;
    }
     $.ajax({
         type:'post',
         url:'/'+host+"/action/price",
         data: formdata,
         contentType:false,
         processData:false,
         success: function(response){
            var obj = JSON.parse(response);
             if(obj.status==true){
                 var q="$".concat(obj.price).concat('<sup>00</sup>');
                $(".bas_totla2").html(q);
                $(".often").html(obj.often);
                $(".saving").html(obj.saving);
                $(".save").html(obj.saving);
                $(".total").html(obj.total);
                $(".tax").html(obj.tax);
                $(".sub").html(q);
             }else{

             }
         }
     });

});
$("#biweek").click(function(){
    var formdata=new FormData();
    formdata.append('bed',$("#bed").val());
    formdata.append('bath',$("#bath").val());
    formdata.append('often',$(".active").val());
    formdata.append('sub',$(".active1").val());
    formdata.append('supply',$(".active4").val());
    formdata.append('_token',$("#token").val());
    //checkbox values
    formdata.append('Cabinet','');
    formdata.append('Fridge','');
    formdata.append('Oven','');
    formdata.append('Laundry','');
    var extraArr= $('.Checkbox:checked').map(function() {return  this.value;})   
    for(let x=0; x < extraArr.length; x++){
        formdata.set(extraArr[x],extraArr[x]);
        ;
    }
   

     $.ajax({
         type:'post',
         url:'/'+host+"/action/price",
         data: formdata,
         contentType:false,
         processData:false,
         success: function(response){
            var obj = JSON.parse(response);
             if(obj.status==true){
                 var q="$".concat(obj.price).concat('<sup>00</sup>');
                $(".bas_totla2").html(q);
                $(".often").html(obj.often);
                $(".saving").html(obj.saving);
                $(".save").html(obj.saving);
                $(".total").html(obj.total);
                $(".tax").html(obj.tax);
                $(".sub").html(q);
             }else{

             }
         }
     });

});
$("#month").click(function(){
    var formdata=new FormData();
    formdata.append('bed',$("#bed").val());
    formdata.append('bath',$("#bath").val());
    formdata.append('often',$(".active").val());
    formdata.append('sub',$(".active1").val());
    formdata.append('supply',$(".active4").val());
    formdata.append('_token',$("#token").val());
   
    //checkbox values
    formdata.append('Cabinet','');
    formdata.append('Fridge','');
    formdata.append('Oven','');
    formdata.append('Laundry','');
    var extraArr= $('.Checkbox:checked').map(function() {return  this.value;})   
    for(let x=0; x < extraArr.length; x++){
        formdata.set(extraArr[x],extraArr[x]);
        ;
    }

     $.ajax({
         type:'post',
         url:'/'+host+"/action/price",
         data: formdata,
         contentType:false,
         processData:false,
         success: function(response){
            var obj = JSON.parse(response);
             if(obj.status==true){
                 var q="$".concat(obj.price).concat('<sup>00</sup>');
                $(".bas_totla2").html(q);
                $(".often").html(obj.often);
                $(".saving").html(obj.saving);
                $(".save").html(obj.saving);
                $(".total").html(obj.total);
                $(".tax").html(obj.tax);
                $(".sub").html(q);
             }else{

             }
         }
     });

});
$("#onetime").click(function(){
    var formdata=new FormData();
    formdata.append('bed',$("#bed").val());
    formdata.append('bath',$("#bath").val());
    formdata.append('often',$(".active").val());
    formdata.append('sub',$(".active1").val());
    formdata.append('supply',$(".active4").val());
    formdata.append('_token',$("#token").val());
   
    //checkbox values
    formdata.append('Cabinet','');
    formdata.append('Fridge','');
    formdata.append('Oven','');
    formdata.append('Laundry','');
    var extraArr= $('.Checkbox:checked').map(function() {return  this.value;})   
    for(let x=0; x < extraArr.length; x++){
        formdata.set(extraArr[x],extraArr[x]);
        ;
    }
    
     $.ajax({
         type:'post',
         url:'/'+host+"/action/price",
         data: formdata,
         contentType:false,
         processData:false,
         success: function(response){
            var obj = JSON.parse(response);
             if(obj.status==true){
                 var q="$".concat(obj.price).concat('<sup>00</sup>');
                $(".bas_totla2").html(q);
                $(".often").html(obj.often);
                $(".saving").html(obj.saving);
                $(".save").html(obj.saving);
                $(".total").html(obj.total);
                $(".tax").html(obj.tax);
                $(".sub").html(q);
             }else{

             }
         }
     });

});
$("#onemonth").click(function(){
    var formdata=new FormData();
    formdata.append('bed',$("#bed").val());
    formdata.append('bath',$("#bath").val());
    formdata.append('often',$(".active").val());
    formdata.append('sub',$(".active1").val());
    formdata.append('supply',$(".active4").val());
    formdata.append('_token',$("#token").val());
   
   //checkbox values
   formdata.append('Cabinet','');
   formdata.append('Fridge','');
   formdata.append('Oven','');
   formdata.append('Laundry','');
   var extraArr= $('.Checkbox:checked').map(function() {return  this.value;})   
   for(let x=0; x < extraArr.length; x++){
       formdata.set(extraArr[x],extraArr[x]);
       ;
   }

     $.ajax({
         type:'post',
         url:'/'+host+"/action/price",
         data: formdata,
         contentType:false,
         processData:false,
         success: function(response){
            var obj = JSON.parse(response);
             if(obj.status==true){
                 var q="$".concat(obj.price).concat('<sup>00</sup>');
                $(".bas_totla2").html(q);
                $(".often").html(obj.often);
                $(".saving").html(obj.saving);
                $(".save").html(obj.saving);
                $(".total").html(obj.total);
                $(".tax").html(obj.tax);
                $(".sub").html(q);
             }else{

             }
         }
     });

});

$(".image-checkbox").click(function(){
    var formdata=new FormData();
    formdata.append('bed',$("#bed").val());
    formdata.append('bath',$("#bath").val());
    formdata.append('often',$(".active").val());
    formdata.append('sub',$(".active1").val());
    formdata.append('supply',$(".active4").val());
    formdata.append('_token',$("#token").val());
   
     //checkbox values
    formdata.append('Cabinet','');
    formdata.append('Fridge','');
    formdata.append('Oven','');
    formdata.append('Laundry','');
    var extraArr= $('.Checkbox:checked').map(function() {return  this.value;})   
    for(let x=0; x < extraArr.length; x++){
        formdata.set(extraArr[x],extraArr[x]);
        ;
    }

     $.ajax({
         type:'post',
         url:'/'+host+"/action/price",
         data: formdata,
         contentType:false,
         processData:false,
         success: function(response){
            var obj = JSON.parse(response);
             if(obj.status==true){
                 var q="$".concat(obj.price).concat('<sup>00</sup>');
                $(".bas_totla2").html(q);
                $(".often").html(obj.often);
                $(".saving").html(obj.saving);
                $(".save").html(obj.saving);
                $(".total").html(obj.total);
                $(".tax").html(obj.tax);
                $(".sub").html(q);
             }else{

             }
         }
     });

});
$("#supplie").click(function(){
    var formdata=new FormData();
    formdata.append('bed',$("#bed").val());
    formdata.append('bath',$("#bath").val());
    formdata.append('often',$(".active").val());
    formdata.append('sub',$(".active1").val());
    formdata.append('supply',$(".active4").val());
    formdata.append('_token',$("#token").val());
   
   //checkbox values
   formdata.append('Cabinet','');
   formdata.append('Fridge','');
   formdata.append('Oven','');
   formdata.append('Laundry','');
   var extraArr= $('.Checkbox:checked').map(function() {return  this.value;})   
   for(let x=0; x < extraArr.length; x++){
       formdata.set(extraArr[x],extraArr[x]);
       ;
   }
     $.ajax({
         type:'post',
         url:'/'+host+"/action/price",
         data: formdata,
         contentType:false,
         processData:false,
         success: function(response){
            var obj = JSON.parse(response);
             if(obj.status==true){
                 var q="$".concat(obj.price).concat('<sup>00</sup>');
                $(".bas_totla2").html(q);
                $(".often").html(obj.often);
                $(".saving").html(obj.saving);
                $(".save").html(obj.saving);
                $(".total").html(obj.total);
                $(".tax").html(obj.tax);
                $(".sub").html(q);
             }else{

             }
         }
     });

});
$("#supplieno").click(function(){
    var formdata=new FormData();
    formdata.append('bed',$("#bed").val());
    formdata.append('bath',$("#bath").val());
    formdata.append('often',$(".active").val());
    formdata.append('sub',$(".active1").val());
    formdata.append('supply',$(".active4").val());
    formdata.append('_token',$("#token").val());
   
    //checkbox values
    formdata.append('Cabinet','');
    formdata.append('Fridge','');
    formdata.append('Oven','');
    formdata.append('Laundry','');
    var extraArr= $('.Checkbox:checked').map(function() {return  this.value;})   
    for(let x=0; x < extraArr.length; x++){
        formdata.set(extraArr[x],extraArr[x]);
        ;
    }

     $.ajax({
         type:'post',
         url:'/'+host+"/action/price",
         data: formdata,
         contentType:false,
         processData:false,
         success: function(response){
            var obj = JSON.parse(response);
             if(obj.status==true){
                 var q="$".concat(obj.price).concat('<sup>00</sup>');
                $(".bas_totla2").html(q);
                $(".often").html(obj.often);
                $(".saving").html(obj.saving);
                $(".save").html(obj.saving);
                $(".total").html(obj.total);
                $(".tax").html(obj.tax);
                $(".sub").html(q);
             }else{

             }
         }
     });

});


$("#details").submit(function(e){
    e.preventDefault();
    var data=new FormData($("#details")[0]);
    var formdata=new FormData();
    formdata.append('bed',$("#bed").val());
    formdata.append('bath',$("#bath").val());
    formdata.append('often',$(".active").val());
    formdata.append('sub',$(".active1").val());
    formdata.append('extra',$(".active2").data('value'));
    formdata.append('supply',$(".active4").val());
    formdata.append('_token',$("#token").val());

    //checkbox values
    formdata.append('Cabinet','');
    formdata.append('Fridge','');
    formdata.append('Oven','');
    formdata.append('Laundry','');
    var extraArr= $('.Checkbox:checked').map(function() {return  this.value;})   
    for(let x=0; x < extraArr.length; x++){
        formdata.set(extraArr[x],extraArr[x]);
        ;
    }

    for(var pair of data.entries()) {
            formdata.append(pair[0],pair[1]);
            }
   
    $.ajax({
         type:'post',
         url:'/'+host+"/action/booking",
         data: formdata,
         contentType:false,
         processData:false,
         beforeSend:function(){
             $("#book").text('Booking...')
             $('#book').attr('disabled','disabled');
            },
         success: function(response){
            var obj = JSON.parse(response);
             if(obj.status==true){
                $('.showmst1').css('display','block').html(obj.message);
             setTimeout(function(){
               $('#book').removeAttr('disabled');
               $('.showmst1').css('display','none').html('');  
               location.href="/"+host+'/checkout';   
               $("#book").text('continue to payment');  
              }, 2000);
             $("#details")[0].reset();

             }else{
                    $('.showmst1').css('display','block').html(obj.message);
                    setTimeout(function(){
                    $('#book').removeAttr('disabled');
                    $('.showmst1').css('display','none').html('');  
                    location.href="/"+host+'/user/signup';  
                    $("#book").text('continue to payment');   
              }, 2000);
            

             }
         }
     });

});
});