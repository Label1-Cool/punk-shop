<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>

<body>
	<div id="header">
		<div id="logo">
			<a href="index.php"><img id="logo_img" src="/"/><a>
			<h1>Punk shop</h1>
		</div>
		<div id="authorisation">
			<form method="post" action="login.php">
				<input id="email" name="email" type="text" placeholder="Email">
				<input id="password" name="password" type="password" placeholder="������"><br>
				<span id="checkbox_text"><span><input id="cookie" name="cookie" type="checkbox">
				<input id="auth_button" type="submit" value="�����">
			</form>
			<form action="reg.php">
				<input id="reg_button" type="submit" value="�����������">
			</form>
		</div>
	</div>

	<div id="main">
	
		<div id="search">
			<form id="search" method="post" action="search.php">
				<input id="search_text" name="search_text" type="text">
				<input id="search_button" type="submit" value="������">
			</form>
		</div>
		
		<div id="categories">
		<ul>
			<li><a href="">������� �������</a></li>
			<li><a href="">�����������</a></li>
			<li><a href="">������</a></li>
			<li><a href="">�����</a></li>
			<li><a href="">������</a></li>
			<li><a href="">������</a></li>
			<li><a href="">����������</a></li>
		</ul>
		</div>
		
		<div id="result">
			<div class="advt">
				<img src="/">
				<p class="advt_name"><a href="advt.php">advt name</a></p>
				<p class="advt_description">some describing text</p>
				<p class="advt_description">some describing text</p>
				<p class="advt_date">date</p>
				<p class="advt_author"><a href="user.php">author</a></p>
			</div>

			
		</div>
	


	</div>
	
	<div id="footer">
	
	</div>


</body>


</html>