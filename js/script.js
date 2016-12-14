// function validation() {
$(document).ready(function() {
	$("#bt-log").click(function() {
		// alert("Hello");
		var username = $("#username").val();
		var password = $("#password").val();
		if(username=="") {
			// console.log("please fill in the field");
			$("#username-error").text('Please fill in the field');
		} else if(!(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(username))) {
			$("#username-error").text("Email Error");
		} else {
			$("#username-error").text("");
		}
		if (password=="") {
			$("#password-error").text('Please fill in the field');
			console.log("password-error");
		} else if(password.length < 8) {
			$("#password-error").text("password must be 8 characters long");
		} else {
			$("#password-error").text("");
		}

	});
	
	$("#bt-up").click(function() {
			// var flag = true;
			/*var firstName = $("#first-name").val();
			var secondName = $("#second-name").val();
			var moboremail = $("#mob-email").val();
			var moboremail2 = $("#mob-email2").val();
			var password = $("#password").val();

			if(firstName == ""|| secondName=="" || moboremail=="" || moboremail2=="" || password=="") {
				// var string="All fields is required";
			$("#first-name").tooltip({title: "Please Enter username",placement:"left"});
			// return flag;
			// return false;
			$("#first-name").focus();
		    return false;
				console.log("working");
				
			 } else {

			 
				 if(firstName.length <= 3) {
					// $("#first-name").focus();
					
					
					$("#first-name").tooltip({title: "must 3 characters", placement:"left"});
					$("#first-name").focus();
					// return flag;
			 	} 
			 	else {
			 		// $("#first-name").focus();
			 		$("#first-name").tooltip({title: "", placement:"left"});
			 		// $("#first-name").focus();
			 		// return true;

			 	}
			} */
			 	//else if (!(/^[a-zA-Z]+$/.test(firstName))) {
			// 		//some code here
			// 	} else {
			// 		//nothng to display
			// 	}

			// 	if(secondName.length <= 3) {
			// 		//some code here
			// 	} else if (!(/^[a-zA-Z]+$/.test(secondName))) {
			// 		//some code here
			// 	} else {
			// 		//nothng to display
			// 	}

			// 	if (true) {}
			// }
			// return flag;
	var gender = $('gender').val();
    if ($("gender:checked").length > 1 || $("gender:checked").length == 0){
    // $('#dis').slideDown().html('<span id="error">Please choose a gender</span>');
      console.log("error")
      // return true;
    }
    else{
      console.log(gender)
    }
    return false;

	});
	

	// $("#regform").validate({
	// 		rules: {

	// 		},
	// });

});

// }




