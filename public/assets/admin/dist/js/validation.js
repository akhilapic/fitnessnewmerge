$(function() {
		host_url = "/development/fitness/";
// Add user form
$("#user_add").validate({
rules: {
	name: {required: true,},
	email: {required: true,email: true,},  
	username: {required: true},
	password: {required: true,},
	phone:{ 
	
		required:true,
	minlength:10,
	maxlength:10}, 
	},
messages: {
	name: {required: "Please enter name",},email: {required: "Please enter valid email",email: "Please enter valid email",},   
	username: {required: "Please enter username",},
	password: {required: "Please enter password",},
},
	submitHandler: function(form) {
	   var formData= new FormData(jQuery('#user_add')[0]);
	jQuery.ajax({
			url: host_url+"store-data",
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
				jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>Success - </strong> A simple Success alert</div>");
				setTimeout(function(){
					jQuery('.result').html('');
					window.location = host_url+"user_list";
				}, 2000);
			}
			else{
				if(obj.statusname==false){
					jQuery('#name_error').html(obj.message);
					jQuery('#name_error').css("display", "block");
				}
				else if(obj.statusemail==false){
					jQuery('#name_error').html('');
					jQuery('#email_error').html(obj.message);
					jQuery('#email_error').css("display", "block");
				}
				else{
					jQuery('#email_error').html('');
					jQuery('.result').html('');
				}
			}
			}
		});
	}
});
$(".add_workout_submitbtn").on("click",function(){

	$(".box_number_of_day").each(function(){

		dataId = $(this).attr("data-id");
		$(this).find(".workout_name").each(function(){
			console.log($(this).val());
		});
		$(".excercise_name").each(function(){
			console.log($(this).val());
		});
		// 		$(".exercise_details_video").each(function(){
		// 	console.log($(this).val());
		// });
		
	});
	
});
// Status active deactive
	
	$('.toggle-class').change(function() {
		
		host_url = "/development/fitness/";
		var status = $(this).prop('checked') == true ? 1 : 0; 
		var token = $("meta[name='csrf-token']").attr("content");
		var user_id = $(this).data('id'); 
		
		$.ajax({
			type: "POST",
			dataType: "json",
			url: host_url+'changeStatus/'+user_id,
			data: {'_token':  token,'status': status, 'user_id': user_id},
			success: function(data){
			  setTimeout(function(){
				  jQuery('.result').html('');
				  window.location = "/user_list";
			  }, 1000);
			}
		});
	});
$("#submit_w").on("click",function(){
	var values=[];
	let selector1;
	let selector_name;
	let selector_video;
	let selector_w_name;
	let index1=0;
	$(".box_number_of_day").each(function(index1,value){

		dataId = $(this).attr("data-id");
		console.log(dataId);
		selector1='.getdata'+dataId;
		selector_w_name='#workoutname'+dataId;
		
		$(selector1).each(function(index, value){
			let data=[]
			selector_name="#excercise_name"+dataId+index;			
			selector_video="#exercise_details_video"+dataId+index;
			data['e_name']=$(selector_name).val();
			data['w_name']=$(selector_w_name).val();
			data['e_video']=$(selector_video).val();
			data['id']=dataId;
			
			values.push(data);	
			console.log(values);		
		});
		
		
	});
	
});

