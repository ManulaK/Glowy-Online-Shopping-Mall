function checkPassword()
{
	var password = document.getElementById("pwd").Value;
	var confirmpassword = document.getElementById("cnfrm_pass").value;

	if(password == confirmpassword)
	{
		alert("Password correct");
		return true;
	}

	else
	{
		alert("Password mismatch");
		return false;
	}
}

function enableButton()
{
	if(document.getElementById("ckbx"). checked)
	{
		document.getElementById("btn").disabled = false;
	}

	else
	{
		document.getElementById("btn").disabled = true;
	}
}