<!DOCTYPE html>
<html>
<head>
	<title >AIWIFI Questionnaire</title>

	<base href="{{ base_url() }}">
	<link rel="stylesheet" type="text/css" href="resource/css/index.css">
</head>
<body>
<header>
<form method="post" action="index.php/questionnaire/index">
		<input type="image" name="language" value="en" src="resource/images/gb.png" alt="Submit" align="right" style="margin:5px;">
		<input type="image" name="language" value="fr" src="resource/images/fr.png" alt="Submit" align="right" style="margin:5px"> 
		<input type="image" name="language" value="zh" src="resource/images/cn.png" alt="Submit" align="right" style="margin:5px">
	</form>
	<br/><br/>
</header>
	<div class="body_size">
		<h1> {% block Title %}用户调查问卷{% endblock %} </h1>
		<br/>
		<p>{% block hello %}您好！{% endblock %}
			{% block p %}我们是AIWIFI项目研发团队的成员，正在进行一项有关公共网络（即公共wifi）应用状态的调查，想请教您的一些看法，您的回答将作为我们的重要参考。希望您在百忙之中抽出一点宝贵的时间，协助我们完成以下调查问卷，我们郑重保证您的回答只会作为完善我们服务的参考信息，不予公开。感谢您的配合！{% endblock %}
		</p>
		<br/><br/>
		<form class="form1" method="post" action="index.php/questionnaire/userForm">
			<input type="hidden" name="language" value="{{ lang }}" >
			<input type="submit" value="{% block user %}用户{% endblock %}">
		</form>
		<form class="form2" method="post" action="index.php/questionnaire/clientForm">
			<input type="hidden" name="language" value="{{ lang }}" >
			<input type="submit" value="{% block merchant %}商家{% endblock %}">
		</form>
	</div>
<footer>
	<br/><br/><br/>
</footer>
</body>
</html>