$("#workout_plan_add").validate({
	
	submitHandler: function(form) {
		w_values=[];
		 arr=[];
		 w_val=[];
		 str1='';
		let selector1;
		let selector_name;
       	
       	let selector_arabic_excercise_name;

       let selector_video;
       let selector_w_name;

       let workoutarabicname;

       let selector_calories;	 
        let selector_reps;
        let selector_set;
			

		let index1=0;
		$(".box_number_of_day").each( function(index1,value){

			dataId = $(this).attr("data-id");
			
			selector1='.getdata'+dataId;
			selector_w_name='#workoutname'+dataId;
			workoutarabicname = "#workoutarabicname"+dataId;

			$(selector1).each( function(index, value,getBase64){
				let data=[]
				
				selector_name="#excercise_name"+dataId+index;
           		selector_arabic_excercise_name = "#arabic_excercise_name"+dataId+index;
			
				selector_video="#exercise_details_video"+dataId+index;
				
				selector_calories="#calories"+dataId+index;
				selector_reps="#reps"+dataId+index;
				selector_sets="#sets"+dataId+index;

				data.push(dataId);
				
				data.push($(selector_w_name).val());
				data.push($(workoutarabicname).val());
				
				data.push($(selector_name).val());
				data.push($(selector_arabic_excercise_name).val());

				data.push($(selector_reps).val());
           		data.push($(selector_sets).val());
				data.push($(selector_calories).val());
           	
				
				var file = document.querySelector(selector_video).files[0];
				//var files=  getBase64(file);

				 var reader = new FileReader();
				   reader.readAsDataURL(file);
				   reader.onload = function () {
					 console.log(reader.result);
					 data.push(reader.result);
					 data.push('#');
				   };

				
				
				w_values.push(data);
				
				console.log(w_values);	
						
			});
			
			
		});
		setTimeout(function(){ 
			  var formData= new FormData();
		 console.log('bbbbbbbbbbbbbb');
		 str1=w_values.toString();

 			formData.append('trainer_id',$("#trainer_id").val());
		  formData.append('name',$("#name").val());
		  formData.append('amount',$("#amount").val());
		  formData.append('category',$("#category").val());
		  formData.append('description',$("#description").val());

		  f = $('#upload_video')[0].files;

		  formData.append('upload_video',f[0]);
		  formData.append('duration',$("#duration").val());
		  formData.append('level',$("#level").val());
		  formData.append('frequency',$("#frequency").val());
		  formData.append('calories_burn',$("#calories_burn").val());
		  formData.append('type',$("#type").val());
		  formData.append('number_of_days',$("#number_of_days").val());

		    formData.append('arabic_name',$("#arabic_name").val());
		    formData.append('arabic_description',$("#arabic_description").val());

		  
		  
		  formData.append('workout',str1);
		  formData.append('_token',$('meta[name="csrf-token"]').attr('content'));

		 console.log(formData);
		 console.log(str1);

		name  =$("#name").val();
		category = $("#category").val();
		description = $("#description").val();
		upload_video = $("#upload_video").val();
		level = $("#level").val();
		type = $("#type").val();  
		number_of_days = $("#number_of_days").val();
		
console.log(formData);
	jQuery.ajax({
			url: host_url+"workout_plan_store",
			type: "POST",
			data: formData,
			processData: false,
			contentType: false,
			// 	beforeSend:function(){
			// 		$("#submit_w1").hide();
			// 	$("#laoding_button").show();
			// },
			success:function(data) { 
			var obj = JSON.parse(data);
			if(obj.status==true){
				jQuery('#name_error').html('');
				jQuery('#email_error').html('');
				jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>Success - </strong> A simple Success alert</div>");
				setTimeout(function(){
					jQuery('.result').html('');
					window.location =host_url+ "workout_plans";
				}, 2000);
			}
			else{
				if(obj.statusname==false){
					jQuery('#name_error').html(obj.message);
					jQuery('#name_error').css("display", "block");
				}
				else if(obj.statusemail==false){
					jQuery('#name_error').html('');
					jQuery('#email_error').html(obj.message);
					jQuery('#email_error').css("display", "block");
				}
				else{
					jQuery('#email_error').html('');
					jQuery('.result').html('');
				}
			}
			}
		});

		}, 3000);
		 
	}
});

// $("#workout_plan_edit").validate({
	
// 	submitHandler: function(form) {
	
// 		w_values=[];
// 		 arr=[];
// 		 w_val=[];
// 		 str1='';
// 		let selector1;
// 		let selector_name;
// 		let selector_video;
// 		let selector_calories;
// 		let selector_w_name;

// 		let index1=0;
// 		$(".box_number_of_day").each( function(index1,value){

// 			dataId = $(this).attr("data-id");
// 			selector1='.getdata'+dataId;
// 			selector_w_name='#workoutname'+dataId;
// 			no_of_days_id = "#no_of_days_id"+dataId;
			
		
// 			$(selector1).each( function(index, value,getBase64){
// 				let data=[]

// 				exercise_details_id ="#exercise_details_id"+dataId+index;
// 				selector_name="#excercise_name"+dataId+index;			
//             selector_calories="#calories"+dataId+index;
// 				selector_video="#exercise_details_video"+dataId+index;
// 				exercise_video_link = "#exercise_video_link"+dataId+index;
// 				data.push(dataId);
			
				
			
// 				data.push($(no_of_days_id).val());
// 				data.push($(selector_w_name).val());
// 				data.push($(selector_calories).val());
				
