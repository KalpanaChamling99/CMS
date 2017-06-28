
function validateEmail(email)
{
	var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
		if(email.value.match(mailFormat))
		{
			
			// alert ("successful");
			return true;
		}
		else
		{		
				document.form.email.focus();
				document.form.email.value="";
		
			return false;
			}
			
			
	}
	
	function validatePassword(pwd){
		var name=/^[0-9a-zA-Z]+$/;
		
		
		
		if(pwd.value.length!=0 && pwd.value.match(name) && pwd.value.length>=8 && pwd.value.length<=16)
		{
			return true;
		}
		else
		{
				
				document.form.pwd.value="";
			document.form.pwd.focus();
	
				
						
			return false;
		}
	
	}
	
	
	// function validatePhone(phone){
	// 	var name=/^[0-9]+$/;
		
	// 	if(phone.value.length==10 && phone.value.match(name) )
	// 	{
	// 		return true;
	// 	}
	// 	else
	// 	{
				
	// 			document.form.phone.value="";
	// 		document.form.phone.focus();
			
			
						
	// 		return false;
	// 	}
	
	// }