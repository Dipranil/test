function check()
{
	var name=document.register.name.value;
	
	
	
	if(name=='')
	{
		alert("please fill the name box");
		document.register.name.focus();
		return false;
	}
	var email=document.register.email.value;
	
	
	
	if(email=='')
	{
		alert("please fill the email box");
		document.register.email.focus();
		return false;
	}
	
	var em1=email.indexOf('@',0);
    var em2=email.indexOf('.',em1);
    
	if(em1<1||em2<em1+2 || em2+2>=email.length)
	{
        alert("please fill with correct email ");
		document.register.email.focus();
		return false;
    }

    var mobile=document.register.mobile.value;
	if(mobile=='')
	{
		alert("please fill the mobile box");
		document.register.mobile.focus();
		return false;
	}
    if(isNaN(mobile))
	{
		alert("mobile number is wrong");
		document.register.mobile.focus();
		return false;
	}
	 if(mobile.length!=10)
	{
		alert("mobile number is not 10 digits");
		document.register.mobile.focus();
		return false;
	}
   var gender=document.register.gender.value;
	if(gender=='')
	{
		alert("please fill the gender box");
		document.register.gender.focus();
		return false;
	}
   
   var select=document.register.city.value;
 	if(select=='')
	{
		alert("please fill the city box");
		document.register.city.focus();
		return false;
	}

   var password=document.register.password.value;
 	if(password=='')
	{
		alert("please fill the password box");
		document.register.password.focus();
		return false;
	}
	if(password.length<=3)
	{
		alert("password is weak");
		document.register.password.focus();
		return false;
	}
	var repassword=document.register.repassword.value;
    if(password!=repassword)
	{
		alert("repassword is wrong");
		document.register.repassword.focus();
		return false;
	}


return true;	
}