// 				data.push($(exercise_details_id).val());
// 				data.push($(exercise_video_link).val());
// 				data.push($(selector_name).val());
// 				var file= null;
// 				if($(selector_video).val()){
// 							 file = document.querySelector(selector_video).files[0];
// 				}
		
				
// 				//var files=  getBase64(file);
			
					
// 				if(file)
// 				{

				
// 				 var reader = new FileReader();
// 				   reader.readAsDataURL(file);
// 				   reader.onload = function () {
// 					 console.log(reader.result);
// 					 data.push(reader.result);
// 					 data.push('#');
// 				   };

// 				}
// 				else{
// 					data.push("null");
// 					data.push('#');
// 				}
			
// 				w_values.push(data);
				
// 				console.log(w_values);	
						
// 			});
			
			
// 		});
// 		setTimeout(function(){ 
// 			  var formData= new FormData();
		
// 		 str1=w_values.toString();
//  		formData.append('trainer_id',$("#trainer_id").val());
// 		  formData.append('name',$("#name").val());
// 		  formData.append('category',$("#category").val());
// 		  formData.append('description',$("#description").val());
// 		  formData.append('upload_video',$("#upload_video").val());
// 		  formData.append('level',$("#level").val());
// 		  formData.append('type',$("#type").val());
// 		   formData.append('frequency',$("#frequency").val());
// 		  formData.append('calories_burn',$("#calories_burn").val());
// 		  formData.append('number_of_days',$("#number_of_days").val());
// 		  formData.append('workout',str1);
// 		  formData.append('_token',$('meta[name="csrf-token"]').attr('content'));
// 		  formData.append("editid",$("#id").val());
// 		  formData.append("old_upload_video",$("#id").val());
		  
// 		 console.log(formData);
// 		 console.log(str1);

// 		name  =$("#name").val();
// 		category = $("#category").val();
// 		description = $("#description").val();
// 		upload_video = $("#upload_video").val();
// 		level = $("#level").val();
// 		type = $("#type").val();  
// 		number_of_days = $("#number_of_days").val();
		
// 		//host_url = "/development/fitness-final/";
// 	jQuery.ajax({
			
// 			url: host_url+"workout_plan_update",
// 			type: "POST",
// 			data: formData,
// 			processData: false,
// 			contentType: false,
// 			success:function(data) { 
// 			var obj = JSON.parse(data);
// 			if(obj.status==true){
// 				jQuery('#name_error').html('');
// 				jQuery('#email_error').html('');
// 				jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>Success - </strong> A simple Success alert</div>");
// 				setTimeout(function(){
// 					jQuery('.result').html('');
// 					window.location =host_url+ "workout_plans";
// 				}, 2000);
// 			}
// 			else{
// 				if(obj.statusname==false){
// 					jQuery('#name_error').html(obj.message);
// 					jQuery('#name_error').css("display", "block");
// 				}
// 				else if(obj.statusemail==false){
// 					jQuery('#name_error').html('');
// 					jQuery('#email_error').html(obj.message);
// 					jQuery('#email_error').css("display", "block");
// 				}
// 				else{
// 					jQuery('#email_error').html('');
// 					jQuery('.result').html('');
// 				}
// 			}
// 			}
// 		});

// 		}, 3000);
		 
// 	}
// });

