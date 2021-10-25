$(function() {
	host_url = "/development/fitness/";
$("#fitness_trainer_form").validate({
rules: {
	name: {required: true, },
	email: {required: true,email: true,},  

	gender:{required:true},
	specialization:{required:true},
	mobile_number:{ 
	
		required:true,
	minlength:10,
	maxlength:10
}, 
	address:{required:true},

	},

messages: {
	name: {required: "Please enter Name"},
	email: {required: "Please enter valid Email",email: "Please enter valid Email"},   
	mobile_number: {required: "Please enter 10 Number",minlength:"Please enter 10 Number",maxlength:"Please enter 10 Number"},
	gender: {required: "Please select Gender",},
	specialization: {required: "Please enter Specialization",},
	gender: {required: "Please select Gender",},
	upload_doc:{required:"Please Upload Document"},
},
	submitHandler: function(form) {
	   var formData= new FormData(jQuery('#fitness_trainer_form')[0]);
	   formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
	   u = host_url+"fitness-trainer-data";
	  
	jQuery.ajax({
			url: u,
			type: "post",
			cache: false,
			data: formData,
			processData: false,
			contentType: false,
			
			success:function(data) { 
			var obj = JSON.parse(data);
			if(obj.status==true){
				setTimeout(function(){
					 $("#b_trainer").modal('show');
				}, 1000);
			}
			else{
				if(obj.statusmobile_number==false){
					jQuery('#mobile_number_error').html(obj.message);
					jQuery('#mobile_number_error').css("display", "block");
				}
				else if(obj.statusemail==false){
					jQuery('#email_error').html('');
					jQuery('#email_error').html(obj.message);
					jQuery('#email_error').css("display", "block");
				}
				else{
					jQuery('#mobile_number_error').html('');
					jQuery('#email_error').html('');
				}
			}
			}
		});
	}
});

//---------------admin panel---firness_trainer_edit-------------------------
$("#firness_trainer_edit").validate({
rules: {
	name:{required:true,},
	
	dob:{required:true,},
	gender:{required:true},
	specialization:{required:true},
	mobile_number:{ 
		required:true,
		minlength:10,
		maxlength:10}, 
		address:{required:true
		},
		confirm_password : {
			equalTo : "#new_password"
		},
	},
	messages: {
		name: {required: "Please enter name",},
		gender: {required: "Please enter gender",},
		specialization: {required: "Please enter specialization",},
		old_password: {required: "Please enter old password",},
		new_password:{required:"please enter new password"},
		confirm_password:{required:"please enter cpnform password"}
	},
	submitHandler: function(form) {
	   var formData= new FormData(jQuery('#firness_trainer_edit')[0]);
	jQuery.ajax({
			url: host_url+"firness_trainer_edit",
			type: "post",
			cache: false,
			data: formData,
			processData: false,
			contentType: false,
			
			success:function(data) { 
			var obj = JSON.parse(data);
			if(obj.status==true){
				jQuery('#name_error').html('');
				jQuery('#email_error').html('');
				jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>Success - </strong> "+obj.message+"</div>");
				setTimeout(function(){
					jQuery('.result').html('');
					window.location = host_url+"manager_firness_trainers";
				}, 3000);
			}
			else{
				if(obj.status==false){
					jQuery('#name_error').html(obj.message);
					jQuery('#name_error').css("display", "block");
				}
			}
			}
		});
	}
});
//----------------------------sign in fitness traniner------------------
$("#fitness_trainer_signin").validate({
rules: {
	password: {required: true,},
	email: {required: true,email: true,},  

	},

messages: {
	password: {required: "Please enter Password",},
	email: {required: "Please enter valid Email",email: "Please enter valid Email",},   

},
	submitHandler: function(form) {
	   var formData= new FormData(jQuery('#fitness_trainer_signin')[0]);
	   formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
	   u = host_url+"fitness_trainer_signin";
	  
	jQuery.ajax({
			url: u,
			type: "post",
			cache: false,
			data: formData,
			processData: false,
			contentType: false,
			
			success:function(data) { 
			var obj = JSON.parse(data);
			if(obj.status==true){
				window.location.href= obj.url;

			}
			else{
				
				 if(obj.status==false){
					if(obj.check=='email')
					{
						jQuery('#msg_error').html('');
						jQuery('#msg_error').html(obj.statusemail);
				//jQuery('#msg_error').css("display", "block");
				//		jQuery('#msg_error').css({'display','block','color':'red'});
				 $("#msg_error").css({"display": "block", "color": "red"}); 
					}
					else if(obj.check=='password')
					{

						jQuery('#msg_error').html('');
						jQuery('#msg_error').html(obj.statuspsd);
					//	jQuery('#msg_error').css("display", "block");
	 					$("#msg_error").css({"display": "block", "color": "red"}); 
			
						//jQuery('#msg_error').css({'display','block','color':'red'});
					}
					else
					{
						jQuery('#msg_error').css("display", "none");
					}
					
				}
				else{
					jQuery('#mobile_number_error').html('');
					jQuery('#email_error').html('');
				}
			}
			}
		});
	}
});


//----------------------------firness_forget_password password------------------
$("#firness_forget_password").validate({
	rules: {
		email: {required: true,email: true,},  
	
		},
	
	messages: {
		email: {required: "Please enter valid email",email: "Please enter valid email",},   
	
	},
		submitHandler: function(form) {
		   var formData= new FormData(jQuery('#firness_forget_password')[0]);
		   formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
		   u = host_url+"firness_forget_passwordcheck";
		  
		jQuery.ajax({
				url: u,
				type: "post",
				cache: false,
				data: formData,
				processData: false,
				contentType: false,
				
				success:function(data) { 
				var obj = JSON.parse(data);
				if(obj.status==true){
                                    $(".result").text(obj.message);
                                      setTimeout(function(){
                         window.location.href=host_url+ obj.url;
				}, 2000);
					
				}
				else{
					
					 if(obj.status==false){
						jQuery('#email_error').html('');
						jQuery('#email_error').html(obj.statusemail);
						jQuery('#email_error').css("display", "block");
					}
					else{
						jQuery('#mobile_number_error').html('');
						jQuery('#email_error').html('');
					}
				}
				}
			});
		}
	});

$.validator.addMethod("myPasswordMethod",function(value, element) {
    return value.match("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})"); 
  },"Please enter a valid password");
  
  $("#trainer_reset_password").validate({
    rules: {
        password: {
            required: true,
            myPasswordMethod: true,
            minlength: 6
        },
        confirm_password: {
            required: true,
            minlength: 6,
            equalTo: "#psd"
        },
    },
    
    messages: {
	password: {required: "Please enter password",},
    },
	submitHandler: function(form) {
	   var formData= new FormData(jQuery('#trainer_reset_password')[0]);
	   formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
	   u = host_url+"trainer_updatepassword";
            jQuery.ajax({
			url: u,
			type: "post",
			cache: false,
			data: formData,
			processData: false,
			contentType: false,
			success:function(data) { 
			var obj = JSON.parse(data);
			if(obj.status==true)
                        {
                            $(".result").text(obj.message);
                            $("#b_trainer1").modal('show');
                                setTimeout(function(){
                         window.location.href= host_url +obj.url;
				}, 2000);
                          //  window.location.href= host_url +obj.url;
			}
			else
                        {
                                if(obj.status==false){
                                    jQuery('#email_error').html('');
                                    jQuery('#email_error').html(obj.statusemail);
                                    jQuery('#email_error').css("display", "block");
				}
				else
                                {
                                    jQuery('#mobile_number_error').html('');
                                    jQuery('#email_error').html('');
				}
			}
                    }
		});
	}
}); 


});