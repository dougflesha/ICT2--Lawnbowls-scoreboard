<?php  
session_start();
echo '<br><!DOCTYPE html>
<html>
<head>
  <title>Scoreboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bsjs/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="php/messages.css">
<script src="bsjs/jquery.min.js"></script>
<script src="bsjs/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/search.css" type="text/css">
<script src="js/nsc.js"></script>
<link rel="stylesheet" type="text/css" href="css/wall.css">

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
					<div class = "col-lg-6 label"> <input data-ms="0" id="score1" class="score digital editable" type="text" value="0" style="color: rgb(247, 0, 0);"></div>

				
					<div class = "col-lg-6 label"> <input data-ms="0" id="score2" class="score digital editable" type="text" value="0" style="color: rgb(247, 0, 0);"></div>
				</div>
			</div>
		</div>
<script type="text/javascript" src="js/search.js"></script></div>
</body>
</html>';

?>
<script src="bsjs/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/notification.js"></script>