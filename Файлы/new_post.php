<? include ("blocks/bd.php");
session_start();
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
        <p class="lead">Добавьте новую запись в нашу <a href="index.php">Гостевую книгу</a></p>
    </div>
		<form name="form1" method="post" action="add_post.php">
         <p>
           <label>Напишите Ваше имя<br>
             <input type="text" name="name" id="name" size="50">
             </label>
         </p>
         <p>
           <label>Напишите Ваш емейл<br>
           <input type="text" name="email" id="email" maxlength="230" size="50">
           </label>
         </p>
         <p>
           <label>Напишите Дату или оставьте текущую<br>
           <input type="text" name="date" id="date" value="<?php $date = date("Y-m-d"); echo $date; ?>">
           </label>
         </p>
         <p>
           <label>Напишите Ваш сайт<br>
           <input name="url" type="text" id="url" maxlength="230" size="50">
           </label>
         </p>
         <p>
           <label>Напишите Ваш текст<br>
           <textarea name="text" id="text" cols="76" rows="5"></textarea>
           </label>
         </p>           
		 <label>
           <input type="submit" name="submit" id="submit" value="Добавить пост">
           </label>
         </p>
       </form>
	<div class="footer">
        <p>&copy; Company 2016</p>
    </div>
    </div>
  </body>
</html>