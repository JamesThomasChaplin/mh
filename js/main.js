jQuery(document).ready(function($) {
	$('.signupbtn').on('click', function(){
		event.preventDefault();
			$('.signup').show();
			$('.logsignpan').hide();
	});

	$('.signupbtnfin').on('click', function(){
	    event.preventDefault();
	        var email = $('.signupemail').val(),
	            firstname = $('.signupfirstname').val(),
	            lastname = $('.signuplastname').val(),
	            dob = $('.signupdob').val(),
	            password = $('.signuppass').val(),
	            passwordrep = $('.signuppassrep').val();

	            if(password = passwordrep){
            	    $.ajax({
            			type:"POST",
            			url:"http://mhtalk.org/assets/sign-up.php",
            			dataType: "json",
            			data: {email, firstname, lastname, dob, password},
            			complete: function(res) {
            			    var parsed_data = JSON.parse(res);
            			    console.log(parsed_data.success);
            			}
            	    });
	            } else {

	            }
	            
	            return false;
	});
	

	$('.loginbtn').on('click', function(){
	    event.preventDefault();
	            var email = $('.useremail').val();
	            var password = $('.userpass').val();
            	    $.ajax({
            			type:"POST",
            			url:"http://mhtalk.org/assets/login.php",
            			dataType: "json",
            			data: {email, password},
            			complete: function(res) {
            			    if(res.responseText == "True"){
            			        
            			         window.location.replace("http://mhtalk.org/dashboard.php");
            			    } else {
            			        
            			    }
            			}
            	    });
	
	    return false;
	});
	    
	
});