$("#workout_plan_edit").validate({
	
	submitHandler: function(form) {
	
		w_values=[];
		 arr=[];
		 w_val=[];
		 str1='';
		let selector1;
		let selector_name;
		let selector_arabic_excercise_name;
		let selector_video;
		
		let selector_w_name;
	 let workoutarabicname;
	let selector_calories;	 
        let selector_reps;
        let selector_set;
	

		let index1=0;
		$(".box_number_of_day").each( function(index1,value){

			dataId = $(this).attr("data-id");
			selector1='.getdata'+dataId;
			selector_w_name='#workoutname'+dataId;
			 workoutarabicname = "#workoutarabicname"+dataId;
			no_of_days_id = "#no_of_days_id"+dataId;
			
		//	console.log(workoutarabicname);

			$(selector1).each( function(index, value,getBase64){
				let data=[]

				exercise_details_id ="#exercise_details_id"+dataId+index;

				selector_name="#excercise_name"+dataId+index;			
	            selector_arabic_excercise_name = "#arabic_excercise_name"+dataId+index;

	            selector_calories="#calories"+dataId+index;
                selector_reps="#reps"+dataId+index;
                selector_sets="#sets"+dataId+index;


				selector_video="#exercise_details_video"+dataId+index;
				exercise_video_link = "#exercise_video_link"+dataId+index;
				data.push(dataId);
			
				
			
				data.push($(no_of_days_id).val());
				data.push($(selector_w_name).val());
				data.push($(workoutarabicname).val());
				
				data.push($(selector_reps).val());
				data.push($(selector_sets).val());
				data.push($(selector_calories).val());
   				
				data.push($(exercise_details_id).val());
				data.push($(exercise_video_link).val());
				
				data.push($(selector_name).val());
				data.push($(selector_arabic_excercise_name).val());

				var file= null;
				if($(selector_video).val()){
					 file = document.querySelector(selector_video).files[0];
				}
		
				
				//var files=  getBase64(file);
			
					
				if(file)
				{

				
				 var reader = new FileReader();
				   reader.readAsDataURL(file);
				   reader.onload = function () {
					 console.log(reader.result);
					 data.push(reader.result);
					 data.push('#');
				   };

				}
				else{
					data.push("null");
					data.push('#');
				}
			
				w_values.push(data);
				
				console.log(w_values);	
						
			});
			
			
		});
		setTimeout(function(){ 
			  var formData= new FormData();
		
		 str1=w_values.toString();
 		formData.append('trainer_id',$("#trainer_id").val());
		  formData.append('name',$("#name").val());
  			formData.append('amount',$("#amount").val());
		  	formData.append('duration',$("#duration").val());
		  formData.append('category',$("#category").val());
		  formData.append('description',$("#description").val());
		 	f= $('#upload_video')[0].files;
		  formData.append('upload_video',f[0]);
		  formData.append('level',$("#level").val());
		  formData.append('type',$("#type").val());
		   formData.append('frequency',$("#frequency").val());
		  formData.append('calories_burn',$("#calories_burn").val());
		  formData.append('number_of_days',$("#number_of_days").val());
		  formData.append('workout',str1);
		  formData.append('_token',$('meta[name="csrf-token"]').attr('content'));
		  formData.append("editid",$("#id").val());
		  formData.append("old_upload_video",$("#id").val());
		  formData.append('arabic_name',$("#arabic_name").val());
		    formData.append('arabic_description',$("#arabic_description").val());
		 console.log(formData);
		 console.log(str1);

		name  =$("#name").val();
		category = $("#category").val();
		description = $("#description").val();
		upload_video = $("#upload_video").val();
		level = $("#level").val();
		type = $("#type").val();  
		number_of_days = $("#number_of_days").val();
		
		//host_url = "/development/fitness-final/";
	jQuery.ajax({
			
			url: host_url+"workout_plan_update",
			type: "POST",
			data: formData,
			processData: false,
			contentType: false,
			success:function(data) { 
			var obj = JSON.parse(data);
			if(obj.status==true){
				jQuery('#name_error').html('');
				jQuery('#email_error').html('');
				jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>Success - </strong> A simple Success alert</div>");
				setTimeout(function(){
					jQuery('.result').html('');
					window.location =host_url+ "workout_plans";
				}, 2000);
			}
			else{
				if(obj.statusname==false){
					jQuery('#name_error').html(obj.message);
					jQuery('#name_error').css("display", "block");
				}
				else if(obj.statusemail==false){
					jQuery('#name_error').html('');
					jQuery('#email_error').html(obj.message);
					jQuery('#email_error').css("display", "block");
				}
				else{
					jQuery('#email_error').html('');
					jQuery('.result').html('');
				}
			}
			}
		});

		}, 3000);
		 
	}
});



