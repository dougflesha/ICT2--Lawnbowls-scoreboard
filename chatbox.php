<?php  
session_start();
echo '<br><!DOCTYPE html>
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
<li id="Not" ><a href="#S">Notifications</a><div class="ntdv""></div></li>
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
<div class="textmessagebox" ><input type="text" class="form-control customa tm" name="textmessage" ></input></div>
';



echo'
</div>








<button class="EC"style="position:fixed; bottom:20;left:14;color: #ffffff;
border:2px white solid ;
font-size:14px;
border-radius:9px;
background-color:  #4A148C;"><strong>Erase Scores</strong></button>

<div class="login-wrap">
<div class="login-html scorecard">


    <header>
      <div class="scorecard-header"><br>
        <div class="hd-lines"><label>Competition:</label><input type="text" name=""></div>
        <div class="hd-lines"><label>Date:</label><input type="text" name=""></div>
        <div class="row">
          <div class="col-xs-5">
            <input type="text" placeholder="Home Team" value="'.$_SESSION["name_store"].'">
          </div>
          <div class="col-xs-2">
            Vs
          </div>
          <div class="col-xs-5">
            <input type="text" placeholder="Away Team" value="'.$_SESSION["fname"].'">
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
          <input type="text" name="">
        </div>
        <div class="col-xs-2">
          Skip
        </div>
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
      </div>
      <div class="row hide">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" value="0" name="1" id="pts" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" value="0" name="2" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" class="pts" disabled>
            </div>
          </div>   
        </div>
        <div class="col-xs-2">
          Ends
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" value="0" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="3" id="pts3" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" value="0" name="4" class="pts a" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="5" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" name="6" class="pts h" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          1
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="7" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="8" class="pts a" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="9" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="10" class="pts h" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          2
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="11" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="12" class="pts a" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="13" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="14" class="pts h" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          3
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="15" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="16" class="pts a" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="17" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="18" class="pts h" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          4
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="19" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="20" class="pts a" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="21" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="22" class="pts h" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          5
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="23" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="24" class="pts a" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="25" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="26" class="pts h" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          6
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="27" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="28" class="pts a" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="29" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="30" class="pts h" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          7
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="31" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="32" class="pts a" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="33" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="34" class="pts h" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          8
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="35" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" name="36" class="pts a" disabled>
            </div>
          </div>
        </div>
    </div>
          <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-12 group-pts">
              <form method="GET" action="scoreboard.php">
                <input type="number" id="htotal" name="t1">
                <br><hr>
                <input type=submit value=Submit>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          TOTAL
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-12 group-pts">
              <input type="number" maxlength="1" id="atotal" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');" >
            </div>
          </div>
        </div>
    </div> 
</div>
<input id="clickClear" type="submit" value="Clear Scores" class="btn btn-default" />
<input id="text" type="hidden" name="text" autocomplete="off" class="form-control" placeholder="Enter chat message.."/>
</form>
<div id="msg" class="panel-body" style="display: none;">
        </div>
</div>
  </div>


<div class="footer"></div>
<script type="text/javascript" src="js/search.js"></script></div>
</body>
</html>';

?>
<script src="bsjs/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/notification.js"></script>