<?php
session_start();


$hscore = $_POST['hscore'];

if(isset($_SESSION["last"])) {
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Scoreboard</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
<link rel="stylesheet" href="./assets/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style type="text/css">
.col-lg-6.label h1 {
    color: 
    #333;
}
.score {
    font-size: 200px;
    width: 61%;
    text-align: center;
    background-color: 
    #000;
    margin: 124px;
}
</style>

</head>
	<body>

		<div class="container" style="border:1px solid black;">

			<div class = "row"> 
				<div class = "col-lg-2"> </div>
				<div class = "col-lg-8" style=" text-align: center;"><h1>Scoreboard</h1> </div>
				<div class = "col-lg-2"> </div>
			</div>

			<div class = "row"> 
				<div class = "col-lg-6 label"> <h1>Home</h1></div>
				<div class = "col-lg-6 label"> <h1>Visitor</h1></div>
			</div>

			

			<div class = "container">
				<div class = "row" style="display: inline-flex;"> 
					<div class = "col-lg-6 label"> <input data-ms="0" id="score1" class="score digital editable" type="text" value="<?php echo $hscore;?>" style="color: rgb(247, 0, 0);"></div>

				
					<div class = "col-lg-6 label"> <input data-ms="0" id="score2" class="score digital editable" type="text" value="0" style="color: rgb(247, 0, 0);"></div>
				</div>
			</div>
		</div>

		<!-- <script type="text/javascript">
			function listChat() 
				{
					$.get("list.php", function (data) {
						
						var hScore = toString(data);
						$("#score1").val(hScore);	
					});

					listChat();
					setInterval(function() {
						listChat();
					}, 500);
					
				}
		</script> -->
	</body>
</html>
