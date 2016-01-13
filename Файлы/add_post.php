<?php 
include ("blocks/bd.php");
if (isset($_POST['name']))       
{
$name = $_POST['name']; 

if ($name == '') 
{
unset($name);
}  
}
if (isset($_POST['email']))       {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['date']))        {$date = $_POST['date']; if ($date == '') {unset($date);}}
if (isset($_POST['url'])) 		  {$url = $_POST['url']; if ($url == '') {unset($url);}}
if (isset($_POST['text']))        {$text = $_POST['text']; if ($text == '') {unset($text);}}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 

    <title> MyGuestBook</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container">
    <div class="page-header">
        <h1>Добавление записи в Гостевую книгу</h1>
        <p class="lead">Добавьте новую запись в нашу Гостевую книгу</p>
    </div>
	<?php 
	if (isset($name) && isset($email) && isset($date) && isset($url) && isset($text))
	{
	$result = mysql_query ("INSERT INTO records (name,email,date,url,text) VALUES ('$name', '$email','$date','$url','$text')");

	if ($result) {echo "<p>ВАША ЗАПИСЬ УСПЕШНО ДОБАВЛЕНА! ВЫ МОЖЕТЕ <a href='index.php'>ПОСМОТРЕТЬ ГОСТЕВУЮ КНИГУ</p>";}
	else {echo "<p>ВАШ ПОСТ НЕ ДОБАВЛЕН! ВСЕ ПОЛЯ ОБЯЗАТЕЛЬНЫ К ЗАПОЛНЕНИЮ!</p>";}
	}		 
	else 
	{
	echo "<p>ВАШ ПОСТ НЕ ДОБАВЛЕН! ОБНОВИТЕ СТРАНИЦУ!</p>";
	}
	?>
	<div class="footer">
        <p>&copy; Company 2016</p>
    </div>
    </div>
  </body>
</html>