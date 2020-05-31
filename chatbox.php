<?php 
  $limit = $_GET["endsNumber"];
?>
<?php  
session_start();
echo '<!DOCTYPE html>
<html>
<head>
  <title>';
  echo $_SESSION["name_store"]."'s page";
  echo '</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bsjs/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="php/messages.css">
<script src="bsjs/jquery.min.js"></script>
<script src="bsjs/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/search.css" type="text/css">
<script src="js/nsc.js"></script>
<link rel="stylesheet" type="text/css" href="css/wall.css">




</head>
<body>



<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" >';
  echo $_SESSION["name_store"];
  echo '</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
<li id="Not" ><a href="#S">Notifications</a><div class="ntdv"></div></li>
        <li><a href="wall.php#S" id="s">Search Players</a></li>
        <li><a href="friends.php" id="f">Players Available</a></li>
        <li><a href="groups.php" id="g">Groups</a></li>
        <li><a href="php/logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="unclick">
<div class="chatdiv" style="display: none;">
<a style="color:white; margin-left:5px; text-decoration:none;">'.$_SESSION["fname"].'</a><a class="online" style="color:white; margin-left:1px; text-decoration:none;">- Getting Info..</a>
<div class="messagediv">
';

echo'
</div>
<div class="textmessagebox" ><input type="text" class="form-control customa tm" name="textmessage" ></div>
';

echo'
</div>
<button class="EC" style="position:fixed; bottom:20;left:14;color: #ffffff; border:2px white solid; font-size:14px; border-radius:9px; background-color: #4A148C;"><strong>Erase Scores</strong></button>
<div class="login-wrap">
<div class="login-html scorecard">


    <header>
      <div class="scorecard-header"><br>
        <div class="hd-lines">
          <div class="col-xs-5" style="padding: 0;">
            <label>Competition:</label>
          </div>
          <div class="col-xs-7" style="padding: 0; margin-bottom: 10px;">
            <input type="text" name="" style="width: 100%;float: right;">
            </div>
          </div>  
        <div class="hd-lines">
          <div class="col-xs-2" style="padding: 0;">
            <label style="width: 8%;">Date:</label>
          </div>
          <div class="col-xs-10" style="padding: 0; margin-bottom: 10px;">
            <input type="number" name="" style="width: 90%;float: right;">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-5">
            <input type="text" placeholder="Home Team" value="">
          </div>
          <div class="col-xs-2">
            Vs
          </div>
          <div class="col-xs-5">
            <input type="text" placeholder="Away Team" value="">
          </div>
        </div>
      </div>
    </header>
    <form id="sendform" method="POST" class="input-group">
    <div class="score-area">
      <div class="row">
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
        <div class="col-xs-2">
          Lead
        </div>
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
        <div class="col-xs-2">
          2nd
        </div>
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
        <div class="col-xs-2">
          3rd
        </div>
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <input type="text" name="" value="">
        </div>
        <div class="col-xs-2">
          Skip
        </div>
        <div class="col-xs-5">
          <input type="text" name="" value="">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
             ';?>
                <?php
                   for ($i=1; $i<=$limit; $i++) { ?>
                    <input type="text" name="ph<?php echo $i ?>" maxlength="2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern="\d*" class="pts ph" id="ph<?php echo $i ?>"/><br>
                <?php } ?>
              <?php echo'
            </div>
            <div class="col-xs-6 group-pts">
             ';?>
                <?php
                   for ($i=1; $i<=$limit; $i++) { ?>
                    <input type="text" name="th<?php echo $i ?>" maxlength="2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern="\d*" disabled id="th<?php echo $i ?>"/><br>
                <?php } ?>
              <?php echo'
            </div>
          </div>   
        </div>
        <div class="col-xs-2" style="margin: 0;">
          ';?>
            <?php
               for ($i=1; $i<=$limit; $i++) { ?>
                <div style="padding-top: 10%;height: 32px;"><?php echo $i ?></div>
            <?php } ?>
          <?php echo'
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
             ';?>
                <?php
                   for ($i=1; $i<=$limit; $i++) { ?>
                    <input type="text" name="pa<?php echo $i ?>" maxlength="2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern="\d*" class="pts pa" id="pa<?php echo $i ?>"/><br>
                <?php } ?>
              <?php echo'
            </div>
            <div class="col-xs-6 group-pts">
             ';?>
                <?php
                   for ($i=1; $i<=$limit; $i++) { ?>
                    <input type="text" name="ta<?php echo $i ?>" maxlength="2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern="\d*" disabled id="ta<?php echo $i ?>"/><br>
                <?php } ?>
              <?php echo'
            </div>
          </div>
        </div>
      </div>
      
          <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-12 group-pts">
                <input type="number" id="htotal" name="t1" disabled>              
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          TOTAL
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-12 group-pts">
              <input type="number" maxlength="1" id="atotal" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" disabled>
            </div>
          </div>
        </div>
    </div> 
</div>
<input id="text" type="hidden" name="text" autocomplete="off" class="form-control" placeholder="Enter chat message.."/>
</form>
<div id="msg" class="panel-body" style="display: none;">
        </div>
</div>
  </div>


<div class="footer"><a href="scoreboard.php" target=”_blank” style="color: #fff;margin: 0 auto;display: table;">Go to Main Scoreboard</a></div>
<script type="text/javascript" src="js/search.js"></script></div>
<script src="js/main.js"></script>
<script src="js/notification.js"></script>
</body>
</html>';

?>
