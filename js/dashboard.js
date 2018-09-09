$(document).ready(function(){

    	    $.ajax({
			type:"POST",
			url:"http://mhtalk.org/assets/usercheck.php",
			dataType: "json",
			complete: function(res) {
			    if(res.responseText == "blank"){
                        $('.createuser').show();
			    } else {
			        $('.createuser').hide();
			    }
			}
	    }); // End of username check 
        	    
        $('.usernamecreatebtn').on('click', function(){
            event.preventDefault();
            var usernameval = $('.usernamecreate').val();
            
        	    $.ajax({
    			type:"POST",
    			url:"http://mhtalk.org/assets/createusername.php",
    			dataType: "json",
    			data: {usernameval},
    			complete: function(res) {
    			    if(res.responseText == "exists"){
    			        $('.usernameerror').text("We're sorry, but this username has been taken");
    			    } else {
    			        $('.usernameerror').text("Congrats, you have now obtained your own personal username");
    			    }
    			}
    	    });            
        }); // end of username creator
});