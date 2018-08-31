var eye = document.getElementById("Text_to_Pass");
var Password = document.getElementById("Password")
var Pass = document.getElementById("Password").getAttribute("type");
eye.addEventListener("click",function(){
	if(Pass == "password"){
		Password.setAttribute("type", "text");
		Pass = "text";
	}
	else{
		Password.setAttribute("type", "password");
		Pass = "password";
	}
});