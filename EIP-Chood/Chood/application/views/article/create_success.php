<html>
<head>
	<title>Upload Form</title>
	<style type="text/css">
		body {
			background-image: url(../../images/bg.jpg);
			background-repeat: no-repeat;
			background-attachment: fixed;
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
		#home #success {
			width: 50%;
			margin-left: 25%;
			background-color: rgba(255, 255, 255, 0.2);
			/*margin: 10% 0;*/
			border: 5px solid;    
			border-color: #fff;
			border-radius: 20px;
			box-shadow: #fff 0 0 5px;
			padding-bottom: 2%;
			animation: bounceIn 1s 1;
			color: #fff;
		}
		#home #success h3 {
			font-size: 2em;
		}
		#home #success ul {
			text-align: left;
			margin-left: 10%;
		}
		#home #success li {
			list-style-type: none; 
		}
		#home #success a {
			text-decoration: none;
			background-color: rgba(255, 255, 255, 0.2);
			/*margin: 10% 0;*/
			width:50%;
			/*margin-left: 25%;*/
			/*right: 0;*/
			text-align: center;
			border: 2px solid;    
			border-color: #fff;
			border-radius: 20px;
			box-shadow: #fff 0 0 5px;
			animation: rollIn 2s 1;
			font-size: 2em;
			color: #fff;
			padding: 2px;
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

	@-webkit-keyframes bounceIn{

		from, 20%, 40%, 60%, 80%, to {
			-webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
			animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
		}
		0% {
			opacity: 0;
			-webkit-transform: scale3d(.3, .3, .3);
			transform: scale3d(.3, .3, .3);
		}
		20% {
			-webkit-transform: scale3d(1.1, 1.1, 1.1);
			transform: scale3d(1.1, 1.1, 1.1);
		}
		40% {
			-webkit-transform: scale3d(.9, .9, .9);
			transform: scale3d(.9, .9, .9);
		}
		60% {
			opacity: 1;
			-webkit-transform: scale3d(1.03, 1.03, 1.03);
			transform: scale3d(1.03, 1.03, 1.03);
		}
		80% {
			-webkit-transform: scale3d(.97, .97, .97);
			transform: scale3d(.97, .97, .97);
		}
		to {
			opacity: 1;
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1);
		}
	}
        
	</style>
</head>
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

	<div id="success">
		<h3>Your file was successfully uploaded!</h3>


		<ul>
			<li><strong>Title:&nbsp;</strong><?php echo $title; ?></li>
			<li><strong>Text:&nbsp;</strong><?php echo $text; ?></li>
			<?php foreach ($upload_data as $item => $value):?>
				<li><?php echo $item;?>: <?php echo $value;?></li>
			<?php endforeach; ?>
		</ul>
		<a href="create">Add another article!</a>
	</div>
</div>
</body>
</html>