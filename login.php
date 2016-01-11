<?php

    $userName = isset($_POST["email"]) ? mysql_real_escape_string($_POST['email']) : null;
    $password = isset($_POST["password"]) ? mysql_real_escape_string($_POST['password']) : null;
			

				$mysqli = mysqli_connect("localhost:3306","root","J43ddiQucweA","cynapse");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
			

			    	$loggedIn = false;
				    $res = $mysqli->query("SELECT * FROM user where uname='$userName' and pass='$password'");
  					if($row = $res->fetch_assoc()){
  						  session_start();
    					$_SESSION['siD']=$userName;
    					$level = $row['level'];
						$_SESSION['level'] = $level;
						$link = "Level" . $level . ".php";
						$login = $row['login'] + 1;
						$mysqli->query("UPDATE user SET login = '$login' WHERE uname='$userName' ");
  						echo "<script>window.location.assign('" . $link . "');</script>";
  					}else{
  						echo "<script>window.location.assign('index.php');alert(\"invalid credentials!\");</script>";
  						
  					}

  		$con->close();
			


			?>

