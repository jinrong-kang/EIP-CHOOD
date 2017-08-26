<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <base href = "{{ base_url() }}"/>
     <style type="text/css">
         body {
            background-color: #125371;
            background-image: url();
            background-repeat: no-repeat;
            background-size: 100%;
         }
         #info {
            background-color: rgba(255,255,255,0.2);
            width: 60%;
            margin-left: 20%;
            border: 5px solid #fff;
            border-radius: 20px;
            box-shadow: 0 0 20px #fff;
            color: #fff;
         }
         #info a {
            text-decoration: none;
            color: #aaa;
         }

     </style>
</head>
<body>
<form method="post" action="index.php/user/user_manage">
		<input type="image" name="language" value="en" src="resource/images/gb.png" alt="Submit" align="right" style="margin:5px;">
		<input type="image" name="language" value="zh" src="resource/images/cn.png" alt="Submit" align="right" style="margin:5px">
</form>
<br>
<h1 style="text-align: center; color: #fff;"> {{ block('Title') }}</h1>
<div id="info">
    {% for user_item in user %}
    	<hr>
        {{ user_item.name }}<br>
        <a href=""> {{ block('View') }}</a>      
    {% endfor %}
    <hr>
</div>
</body>
</html>
