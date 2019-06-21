function validateSubmit()   /////this function runs on the submit form event.
	{
		var err=0;   ////initialize the error checker variable
		if (document.contactForm.name.value=="") //if the firstname is <2 or >20
			{
				err=1;   //set the error checker variable to 1 (true)
				alert( "Please Enter your name" );  //open an alert box
			}
		if(document.getElementById('email').value==0) //if the field is empty
			{
				err=1;     //set the error checker variable to 1 (true)
				alert("please provide your email address");
			}  
		if( document.contactForm.comments.value == "" )  //if the field is empty
			{
				alert( "Please provide a message" );
				err=1;     //set the error checker variable to 1 (true)
			}  
		if (err==0)   //if there are no errors
			{
				var name = document.getElementById("name").value;   //get the firstname and store it in a var do the same with the below
				var email =  document.getElementById("email").value;
				var comments =  document.getElementById("comments").value;
				var alertMessage = "Please Confirm: Name: " + name + "\nEmail Address: " + email + "\nComments: " + comments;  //build the alert message. Store it in a var.
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'  display a confirm box with the alert message built above
					{
						alert("Thank you for contacting us on " + Date());  //display a thank you message and a date/time stamp
						document.getElementById("myForm").reset();   //clear out the form fields
						return true;  //end the function here
					} 
				if(answer)  //if the user selects 'ok'
					{
						alert("Thank you for contacting us on " + Date());  //display a thank you message and a date/time stamp
						document.getElementById("contactForm").reset();   //clear out the form fields
						return true;  //end the function here
					}
				else   //if the user selected 'cancel'
					{  
						
						return false;    //end the function here
					}   
			} 
		
	}




	