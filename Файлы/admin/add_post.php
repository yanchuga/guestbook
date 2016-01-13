<?php 
include ("lock.php");
include ("ablocks/bd.php");
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

    <title>Панель Администратора</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Панель Администратора</a>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="new_post.php">Добавить пост</a></li>
            <li><a href="edit_post.php">Изменить пост</a></li>
            <li><a href="del_post.php">Удалить пост</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Добавить пост</h1>
		          <?php 
if (isset($name) && isset($email) && isset($date) && isset($url) && isset($text))
{
$result = mysql_query ("INSERT INTO records (name,email,date,url,text) VALUES ('$name', '$email','$date','$url','$text')");

if ($result) {echo "<p>ВАШ ПОСТ УСПЕШНО ДОБАВЛЕН! ВЫ МОЖЕТЕ <a href='../index.php'>ПОСМОТРЕТЬ ПОСТ</a></p>";}
else {echo "<p>ВАШ ПОСТ НЕ ДОБАВЛЕН! ВСЕ ПОЛЯ ОБЯЗАТЕЛЬНЫ К ЗАПОЛНЕНИЮ!</p>";}
}		 
else 
{
echo "<p>ВАШ ПОСТ НЕ ДОБАВЛЕН! ОБНОВИТЕ СТРАНИЦУ!</p>";
}
?>


        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>