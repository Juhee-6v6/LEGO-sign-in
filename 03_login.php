<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>login</title>
	<meta charset="utf-8"/>
	<style>
		*{margin:0; padding:0;}
		body{margin:0; padding:0; background-color:rgba(255,230,131,1);
		background-image:url('img/sign3.jpg'); background-position:center;}
		h2{position:absolute; left:-9999px; width:1px; height:1px; line-height:0; font-size:1px; overflow:hidden;}
		a:link, a:visited{text-decoration:none; color:#222;}
		#logo{margin:100px auto 0; width:130px;}
		#logo a img{width:100%;}

		#link{width:500px; margin:50px auto 10px; text-align:right;}
		#link a{text-decoration:none; padding:0 8px; color:#000; text-shadow:0 0 5px rgba(255,255,255,0.5); font-size:14px;}

		#link a:hover, #link a:focus{color:#1cbcb7;}
		#link span{color:rgba(0,0,0,0.4);}


		form{width:460px; margin:0 auto; padding:10px 20px; box-shadow:0 0 20px rgba(0,0,0,0.1);
		font-size:14px; background-color:rgba(0,0,0,0.7); border-radius:5px;}

		form fieldset{border:none;}
		form p{padding:5px 0;}

		form legend{text-align:center; font-size:30px; padding-top:30px; color:rgba(255,255,255,0.9);}
		
		form label{display:block; width:100%; margin:18px 0 8px; line-height:30px; color:#1cbcb7;}

		form input{width:458px; border:none; border-bottom:2px solid #1cbcb7; text-indent:10px; height:30px; padding:5px 0; font-size:18px; color:#fff; background-color:rgba(255,255,255,0);}

		form #button{padding:10px 0; text-align:center;}
		form #button input{display:block; width:458px; height:50px; margin:30px 0; background-color:#fff;
		text-indent:0; background-color:#1cbcb7; color:#fff;
		cursor:pointer;}
	</style>
 </head>
 <body>
	<h2>LOGIN</h2>
	<div id="logo">
		<a href="http://idph0203.dothome.co.kr/lego" title="메인사이트">
			<img src="img/logo0.svg" alt="로고이미지"/>
		</a>
	</div>
	<div id="link">
		<span></span><a href="http://idph0203.dothome.co.kr/lego" title="home">HOME</a>
		<span>│</span><a href="#none" title="login">LOGIN</a>
		<span>│</span><a href="01_join_form.php" title="Sign Up">Sign Up</a>
	</div>
	<form action="04_login_control.php" method="post">
		<fieldset>
			<legend>Hello!<br/>Welcome to Lego!</legend>
			<p>
				<label for="userid">Your ID</label>
				<input id="userid" type="text" name="userid" maxlength="10" title="ID" placeholder="ID" required/>
			</p>
			<p>
				<label for="userpass">Your PASSWORD</label>
				<input id="userpass" type="password" name="userpass" maxlength="8" title="PASSWORD" placeholder="PASSWORD" required/>
			</p>
			<p id="button">
				<input type="submit" value="Login" title="Login"/>
			</p>
		</fieldset>
	</form>
 </body>
</html>