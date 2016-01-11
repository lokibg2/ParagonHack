<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Paragon Hack!</title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    
    
    
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style1.css">

    
    <style type="text/css">  
	html{
		font-size:100%;
	}
    body {
      position: relative; 
      font-size: 1em;
      background-image: url("bg.jpg")!important;

  	}
  	nav {
  		height:100px;
  		font-size:1.5em;
  		padding: 20px;
  		color:black;
  	}
  	.navbar-collapse { background-color: maroon;} 
   
  	
  	#main{

      top: 100px;
      display: inline-block;

  	}
pre {
	font-family:"Times New Roman", Times, serif;
	font-size:2em;
	white-space: pre-wrap;

}
  	
  	
@font-face {
    font-family: precy;
    src: url('DD.ttf');
    font-weight: bold;
}

</style>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://jschr.github.io/textillate/assets/jquery.lettering.js'></script>
<script src='http://jschr.github.io/textillate/jquery.textillate.js'></script>

  </head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top" style="background-color:maroon;">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://paragonhack.bitnamiapp.com" style="font-size:2em; font-family:Times;color:#FFF!important">ParagonHack!</a>

    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
          <li><a id = "about">About</a></li>
          <li><a id="lead">Leader Board</a></li>
		  <li><a  id = "play">Rules</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="main"  align = "center" class="col-md-offset-1 container  col-md-12" style="padding-top:20px;">
 Hello Hackers! Welcome to level 1 of ParagonHack! <br>
Your journey towards hacking the server begins here. <br>
At first, you need to find out the unique identifier of the server from the clues given below.<br>
All the best! :) <br><br>
<div class="row" align="center">
	<div class="col-md-offset-1 col-md-2" style="background-color:white;height:250px;margin-right:20px;font-size:2em;color:blue;padding:40px">
	<img src = 'annauniv_logo.png' style = "max-width:100%;max-height:100%;">	
	<strong style="color:black;font-size:2em"><br>CSE<br></strong>
	</div>
	<div class="col-md-2" style="height:100px;height:250px;margin-right:20px;background-color:white;">
	<img src = 'arm.jpg' style = "max-width:100%;max-height:100%;">
	</div>
	<div class="col-md-2" style="height:100px;height:250px;margin-right:20px;background-color:white;">
	<img src = 'heinz.jpg' style = "max-width:100%;max-height:100%;">
	</div>
	<div class="col-md-2" style="height:100px;height:250px;margin-right:20px;background-color:white;">
	<img src = 'xl.jpg' style = "max-width:100%;max-height:100%;">
	</div><br><br>

</div>
	<form action="Level2.php" method ="post">
  
  <p>
  <br>
    <label for="Answer">Enter your answer here</label>
    <input class= "col-md-3 col-md-offset-3"type="text"style="width:50%"  name="answer" id="answer"><br><br><br><br>
	<input type="submit"  class = "btn-primary col-md-2 col-md-offset-5" style="height:50px" value="HackIt!">
  </p>
 
 

   
</form>

</div>


    
    
<div id="abt" class="container page-header">
<BR><BR><BR><BR><BR><BR>
<h2>About the Event</h2>
<pre>
<p>
HelloHackers! 
This is the first of its kind Cynapse's Online Treasure hunt. As it is conducted by the Department of CSE, the storyline is based on hacking.

The scenario is set up such that,the ultimate aim of the participant is to hack the system by passing through all the phases of hacking. 
<ol>
<li>Phase 1:Reconnaissance
<li>Phase 2:Scanning
<li>Phase 3:Gaining Access 
<li>Phase 4:Maintaining Access 
<li>Phase 5:Covering Tracks
</ol>
There will be several levels of clues for cracking each of the phases.

Each participant has to pass the levels of the treasure hunt by solving the puzzles put forth and in the process moves one step closer to hacking the system.

The top three participant who are able to clear all the levels and thereby hack the given system first will be the winners and there by the event ends.
</p>

</pre>
</div>



<div  id = "lb" class="container page-header" style="width:80%;">
<h2 style="align:center">Leader Board</h2>
	<div class="table-responsive">
		<table class="table" style="color:blue!important">
			<th class="active"> Name</th>
			<th class="active"> RegNo </th>
			<th class="active"> Level </th>

			<?php

				$con = mysqli_connect("localhost:3306","root","J43ddiQucweA","cynapse");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				$sql = "SELECT * FROM `user` ORDER BY level DESC,time ASC LIMIT 10";
				$result = $con->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
			    while($row = $result->fetch_assoc()) {
				echo("<tr class=\"active\">");
				echo("<td>" . $row['name'] . "</td>");
				echo("<td>" . $row['uname'] . "</td>");
echo("<td>". $row['level'] . "</td>");
				echo("</tr>");
	
			    }
				} else {
			    echo "0 results";
			}
			$con->close();

			?>

			
		</table>
</div>
<div id ="lgn">
<h2> Rules </h2>
<ul>
	<li> The contest proceeds by solving a puzzle at each level with the clues provided.
	<li> The answers are to be given in lower case without spaces
	<li> The clues can be all over the page, source, file,etc. Keep searching
	<li> Usage of online search engines is allowed ;) 
	<li> This is not a hacking contest, but the theme of the treasure hunt is "Hacking"
	<li> Additional clues will be provided on the go
	<li> Incase of any queries comment/ message on the FB page <a href = "https://www.facebook.com/cynapse2k15"> here </a>
	<li> Good luck and have fun 
</ul>


</div>
<script >
$("#lead").click(function() {
    $('html, body').animate({
        scrollTop: $("#lb").offset().top
    }, 2000);
});
$("#play").click(function() {
    $('html, body').animate({
        scrollTop: $("#lgn").offset().top
    }, 2000);
});
$("#about").click(function() {
    $('html, body').animate({
        scrollTop: $("#abt").offset().top
    }, 2000);
});
	$('.tlt').textillate({ 
	in: { effect: 'splat' },
	out: { effect: 'foldUnfold', sync: true },
	loop: true
	});

	$('li a').mouseover(function(){
		$(this).css({backgroundColor:'crimson'});
	});
	$('li a').mouseout(function(){
		$(this).css({backgroundColor:'transparent'});
	});
</script>
<div>

  </body>
</html>
