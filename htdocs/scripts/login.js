function loginToAccount(){
	let url = "login/login.php?";
	let login = document.getElementById("login-form-login").value;
	let password = document.getElementById("login-form-password").value;
	url += "login=" + login;
	url += "&password=" + password;
	document.location.href = url;
}