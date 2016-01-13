<? include ("blocks/bd.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> MyGuestBook</title>
	<style type="text/css">
	table.table-striped {
		font-family: arial;
		background-color: #CDCDCD;
		margin: 10px 0pt 15px;
		width: 100%;
		text-align: left;
	}
	table.table-striped thead tr .headerSortDown {
    background-image: url(img/desc.gif);
	}
	table.table-striped thead tr .header {
    background-image: url(img/bg.gif);
    background-repeat: no-repeat;
    background-position: center right;
    cursor: pointer;
	}
	table.table-striped thead tr th, table.table-striped tfoot tr th {
    background-color: #e6EEEE;
    border: 1px solid #FFF;
    padding: 4px;
	}
	.contents{
		margin: 20px;
		padding: 20px;
		list-style: none;
		background: #F9F9F9;
		border: 1px solid #ddd;
		border-radius: 5px;
	}
	.contents li{
		margin-bottom: 10px;
	}
	.loading-div{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgba(0, 0, 0, 0.56);
		z-index: 999;
		display:none;
	}
	.loading-div img {
		margin-top: 20%;
		margin-left: 50%;
	}

	/* Pagination style */
	.mypagination{margin:15px;padding:0;}
	.mypagination li{
		display: inline;
		padding: 6px 10px 6px 10px;
		border: 1px solid #ddd;
		margin-right: -1px;
		font: 15px/20px Arial, Helvetica, sans-serif;
		background: #FFFFFF;
		box-shadow: inset 1px 1px 5px #F4F4F4;
	}
	.mypagination li a{
		text-decoration:none;
		color: rgb(89, 141, 235);
	}
	.mypagination li.first {
		border-radius: 5px 0px 0px 5px;
	}
	.mypagination li.last {
		border-radius: 0px 5px 5px 0px;
	}
	.mypagination li:hover{
		background: #CFF;
	}
	.mypagination li.active{
		background: #F0F0F0;
		color: #333;
	}	
	</style>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
	<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$("#results" ).load( "ajax/fetch_pages.php"); //load initial records
		
		//executes code below when user click on pagination links
		$("#results").on( "click", ".mypagination a", function (e){
			e.preventDefault();
			$(".loading-div").show(); //show loading element
			var page = $(this).attr("data-page"); //get page number from link
			$("#results").load("ajax/fetch_pages.php",{"page":page}, function(){ //get content from PHP page
				$(".loading-div").hide(); //once done, hide loading element
			});
		});
		// call the tablesorter plugin
		$("#myTable").tablesorter({
			// sort on the first column and third column, order asc
			sortList: [[3,0]],
			sortReset: true,
			sortRestart: true
	}); 
	});
	</script>
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
        <h1>Гостевая книга</h1>
        <p class="lead">Посетители могут вносить в Базу данные через <a href="new_post.php">форму для гостевой книги</a></p>
    </div>
         <div class="loading-div"><img src="img/ajax-loader.gif" ></div>
         <div id="results"><!-- content will be loaded here --></div>	
	<div class="footer">
        <p>&copy; Company 2016</p>
    </div>
    </div>
  </body>
</html>