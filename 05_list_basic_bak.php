<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>list</title>
	<meta charset="utf-8"/>
	<style>
		*{margin:0; padding:0;}
		body{margin:0; padding:0;}
		a:link, a:visited{color:#333; text-decoration:none;}
		a:hover, a:focus{color:#1cbcb7; text-decoration:underline;}

		#wrap{/*max-width:1920px; */width:100%; margin:0 auto;}
		#wrap h3{margin-top:100px; text-align:center; font-size:25px; color:rgb(255,230,131);
		text-transform:uppercase; padding-bottom:25px;}

		#container{width:100%;}
		#review{width:940px; margin:0 auto;}

		#link{width:100%; padding:10px 0; text-align:right;}
		#link a{text-decoration:none; padding:0 8px; color:#222; text-shadow:0 0 5px rgba(0,0,0,0.2); font-size:14px;}
		#link a:hover, #link a:focus{color:#1cbcb7;}
		#link span{color:rgba(0,0,0,0.4);}

		#freeboard{width:100%; line-height:22px; font-size:14px;}
		#freeboard caption{display:none;}

		#freeboard th, #freeboard td{padding:10px; border-bottom:1px solid #f1f1f1;}
		#freeboard th{background-color:#f5f5f5; color:#1cbcb7; border-right:1px solid #fefefe;}

		#freeboard td{color:#333; padding-left:30px;}
		#freeboard .writeClk td{border:none;}

		.writeClk{text-align:right;}

		.writeClk a{border:1px solid #1cbcb7; padding:5px 10px; color:#333;}
		.writeClk a:hover, .writeClk a:focus{
			font-weight:700; color:#fff; background-color:#1cbcb7;
			text-decoration:none;
		}

	</style>
 </head>
 <body>
	<div id="wrap">
		<div id="container">
			<div id="review">
				<h3>LEGO review</h3>
				<div id="link">
					<span></span><a href="#none" title="home">HOME</a>
					<span>│</span><a href="03_login.php" title="login">LOGIN</a>
					<span>│</span><a href="01_join_form.php" title="Sign Up">Sign Up</a>
				</div>
				<table id="freeboard" title="게시판 제작">
					<caption>LEGO review</caption>
					<colgroup>
						<col width="10%"/>
						<col width="52%"/>
						<col width="13%"/>
						<col width="15%"/>
						<col width="10%"/>
					</colgroup>
					<thead>
						<tr>
							<th scope="col">Number</th>
							<th scope="col">Title</th>
							<th scope="col">Writer</th>
							<th scope="col">Date</th>
							<th scope="col">View</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="#none" title="no">0</a></td>
							<td><a href="#none" title="title">title</a></td>
							<td>name</td>
							<td>date</td>
							<td>view</td>
						</tr>
						<tr class="writeClk">
							<td colspan="5">
								<a href="03_login.php" title="LOGIN">LOGIN</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
 </body>
</html>