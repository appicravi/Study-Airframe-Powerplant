

jQuery(document).ready(function() {
jQuery( "#date" ).datepicker({
  changeMonth: true,
  changeYear: true,
 // minDate: 0,
  dateFormat: 'yy-mm-dd'
});
jQuery( "#datefrom, #dateto" ).datepicker({
  changeMonth: true,
  changeYear: true,
 // minDate: 0,
  dateFormat: 'yy-mm-dd'
}); 
	
	jQuery(".dropdown-toggle").on("mouseenter", function () {
		if (!jQuery(this).parent().hasClass("show")) {
			jQuery(this).click();
		}
	});
	jQuery(".btn-group, .dropdown").hover(
		function () {
			jQuery('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
			jQuery(this).addClass('open');
		},
		function () {
			jQuery('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
			jQuery(this).removeClass('open');
		}
	);
	// var host = 'development/roccabox';
	var host = 'education';
    jQuery.validator.addMethod("alpha_email", function(e, a) {
		return this.optional(a) || e.toLowerCase() == e.toLowerCase().match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/)
	}, 'Please choose valid email-address.');
	
	jQuery(".logout").click(function(e) {
		e.preventDefault();
		jQuery.ajax({
			type: 'post',
			url: '/'+host+'/actions/logout',
			data: {
				_token: jQuery(this).data('csrf')
			},
			success: function(data) {
				var obj = JSON.parse(data);
				if(obj.status==true){
					window.location = '/'+host;
				}else{
					alert(obj.message);
				}
			}
		});
	});
	jQuery("#reschedule").click(function(e) {
		e.preventDefault();
		
		jQuery.ajax({
			type: 'post',
			url: '/'+host+'/actions/reschedule_booking',
			data: {
				booking_id:$(this).data('id'),
				_token: $("#_token").val(),
			},
			success: function(data) {
				var obj = JSON.parse(data);
				if(obj.status==true){
					alert(obj.message);
					$("#reschedule").text("Rescheduled");
					$("#reschedule").attr('disabled','disabled');
					location.reload();
				}else{
					alert(obj.message);
				}
			}
		});
	});

	
    jQuery("#user_register22").each(function(e, a) {
      jQuery(this).validate({
           rules: {
               name: {required: true},
               email:{required: true,alpha_email: true},
               password: {required: true, minlength:6, maxlength:50},
          },
           messages: {
		first_name: "Please enter  name.",
		email: "Please enter an e-mail address.",
		password: {required: 'Please enter Password.',minlength:'Please enter minimum length of password limit 6 digit.'},
           },
           submitHandler: function(form) {   
             var formData= new FormData(jQuery('#user_register')[0]);
               formData.append('_token',"{{ csrf_token() }}");
               jQuery.ajax({
			type: 'post',
			url: host+'/signup',
			cache: false,
			data: formData,
			processData: false,
			contentType: false,
			beforeSend: function() {
				jQuery('#register').text('saving ...');
				jQuery('#register').attr('disabled','disabled');
			},
			success:function(response) {      
				var obj = JSON.parse(response);
				if(obj.status=='true'){
					jQuery('.showmst1').css('display','block').html(obj.message);
					jQuery('#register').text('Register Succesfully!');

					setTimeout(function(){
					   jQuery('#register').text('Save');
					   jQuery('#register').removeAttr('disabled');
					   jQuery('.showmst1').css('display','none').html('');                    
					     
					   
					  }, 2000);
					   jQuery('#reset').trigger('click');
				}else{
					jQuery('#register').text('Save');
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
   
   jQuery("#login").each(function(e, a) {
      jQuery(this).validate({
           rules: {
               phone:{required: true},
               password: {required: true}
          },
           messages: {
				phone: {required:"Please enter your phone number  hggfvfhj "},
				password: {required: 'Please enter Password.'}
           },
           submitHandler: function(form) {   
             var formData= new FormData(jQuery('#login')[0]);
               jQuery.ajax({
					type: 'post',
					url: '/'+host+'/actions/suparAdmin',
					cache: false,
					data: formData,
					processData: false,
					contentType: false,
					beforeSend: function() {
						jQuery('#signin').text('Checking...');
					},
					success:function(data) {       
						var obj = JSON.parse(data);
						if(obj.status==true){
							jQuery('#msz').html(obj.message);
							jQuery('#signin').text('Sign In');
							setTimeout(function(){
							   window.location = '/'+host+"/super-admin/dashboard";
							}, 2000);
						}else{
							jQuery('#signin').text('Sign In');
						}
					}
               });
   
            }
       });  
   });
   jQuery("#profile").each(function(e, a) {
	jQuery(this).validate({
		rules: {
			
			Oldpassword: "required",
			Newpassword: "required",
			
			password: {
			  required: true,
			  minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			}
		  },
		 submitHandler: function(form) {   
		   var formData= new FormData(jQuery('#profile')[0]);
			 jQuery.ajax({
				  type: 'post',
				  url: '/'+host+'/changepassword',
				  cache: false,
				  data: formData,
				  processData: false,
				  contentType: false,
				  beforeSend: function() {
					  jQuery('.result').text('Submitting...');
				  },
				  success:function(data) {      
					  var obj = JSON.parse(data);
					  if(obj.status==true){
						  jQuery('.result').html(obj.message);
						  setTimeout(function(){
							 jQuery('#reset')[0].click();
							 jQuery('.result').html('');
							 window.location = '/'+host+"/super-admin/profile";
						  }, 2000);
					  }else{
						  jQuery('.result').html('');
					  }
				  }
			 });
 
		  }
	 });  
  });
//change status Assign order
  jQuery("#option").change(function(e){
	e.preventDefault();
	var v=jQuery(this).val();
	var check=0;
	if(v=='Assign'){
		check=1;
		$("#modal")[0].click();
		return false;
				
	}
	jQuery.ajax({
		type: 'post',
		url: '/'+host+'/actions/orderStatus',
		data: { 
			id: jQuery("#makehidden").val(),
			status: jQuery(this).val(),
			type: jQuery("#metype").val(),
			_token: jQuery("#token").val()
		},
		success: function(data) {
			if(check==0){
			  location.reload();
			}
		}
	});
});
$("#assign_cl").submit(function(e){
	e.preventDefault();
	var id=new FormData($("#assign_cl")[0]);
	jQuery.ajax({
		type:'post',
		url:'/'+host+'/actions/assign',
		data:id,
		contentType:false,
		processData:false,
		success:function(data){
			var obj= JSON.parse(data)
			if(obj.status==true){
				$("#close")[0].click();
				alert(obj.message);
				
				location.reload();
			}else{
				$("#close")[0].click();
				alert(obj.message);
			}
			
		}

	});

});

	jQuery(".deleteme").click(function(e) {
		e.preventDefault();
		var ask = confirm("Want to delete?");
		if (ask) {
			jQuery.ajax({
				type: 'post',
				url: '/'+host+'/actions/delete',
				data: { 
					id: jQuery(this).data('id'),
					type: jQuery(this).data('type'),
					_token: jQuery(this).data('token')
				},
				success: function(data) {
					var obj = JSON.parse(data);
					if(obj.status==true){
						jQuery('#row_'+obj.id).remove();
					}else{
						alert(obj.message);
					}
				}
			});
		}
	});
	

	jQuery('.invItem').on('click',function(){
		var did = jQuery(this).data('id');
		jQuery('.invItem.active').removeClass('active');
		jQuery(this).addClass('active');
		jQuery('#basicdata').css('display','none');
		jQuery('#itemdata').css('display','none');
		jQuery('#unitdata').css('display','none');
		jQuery('#'+did).css('display','block');
	});
	jQuery('.citem').on('click',function(){
		var did = jQuery(this).data('id');
		jQuery('.citem.active').removeClass('active');
		jQuery(this).addClass('active');
		jQuery('#basic').css('display','none');
		jQuery('#item').css('display','none');
		jQuery('#unit').css('display','none');
		jQuery('#price').css('display','none');
		jQuery('#'+did).css('display','block');
	});
	jQuery('.cmitema').on('click',function(){
		jQuery("#upgrade").prop("checked", false);
		jQuery("#type1").val("add_combo_item");
		jQuery("#id1").val("");
		jQuery('.reset')[0].click();
	});
	jQuery('.cpm').on('click',function(){
		jQuery("#type3").val("add_combo_price");
		jQuery("#id2").val("");
		jQuery('.reset3')[0].click();
	});
	jQuery('.indNew').on('click',function(){
		jQuery("#type2").val("add_ind");
		jQuery("#id2").val("");
		jQuery('.reset1')[0].click();
	});
	jQuery('.levelNew').on('click',function(){
		jQuery("#type5").val("add_level");
		jQuery("#id5").val("");
		jQuery('.reset4')[0].click();
	});
	jQuery('#fblevel').on('keyup',function(){
		jQuery("#blevel").val(jQuery(this).val());
	});
	jQuery('#fwlevel').on('keyup',function(){
		jQuery("#wlevel").val(jQuery(this).val());
	});
	jQuery.ajax({ url: '/'+host+'/actions/deleteDraft',
        success: function(){}
	});
	jQuery.ajax({ url: '/'+host+'/actions/deleteEmtpy',
        success: function(){}
	});
	

	//change by vinod
	
	jQuery("#customer").each(function(e, a) {
      jQuery(this).validate({
          rules: {
               name:{required: true},
			   email:{required: true,alpha_email: true},
			   phone:{required: true},
               password: {required: true, minlength:6, maxlength:50},
               conf_password: {required: true, minlength:6, equalTo : "#password"},			   
          },
           messages: {
				name: {required:'Field is required.'},
				email: "Please enter an e-mail address.",
				phone: "Please enter phone number.",
				password: {required: 'Please enter Password.',minlength:'Please enter minimum length of password limit 6 digit.'},
				conf_password: {required: 'Please enter Confirm Password.'},				
           },
           submitHandler: function(form) {   
             var formData= new FormData(jQuery('#customer')[0]);
               jQuery.ajax({
					type: 'post',
					url: '/'+host+'/actions/customerManager',
					cache: false,
					data: formData,
					processData: false,
					contentType: false,
					beforeSend: function() {
						jQuery('.result').text('Submitting Detail...');
					},
					success:function(data) {      
						var obj = JSON.parse(data);
						if(obj.status==true){
							jQuery('.result').html(obj.message);
							setTimeout(function(){
							   jQuery('#reset')[0].click();
							   jQuery('.result').html('');
							   window.location = '/'+host+"/super-admin/userlist";
							}, 2000);
						}
						else if(obj.status==false){
							var text = '';
							if(obj.message){
								text += obj.message ;
							}
							if(obj.errors){								
								var errors = obj.errors;
                          		var i;                          		
                          		for (i = 0; i <errors.length; i++) {
                            		text += errors[i] + "<br>";
                           		} 
							}							
							jQuery('.result').html(text);
							setTimeout(function(){							   
							   jQuery('.result').html('');							  
							}, 5000);
						}
						else{
							jQuery('.result').html('');
						}
					}
               });
   
            }
       });  
	});

	
	jQuery("#question").each(function(e, a) {
		jQuery(this).validate({
			rules: {
				 course:{required: true},
							 
				 			   
			},
			 messages: {
				   
				 				
			 },
			 submitHandler: function(form) {   
			   var formData= new FormData(jQuery('#question')[0]);
				 jQuery.ajax({
					  type: 'post',
					  url: '/'+host+'/question/addQuestion',
					  cache: false,
					  data: formData,
					  processData: false,
					  contentType: false,
					  beforeSend: function() {
						  jQuery('.result').text('Submitting Detail...');
					  },
					  success:function(data) {      
						  var obj = JSON.parse(data);
						  if(obj.status==true){
							  jQuery('.result').html(obj.message);
							  setTimeout(function(){
								 jQuery('#reset')[0].click();
								 jQuery('.result').html('');
								 //window.location = '/'+host+"/super-admin/agentlist";
							  }, 2000);
						  }
						  else if(obj.status==false){
							  var text = '';
							  if(obj.message){
								  text += obj.message ;
							  }
							  if(obj.errors){								
								  var errors = obj.errors;
									var i;                          		
									for (i = 0; i <errors.length; i++) {
									  text += errors[i] + "<br>";
									 } 
							  }							
							  jQuery('.result').html(text);
							  setTimeout(function(){							   
								 jQuery('.result').html('');							  
							  }, 5000);
						  }
						  else{
							  jQuery('.result').html('');
						  }
					  }
				 });
	 
			  }
		 });  
	  });

	  jQuery("#editquestion").each(function(e, a) {
		jQuery(this).validate({
			rules: {
				
				 			   
			},
			 messages: {
				  code: {required:'Field is required.'},
				  area: "Please enter an area name.",
				  city: "Please enter city name.",
				 				
			 },
			 submitHandler: function(form) {   
			   var formData= new FormData(jQuery('#editquestion')[0]);
				 jQuery.ajax({
					  type: 'post',
					  url: '/'+host+'/question/question_edit',
					  cache: false,
					  data: formData,
					  processData: false,
					  contentType: false,
					  beforeSend: function() {
						  jQuery('.result').text('Submitting Detail...');
					  },
					  success:function(data) {      
						  var obj = JSON.parse(data);
						  if(obj.status==true){
							  jQuery('.result').html(obj.message);
							  setTimeout(function(){
								 jQuery('#reset')[0].click();
								 jQuery('.result').html('');
								 window.location = '/'+host+"/question/questionlist";
							  }, 2000);
						  }
						  else if(obj.status==false){
							  var text = '';
							  if(obj.message){
								  text += obj.message ;
							  }
							  if(obj.errors){								
								  var errors = obj.errors;
									var i;                          		
									for (i = 0; i <errors.length; i++) {
									  text += errors[i] + "<br>";
									 } 
							  }							
							  jQuery('.result').html(text);
							  setTimeout(function(){							   
								 jQuery('.result').html('');							  
							  }, 5000);
						  }
						  else{
							  jQuery('.result').html('');
						  }
					  }
				 });
	 
			  }
		 });  
	  });

	  jQuery("#service").each(function(e, a) {
		jQuery(this).validate({
			rules: {
				 service:{required: true},
				 charge:{required: true},		 
				 			   
			},
			 messages: {
				  service: {required:'Field is required.'},
				  charge: "Please enter an area name.",
				 				
			 },
			 submitHandler: function(form) {   
			   var formData= new FormData(jQuery('#service')[0]);
				 jQuery.ajax({
					  type: 'post',
					  url: '/'+host+'/actions/serviceManager',
					  cache: false,
					  data: formData,
					  processData: false,
					  contentType: false,
					  beforeSend: function() {
						  jQuery('.result').text('Submitting Detail...');
					  },
					  success:function(data) {      
						  var obj = JSON.parse(data);
						  if(obj.status==true){
							  jQuery('.result').html(obj.message);
							  setTimeout(function(){
								 jQuery('#reset')[0].click();
								 jQuery('.result').html('');
								 window.location = '/'+host+"/super-admin/servicelist";
							  }, 2000);
						  }
						  else if(obj.status==false){
							  var text = '';
							  if(obj.message){
								  text += obj.message ;
							  }
							  if(obj.errors){								
								  var errors = obj.errors;
									var i;                          		
									for (i = 0; i <errors.length; i++) {
									  text += errors[i] + "<br>";
									 } 
							  }							
							  jQuery('.result').html(text);
							  setTimeout(function(){							   
								 jQuery('.result').html('');							  
							  }, 5000);
						  }
						  else{
							  jQuery('.result').html('');
						  }
					  }
				 });
	 
			  }
		 });  
	  });

	jQuery("#filter").each(function(e, a) {
      jQuery(this).validate({
           submitHandler: function(form) {   
             var formData= new FormData(jQuery('#filter')[0]);
               jQuery.ajax({
					type: 'post',
					url: '/'+host+'/actions/globalSearch',
					cache: false,
					data: formData,
					processData: false,
					contentType: false,
					beforeSend: function() {
						jQuery('#sub').html('<i class="zmdi zmdi-filter-list"></i>Searching...');
						jQuery('#sub').attr('disabled','disabled');
					},
					success:function(response) {
						var obj = JSON.parse(response);
						if(obj.status==200){
							jQuery('.search_data').html(obj.data);
							jQuery('#sub').html('<i class="zmdi zmdi-filter-list"></i>filter');
							setTimeout(function(){
							   jQuery('#sub').removeAttr('disabled');
							}, 3000);
						}else{
							jQuery('#sub').html('<i class="zmdi zmdi-filter-list"></i>filter');
							jQuery('#sub').removeAttr('disabled');
						}
					}
               });
            }
       });  
	});
	jQuery('#clear').on('click',function(){
		jQuery('#date').val(null).trigger('change');
		jQuery('#status').val(null).trigger('change');
		jQuery('.filterdata')[0].click();
	});
	jQuery("#searchcust").keyup(function(e) {
		e.preventDefault();
		jQuery.ajax({
			type: 'post',
			url: '/'+host+'/actions/searchCustomer',
			data: { 
				key: jQuery(this).val(),
				_token: jQuery("#crf").val()
			},
			success: function(data) {
				var obj = JSON.parse(data);
				if(obj.status==true){
					jQuery('#allcust').html(obj.data);
				}else{
					jQuery('#allcust').html('No data found');
				}
			}
		});
	});
	jQuery("#searchcleaner").keyup(function(e) {
		e.preventDefault();
		jQuery.ajax({
			type: 'post',
			url: '/'+host+'/actions/searchCleaner',
			data: { 
				key: jQuery(this).val(),
				_token: jQuery("#crf").val()
			},
			success: function(data) {
				var obj = JSON.parse(data);
				if(obj.status==true){
					jQuery('#allcust').html(obj.data);
				}else{
					jQuery('#allcust').html('No data found');
				}
			}
		});
	});
	jQuery("#search_location").keyup(function(e) {
		e.preventDefault();
		jQuery.ajax({
			type: 'post',
			url: '/'+host+'/actions/searchLocation',
			data: { 
				key: jQuery(this).val(),
				_token: jQuery("#crf").val()
			},
			success: function(data) {
				var obj = JSON.parse(data);
				if(obj.status==true){
					jQuery('#allcust').html(obj.data);
				}else{
					jQuery('#allcust').html('No data found');
				}
			}
		});
	});
	jQuery("#search_service").keyup(function(e) {
		e.preventDefault();
		jQuery.ajax({
			type: 'post',
			url: '/'+host+'/actions/searchService',
			data: { 
				key: jQuery(this).val(),
				_token: jQuery("#crf").val()
			},
			success: function(data) {
				var obj = JSON.parse(data);
				if(obj.status==true){
					jQuery('#allcust').html(obj.data);
				}else{
					jQuery('#allcust').html('No data found');
				}
			}
		});
	});
	jQuery("#search_contact").keyup(function(e) {
		e.preventDefault();
		jQuery.ajax({
			type: 'post',
			url: '/'+host+'/actions/searchContact',
			data: { 
				key: jQuery(this).val(),
				_token: jQuery("#crf").val()
			},
			success: function(data) {
				var obj = JSON.parse(data);
				if(obj.status==true){
					jQuery('#allcust').html(obj.data);
				}else{
					jQuery('#allcust').html('No data found');
				}
			}
		});
	});
	jQuery("#shorts").change(function(e) {
		e.preventDefault();
		jQuery.ajax({
			type: 'post',
			url: '/'+host+'/actions/shortReports',
			data: { 
				status: jQuery(this).val(),
				_token: jQuery("#token").val()
			},
			success: function(data) {
				var obj = JSON.parse(data);
				if(obj.status==true){
					jQuery('#reportdata').html(obj.data);
					jQuery('.orders').html('$'+obj.itemTotal);
					jQuery('.roms').html('$'+obj.roomTotal);
					jQuery('.hals').html('$'+obj.hallTotal);
					jQuery('.shortti').html(obj.type);
				}else{
					jQuery('#reportdata').html('Data not found');
					jQuery('.orders').html(0);
					jQuery('.roms').html(0);
					jQuery('.hals').html(0);
				}
			}
		});
	});
	jQuery("#shortype").change(function(e) {
		e.preventDefault();
		jQuery.ajax({
			type: 'post',
			url: '/'+host+'/actions/shortTypesReports',
			data: { 
				status: jQuery(this).val(),
				_token: jQuery("#token").val()
			},
			success: function(data) {
				var obj = JSON.parse(data);
				if(obj.status==true){
					jQuery('#reportdata').html(obj.data);
					jQuery('.orders').html('$'+obj.itemTotal);
					jQuery('.roms').html('$'+obj.roomTotal);
					jQuery('.hals').html('$'+obj.hallTotal);
					jQuery('.shortti').html(obj.type);
				}else{
					jQuery('#reportdata').html('Data not found');
					jQuery('.orders').html(0);
					jQuery('.roms').html(0);
					jQuery('.hals').html(0);
				}
			}
		});
	});
	jQuery("#dateShort").each(function(e, a) {
      jQuery(this).validate({
           rules: {
               datefrom:{required: true},
			   dateto:{required: true}
          },
           submitHandler: function(form) {   
             var formData= new FormData(jQuery('#dateShort')[0]);
               jQuery.ajax({
					type: 'post',
					url: '/'+host+'/actions/shortByDate',
					cache: false,
					data: formData,
					processData: false,
					contentType: false,
					beforeSend: function() {
						jQuery('#usb').text('Filtering...');
					},
					success:function(data) {      
						var obj = JSON.parse(data);
						jQuery('#usb').text('Filter');
						if(obj.status==true){
							jQuery('#reportdata').html(obj.data);
							jQuery('.orders').html('$'+obj.itemTotal);
							jQuery('.roms').html('$'+obj.roomTotal);
							jQuery('.hals').html('$'+obj.hallTotal);
							jQuery('.shortti').html(obj.type);
						}else{
							jQuery('#reportdata').html('Data not found');
							jQuery('.orders').html(0);
							jQuery('.roms').html(0);
							jQuery('.hals').html(0);
						}
					}
               });
   
            }
       });  
	});
});