//------------------set_password_form_fitness_trainer-------------------------
$("#set_password_form_fitness_trainer").validate({
rules: {
	
	password: {required: true,},
	},
	messages: {
	password: {required: "Please enter password",},
},
	submitHandler: function(form) {
	   var formData= new FormData(jQuery('#set_password_form_fitness_trainer')[0]);
	jQuery.ajax({
			url: host_url+"set_password_fitness_trainer",
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



$("#user_change_password").validate({
	rules: {
		old_password: {required: true,},
	
		new_password: {required: true},
	
	
		confirm_password : {
			required: true,
			equalTo : "#new_password"
		}
	},
		
	messages: {
	
		old_password: {required: "Please enter old password",},
		new_password:{required:"please enter new password"},
		confirm_password:{required:"please enter cpnform password"}
	},
		submitHandler: function(form) {
		   var formData= new FormData(jQuery('#user_change_password')[0]);
		jQuery.ajax({
				url: host_url+"user_change_password",
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
					jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>Change Password Successfull.</strong> </div>");
					setTimeout(function(){
						jQuery('.result').html('');
						window.location = host_url+"user_list";
					}, 2000);
				}
				else{
					if(obj.status==false){
						jQuery('.result').html(obj.message);
						jQuery('#name_error').css("display", "block");
					}
					
				}
				}
			});
		}
	});

$("#update_admin_profile").validate({
	rules: {
		name:{required:true}
	
	},
		
	messages: {
	
		name: {required: "Please enter name",},
	},
		submitHandler: function(form) {
		   var formData= new FormData(jQuery('#update_admin_profile')[0]);
		jQuery.ajax({
				url: host_url+"update_admin_profile",
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
					jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>"+obj.message+"</strong></div>");
					
				}
				else{
					if(obj.status==false){
						jQuery('.result').html(obj.message);
						jQuery('#name_error').css("display", "block");
					}
					
				}
				}
			});
		}
	});
$("#update_admin_profile").validate({
	rules: {
		name:{required:true},
		phone:{ 
	
		required:true,
		minlength:10,
		maxlength:10}
		
	
	},
		
	messages: {
	
		name: {required: "Please enter name",},
		phone:{required:"please enter Mobile Number"}
		
	},
		submitHandler: function(form) {
		   var formData= new FormData(jQuery('#update_admin_profile')[0]);
		jQuery.ajax({
				url: host_url+"update_admin_profile",
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
					jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>Profile Update Successfull </strong> </div>");
					setTimeout(function(){
						jQuery('.result').html('');
						window.location = host_url+"/user_list";
					}, 2000);
				}
				else{
					if(obj.status==false){
						jQuery('.result').html(obj.message);
						jQuery('#name_error').css("display", "block");
					}
					
				}
				}
			});
		}
	});
// single user view data in modal 

$(".infoU").click(function (e) {
	$currID = $(this).attr("data-id");
	$test = $currID.replace(/\"/g, "");
	$a ='/user_view/'+$test;
	$.get($a, function (data) {
		$('#user-data').html(data);
	});
});


   host_url = "/development/fitness/";
   $("#user_edit").validate({
	rules: {
		name: {required: true,},
		email: {required: true,email: true,},  
		username: {required: true},
		password: {required: true,}, 
			
	},
	messages: {
		name: {required: "Please enter name",},email: {required: "Please enter valid email",email: "Please enter valid email",},   
		username: {required: "Please enter username",},
		password: {required: "Please enter password",},

	},
		submitHandler: function(form) {
		   var formData= new FormData(jQuery('#user_edit')[0]);
		   var url = '\nhref = ' + $(location).attr('href');
		   var id = url.substring(url.lastIndexOf('/') + 1);
		jQuery.ajax({
				url: host_url+"update_data",
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
					jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>Success - </strong> User update success</div>");
					setTimeout(function(){
						jQuery('.result').html('');
						window.location = "/"+host+"/user_list";
					}, 2000);
				}
				else{
					if(obj.statusName==true){
						alert(obj.message);
						jQuery('#name_error').html(obj.message);
						jQuery('#name_error').css("display", "block");
					}
					else if(obj.statusEmail==true){
						jQuery('#name_error').html('');
						jQuery('#email_error').html(obj.message);
						jQuery('#email_error').css("display", "block");
					}
					else{
						jQuery('#email_error').html('');
						jQuery('.result').html('');
					}
				}
				}
			});
		}
	});

	function confrimDelete() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }

	$('.deleteConf').click(function() {
		return confirm("Are you sure?");
	   });
  
   
	// Status active deactive
	
	  // $('.toggle-class').change(function() {
		 //  var status = $(this).prop('checked') == true ? 1 : 0; 
		 //  var token = $("meta[name='csrf-token']").attr("content");
		 //  var user_id = $(this).data('id'); 
		  
		 //  $.ajax({
			//   type: "POST",
			//   dataType: "json",
			//   url: '/changeStatus/'+user_id,
			//   data: {'_token':  token,'status': status, 'user_id': user_id},
			//   success: function(data){
			  	
			// 	setTimeout(function(){
			// 		jQuery('.result').html('');
			// 		window.location = "/user_list";
			// 	}, 1000);
			//   }
		 //  });
	  // });

	
	  $("#add_subcategory").validate({
		rules: {
			sub_category: {required: true,},
			category: {required: true},  
			moods: {required: true}, 
			},
		messages: {
			sub_category: {required: "Please enter sub category",},
			category: {required: "Please enter category",},
			moods: {required: "Please enter moods",},
		},
			submitHandler: function(form) {
			   var formData= new FormData(jQuery('#add_subcategory')[0]);
			jQuery.ajax({
					url: "/postData",
					type: "post",
					cache: false,
					data: formData,
					processData: false,
					contentType: false,
					
					success:function(data) { 
					var obj = JSON.parse(data);
					if(obj.status==true){
						jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>Success - </strong> A simple Success alert</div>");
						setTimeout(function(){
							jQuery('.result').html('');
							window.location = "/sub-category";
						}, 2000);
					}
					else{
	
							jQuery('.result').html('');
						
					}
					}
				});
			}
		});
    //    multiple category
		$('select').selectpicker();

