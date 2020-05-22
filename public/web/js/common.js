/**
 * 
 */
if(document.getElementById("register"))
{
	document.getElementById("register").onclick=function()
	{
		
		let account_number = document.getElementById("account_number").value;
		if(account_number == ''){
			document.getElementById("Account_number_Message").innerHTML = "*请填电子邮箱";
			document.getElementById("Account_number_Message").style.color = "red";
			return false;
		}else{
			document.getElementById("Account_number_Message").innerHTML = "";
		}
		let nickname = document.getElementById("nickname").value;
		if(nickname == ''){
			document.getElementById("Nickname_Message").innerHTML = "*请填写昵称";
			document.getElementById("Nickname_Message").style.color = "red";
			return false;
		}else{
			document.getElementById("Nickname_Message").innerHTML = "";
		}
		let password = document.getElementById("password").value;
		if(password == ''){
			document.getElementById("Password_Message").innerHTML = "*请填写密码";
			document.getElementById("Password_Message").style.color = "red";
			return false;
		}else{
			document.getElementById("Password_Message").innerHTML = "";
		}
		let confirm_password = document.getElementById("confirm_password").value;
		if(confirm_password == ''){
			document.getElementById("Confirm_Password_Message").innerHTML = "*请填写确认密码";
			document.getElementById("Confirm_Password_Message").style.color = "red";
			return false;
		}else{
			document.getElementById("Confirm_Password_Message").innerHTML = "";
		}
		if(password != confirm_password){
			
			document.getElementById("Confirm_Password_Message").innerHTML = "*密码填写不一致";
			document.getElementById("Confirm_Password_Message").style.color = "red";
		}else{
			document.getElementById("Confirm_Password_Message").innerHTML = "";
		}
		let verification = document.getElementById("verification").value;
		if(verification == ''){
			document.getElementById("Verification_Message").innerHTML = "*请填写验证码";
			document.getElementById("Verification_Message").style.color = "red";
			return false;
		}else{
			document.getElementById("Verification_Message").innerHTML = "";
		}
		
		 let _token = document.getElementById("_token").value;
		 let formData = new FormData();
		    formData.append("account_number", account_number);
		    formData.append("nickname", nickname);
		    formData.append("password", password);
		    formData.append("verification", verification);
		    formData.append("_token", _token);
	        httpHelper({
	            type:'post',
	            async:'true',
	            data:formData,
	            url:'/reg',
	            success:function(data){
	            	 let json_data = JSON.parse(data);
	            	 if(json_data.bool == true){
	            		
		            	// self.location='/admin/main';
	            	 }else{
	            		 document.getElementById(json_data.Error_Message).innerHTML = json_data.message;
	         			 document.getElementById(json_data.Error_Message).style.color = "red";
	         			document.getElementById(json_data.Error_Message).style.fontSize = "12";
		            	 //self.location='/admin/login';
	            	 }
	            },
	            error:function(){
	            	let json_data = JSON.parse(err);
	            	alert(err.message);
	            	alert('失败');
	            }
	        });
		
		
	}
}

function httpHelper(params) {
    var request;
    if(XMLHttpRequest)
        request=new XMLHttpRequest();
    else
        request=new ActiveXObject("Microsoft.XMLHTTP");
    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            if (request.status == 200) {
                if (params.success)
                    params.success(request.responseText);
            }
            else if (parseInt(request.status / 100) == 4) {
                if (params.error)
                    params.error(request.responseText);
            }
        }
    }
    request.open(params.type, params.url, params.async);
    try {
        request.send(params.data||null);
    } catch (e) {
        if (params.error)
            params.error(request.responseText);
    }
}