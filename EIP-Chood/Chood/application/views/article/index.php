<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body {
		/*width: 100%;*/
		background-image: url(../../images/bg1.jpg);
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
	footer {
		/*color: white;*/
		bottom: 0;
		position: absolute;
		z-index: 99;
	}
	#home{
		text-align: center;
		position: relative;
	}
	#home h2{
		top: 200px;
		width: 50%;
		text-shadow: 0 0 20px #fff;
		animation: zoomIn 1s;
		font-size: 4em;
		color: #fff;
		font-weight: bold;
		border-color: #fff;
		border-width: 5px;
		border-style: solid;
		position: absolute;
		left: 25%;
		background-color: rgba(255, 255, 255, 0.3);
	}
	#menu {
		position: fixed;
		width: 62%;
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
		/*animation-delay: 1s;*/
	}
	.slider_container {
		margin: 30px auto;
		width: 1200px;
		height: 800px;
		border: 20px solid;    
		border-color: #fff;
		/*border-bottom-width: 100px;*/
		background-color: #f5f5f5;
		box-shadow: #666 0 0 5px;
		position: absolute;
		left: 0;
		margin-top: 1%;
		right: 0;
		/*bottom: 0;*/
		z-index: -1;
	}

	.slider_container div {
		position: absolute;
		top: 0;
		left: 0;
		opacity: 0;
		filter: alpha(opacity=0);
		-webkit-animation: round 15s linear infinite;
		animation: round 15s linear infinite;
	}
	.slider_container span {    
		color: #000;
		background: #fff;
		position: absolute;
		left: 0%;
		top: 840px;
		width: 100%;
		height: 100px;
		font-size: 30px;
		text-align: center;
		line-height: 100px;
		-webkit-transform:scaleY(0);
		-ms-transform:scaleY(0);
		transform:scaleY(0);
		-webkit-transition: all 0.5s ease-in-out;
		transition: all 0.5s ease-in-out;
	}
	.slider_container:hover span {
		width: 100%;
		-webkit-transform:scaleY(1);
		-ms-transform:scaleY(1);
		transform:scaleY(1);
	}
	.slider_container:hover div {
		-webkit-animation-play-state: paused;
		animation-play-state: paused;
	}

	.slider_container img {
		width: 1200px;
		height: 800px;
	}

	#article {
		position: absolute;
		width: 66%;
		left: 17%;
		top: 1300px;
		color: #ddd;
		z-index: 99;
	}
	#article a {
		text-decoration: none;
		color: #ddd;
	}

	@-webkit-keyframes round {
		4% {
			opacity: 1;
			filter: alpha(opacity=100);
			/* 0 - 1秒 淡入*/
		}
		20% {
			opacity: 1;
			filter: alpha(opacity=100);
			/* 1- 5秒靜止*/
		}
		24% {
			opacity: 0;
			filter: alpha(opacity=0);
			/* 5-6秒淡出*/
		}
	}
	@keyframes round {
		4% {
			opacity: 1;
			filter: alpha(opacity=100);
			/* 0 - 1秒 淡入*/
		}
		20% {
			opacity: 1;
			filter: alpha(opacity=100);
			/* 1- 5秒靜止*/
		}
		24% {
			opacity: 0;
			filter: alpha(opacity=0);
			/* 5-6秒淡出*/
		}
	}
	.slider_container div:nth-child(5) {
		-webkit-animation-delay: 0s;
		animation-delay: 0s;
	}

	.slider_container div:nth-child(4) {
		-webkit-animation-delay: 3s;
		animation-delay: 3s;
	}

	.slider_container div:nth-child(3) {
		-webkit-animation-delay: 6s;
		animation-delay: 6s;
	}

	.slider_container div:nth-child(2) {
		-webkit-animation-delay: 9s;
		animation-delay: 9s;
	}

	.slider_container div:nth-child(1) {
		-webkit-animation-delay: 12s;
		animation-delay: 12s;
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
		<h2>CHINESE FOOD</br>SHARING</h2>
		<div class="slider_container">
			<div>
				<img src="../../images/1.jpg" alt="pure css3 slider" />
				<!-- <span class="info">Image Description</span> -->
			</div>
			<div>
				<img src="../../images/2.jpg" alt="pure css3 slider" />
				<!-- <span class="info">Image Description</span> -->
			</div>
			<div>
				<img src="../../images/3.jpg" alt="pure css3 slider" />
				<!-- <span class="info">Image Description</span> -->
			</div>
			<div>
				<img src="../../images/4.jpg" alt="pure css3 slider" />
				<!-- <span class="info">Image Description</span> -->
			</div>
			<div>
				<img src="../../images/5.jpg" alt="pure css3 slider" />
				<!-- <span class="info">Image Description</span> -->
			</div>
		</div>

		<!-- <h2 style="color: blue;"><?php echo "recently" ?> </h2> -->

		<div id="article">
			<?php foreach ($article as $article_item): ?>
				<hr>
				<h3><?php echo $article_item['title'] ?></h3>
				<img src="../../uploads/thumb_imgs/<?php echo $article_item['title']; ?>_thumb.jpg"><br />
				<a href="<?php echo site_url('index.php/article/view/'.$article_item['slug']); ?>">View Article</a>
				<hr>

			<?php endforeach; ?>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li><a href="../article/index">Home</a></li>&nbsp&nbsp
			<li><a href="../article/create">Create</a></li>&nbsp&nbsp
			<li><a href="#article">Article</a></li>&nbsp&nbsp
			<li><a href="../article/contact">Contact</a></li>
		</ul>
	</div>
</body>
</html>