//    multiple category delete
    
    
	$('#master').on('click', function(e) {
		if($(this).is(':checked',true))  
		{
		$(".sub_chk").prop('checked', true);  
		} else {  
		$(".sub_chk").prop('checked',false);  
		}  
	});
    
    
	$('.delete_all').on('click', function(e) {
		var allVals = [];  
		
		var token  =  $('meta[name="_token"]').attr('content');
		$(".sub_chk:checked").each(function() {  
			allVals.push($(this).attr('data-id'));
			
		});  
    
		if(allVals.length <=0)  
		{  
			alert("Please select row.");  
		}  else {  

			var check = confirm("Are you sure you want to delete this row?");  
			if(check == true){  

				var join_selected_values = allVals.join(","); 

				$.ajax({
					url: $(this).data('url'),
					type: 'POST',
					headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
					data: 'ids='+join_selected_values,
					success: function (data) {
						if (data['success']) {
							$(".sub_chk:checked").each(function() {  
								$(this).parents("tr").remove();
							});
							alert(data['success']);
							location.reload();
						} else if (data['error']) {
							alert(data['error']);
						} else {
							alert('Whoops Something went wrong!!');
						}
					},
					error: function (data) {
						alert(data.responseText);
					}
				});
				$.each(allVals, function( index, value ) {
					$('table tr').filter("[data-row-id='" + value + "']").remove();
				});
			}  
		}  
	});

    
	// $('[data-toggle=confirmation]').confirmation({
	// 	rootSelector: '[data-toggle=confirmation]',
	// 	onConfirm: function (event, element) {
	// 		element.trigger('confirm');
	// 	}
	// });
	$(document).on('confirm', function (e) {
		var ele = e.target;
		e.preventDefault();
		$.ajax({
			url: ele.href,
			type: 'POST',
			headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
			success: function (data) {
				if (data['success']) {
					$("#" + data['tr']).slideUp("slow");
					alert(data['success']);
				} else if (data['error']) {
					alert(data['error']);
				} else {
					alert('Whoops Something went wrong!!');
				}
			},
			error: function (data) {
				alert(data.responseText);
			}
		});
		return false;
	});

	$('body').on('click', '.editBtn', function () {
        var id = $(this).data('id');
        var token = $('meta[name="_token"]').attr('content')
        $.ajax({
        type:"GET",
        url: "/category_edit/"+id,
        data: { id: id, _token: token  },
        dataType: 'json',
        success: function(data){
            alert(data.data.id);
           }
        });
      });

	  $("#admin_change_password").validate({
		rules: {
				old_password: {required: true,},
				new_password: {required: true},  
				confirm_password: {
				equalTo: "#password"
				}
			},
		messages: {
			old_password: {required: "Please enter Old Password"},
			new_password: {required: "Please enter new_password"},
			confirm_password: " Enter Confirm Password Same as Password",
		},
			submitHandler: function(form) {
			   var formData= new FormData(jQuery('#admin_change_password')[0]);
			//    var url = '\nhref = ' + $(location).attr('href');
			//    var id = url.substring(url.lastIndexOf('/') + 1);
			jQuery.ajax({
					url: "admin_change_password",
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
						jQuery('.result').html("<div class='alert alert-success alert-dismissible text-white border-0 fade show' role='alert'><button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button><strong>Success - </strong> User update success</div>");
						setTimeout(function(){
							jQuery('.result').html('');
							window.location = "/user_list";
						}, 2000);
					}
					else{
						if(obj.statusName==true){
							alert(obj.message);
							jQuery('#name_error').html(obj.message);
							jQuery('#name_error').css("display", "block");
						}
						else if(obj.statusEmail==true){
							jQuery('#name_error').html('');
							jQuery('#email_error').html(obj.message);
							jQuery('#email_error').css("display", "block");
						}
						else{
							jQuery('#email_error').html('');
							jQuery('.result').html('');
						}
					}
					}
				});
			}
		});



});