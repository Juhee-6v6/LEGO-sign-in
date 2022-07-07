<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>join_form</title>
	<meta charset="utf-8"/>
	<style>
		*{margin:0; padding:0;}
		body{margin:0; padding:0; background-color:rgba(255,230,131,1); background-image:url('img/sign0.jpg'); background-position:center;}
		a:link, a:visited{text-decoration:none; color:#222;}
		#logo{margin:100px auto 0; width:130px;}
		#logo a img{width:100%;}

		form{width:460px; margin:50px auto 100px; box-shadow:0 0 20px rgba(0,0,0,0.1);
		border-radius:5px; padding:10px 20px; font-size:14px;
		background-color:rgba(255,255,255,0.5);/*#fcfcfc;*/}

		legend{text-align:center; font-size:30px; padding:20px 0;}

		form p{padding:5px 0;}

		label{display:block; width:100%; margin:18px 0 8px; line-height:30px; font-size:18px;}

		input{width:458px; border:none;/* border-bottom:2px solid #1cbcb7; */text-indent:10px; height:30px; padding:5px 0;}

		/*아이디 중복 체크 (span) */
		#idChkDesc{width:350px; height:30px; line-height:30px; float:left; text-align:center; padding:10px 5px 0; text-align:right; color:#00f;}

		/*아이디 중복 체크 옆에 버튼*/
		#idChkBtn{width:100px; line-height:20px; text-align:center; text-indent:0; margin-top:10px; font-size:12px; background-color:#1cbcb7; color:#fff; cursor:pointer;}
		
		/*zip 코드*/
		#postArea{width:100%;}
		#postArea #post3{width:248px;}
		#postArea #postBtn{height:41px; text-indent:0; width:200px; margin-left:5px; background-color:#1cbcb7; color:#fff; cursor:pointer;}

		#add1, #add2{display:block; width:458px;}
		#add1{margin-bottom:10px;}

		/*버튼*/
		#button{width:460px;}
		#button input{display:block; width:458px; height:50px; margin:30px 0; background-color:#fff;
		text-indent:0; background-color:#1cbcb7; color:#fff;
		cursor:pointer; font-size:18px;}
		#button .re{background-color:#eee; color:#333; border:none;}
		#button .re:hover{background-color:#1cbcb7; color:#fff;}
	</style>

	<!--아이디 중복관련 script-->
	<script>
		function idChkBtns(){
		
			var userid = document.getElementById("userid");
			
			// span 태그
			var idChkDesc = document.getElementById("idChkDesc");
			// console.log(idChkDesc);

			if(userid.value =="" ){
				alert("The ID is empty.");
				userid.focus();
				idChkDesc.innerHTML="<strong style='color:red;'>ID Required</strong>";
			}
			else{
			
				xmlhttp = new XMLHttpRequest();

				xmlhttp.open("GET","02_idDouble.php?q="+userid.value,true);

				xmlhttp.onreadystatechange = function(){
					
					if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
						
						idChkDesc.innerHTML = xmlhttp.responseText;
					}
				};
				xmlhttp.send();
			}
		}
	</script>

	<!--우편번호 관련 script-->
	<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
	<script>
		function postcode(){
			new daum.Postcode({
				oncomplete: function(data) {
					document.getElementById("post3").value=data.zonecode;
					document.getElementById("add1").value=data.address;
					document.getElementById("add2").focus();
				}
			}).open();
		
		}
	</script>
 </head>
 <body>
	<div id="logo">
		<a href="http://idph0203.dothome.co.kr/lego" title="메인사이트">
			<img src="img/logo0.svg" alt="로고이미지"/>
		</a>
	</div>
	<form action="02_join_control.php" method="post">
		<legend>Sign Up</legend>
		<p>
			<label for="userid">ID</label>
			<input id="userid" type="text" name="userid" placeholder="Enter up to 10 characters" maxlength="10" required/>
			<span id="idChkDesc">※ ID duplicate check</span>
			<input id="idChkBtn" type="button" value="Duplicate check" onclick="idChkBtns();"/>
		</p>
		<p>
			<label for="userpass">Password</label>
			<input id="userpass" type="password" name="userpass" placeholder="Enter up to 8 characters" maxlength="8" required/>
		</p>
		<p>
			<label for="username">Username</label>
			<input id="username" type="text" name="username" required/>
		</p>
		<p>
			<label for="useremail">Email</label>
			<input id="useremail" type="email" name="useremail" required/>
		</p>
		<p>
			<label for="userphone">Phone number</label>
			<input id="userphone" type="tel" name="userphone" placeholder="ex) 010-123-4567" title="When entering a phone number - Create" required
			pattern="\d{3}-\d{3,4}-\d{4}"/>
		</p>
		<p>
			<label for="add1">Street Address</label>
			<input id="add1" type="text" name="add1" title="상세주소1" placeholder="Street and number, P.O. box, c/o."/>
			<input id="add2" type="text" name="add2" title="상세주소2" placeholder="Apartment, suite, unit, building, floor, etc."/>
		</p>
		<p id="postArea">
			<input id="post3" type="text" name="post3" title="Zip code" placeholder="Zip code"/>
			<input id="postBtn" type="button" value="Find Zip Code" onclick="postcode();"/>
		</p>
		<p id="button">
			<input type="submit" value="Sign Up" title="Sign Up"/>
			<input class="re" type="reset" value="Reset" title="reset"/>
		</p>
	</form>
 </body>
</html>