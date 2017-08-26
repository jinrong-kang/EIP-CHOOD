<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body {
		background-image: url(../../images/bg.jpg);
		z-index: -2;
		background-repeat: no-repeat;
		background-position: center;
		background-size: 100%;
	}
	header #logo{
		text-decoration: none;
		padding-top: 15px;
		padding-left: 15px;
		font-size: 3em;
		font-weight: bold;
		letter-spacing: 2px;
		color: #666;
		transition: 1s;
		animation: 4s rainbows infinite;
	}
	header #logo:hover {	
		color: #333;
		transition: 0.25s;
		animation: 1s rainbows infinite;
	}
	#home{
		text-align: center;
		position: relative;
	}
	#menu {
		position: fixed;
		width: 58%;
		margin-left: 25%;
		top: 15px;
		margin: 0;

	}
	#menu ul {
		float: right;
		list-style-type: none;
		margin: 0;
	}
	#menu li {
		width: 35px;
		height: 18px;
		display: inline;
		text-align: center;
		/*border: 5px solid;    
		border-color: #fff;*/
		/*border-radius: 20px;		*/
		box-shadow: #fff 0 0 5px;
		font-size: 1.5em;
		/*padding: 1px #666;*/
	}
	#menu li a {
		text-decoration: none;
		color: #fff;
		transition: 0.5s;
		letter-spacing: 1.5px;
	}
	#menu li a:hover {
		animation: 2.5s rainbow infinite;
	}

	#home #create {
		background-color: rgba(255, 255, 255, 0.2);
		margin: 10% 0;
		width:50%;
		margin-left: 25%;
		/*right: 0;*/
		text-align: center;
		border: 5px solid;    
		border-color: #fff;
		border-radius: 20px;
		box-shadow: #fff 0 0 5px;
		animation: rollIn 2s 1;
		color: #fff;
		font-size: 2em;
		padding: 150px 0;
	}
	[type="input"] {
		height: 2em;
	}
	[type="file"] {
		/*height: 2em;*/
	}
	[type="submit"] {
		width: 20%;
		padding: 10px;
		border-radius: 10px;
		background-color: rgba(255, 255, 255, 0.3);
		color: #fff;
		font-size: 1em;
	}
	label {
		text-align: center;
		color: #eee;
		font-size: 2em;
		font-weight: bold;
		letter-spacing: 1px;
		text-shadow: 0 0 20px #fff;
	}


	@-webkit-keyframes zoomIn{

		from {
			opacity: 0;
			-webkit-transform: scale3d(.3, .3, .3);
			transform: scale3d(.3, .3, .3);
		}
		50% {
			opacity: 1;
		}
	}
	@keyframes rainbow {
		0% {
			background: #fff; color: #333;
		}
		50% {
			background: #333; color: #fff;
		}
		100% {
			background: #fff; color: #333;
		}
	}
	@keyframes rainbows {
		0%, 100% {
			color: #ddd;
		}
		12.5%, 87.5% {
			color: #bbb;
		}
		25%, 75% {
			color: #999;
		}
		37.5%, 62.5% {
			color: #777;
		}
		50% {
			color: #555;
		}
	}

	@-webkit-keyframes rollIn{

		from {
			opacity: 0;
			-webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
			transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
		}
		to {
			opacity: 1;
			-webkit-transform: none;
			transform: none;
		}
	}
</style>
<body>
	<header>
		<a id="logo" href="../article/index">CHOOD</a>
		<?php 
			if(isset($_SESSION['name'])) 
				echo "<a style='float: right; margin-right: 20px; text-decoration: none; color: #fff; font-size: 1.5em; border: 2px solid #fff;' href='../user/user_info'>welcome,".$_SESSION['name']."</a>";	
			else 
				echo "<a style='float: right; margin-right: 20px; text-decoration: none; color: #fff; font-size: 1.5em; border: 2px solid #fff;' href='../user/login'>login</a>";
			?>
	</header>
	<div id="home">
		<div id="menu">
			<ul>
				<li><a href="../article/index">Home</a></li>&nbsp&nbsp
				<li><a href="../article/create">Create</a></li>&nbsp&nbsp
				<li><a href="../article/contact">Contact</a></li>
			</ul>
		</div>
		<div id="create">
			<strong>Email:</strong>jinrong.kang@epitech.eu<br>
			<strong>Email:</strong>yuanyang.xie@epitech.eu<br>
			<strong>Email:</strong>shirong.wang@epitech.eu
		</form>
	</div>
</div>
</body>
</html>