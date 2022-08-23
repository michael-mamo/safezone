<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>መግቢያ</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- hello comment -->
	<div class="wrapper">
		<div class="nav">
			<div class="logo">
			 <a style="text-decoration: none;color: #fff; " href="index.php">መንጃ ፍቃድ መማርያ</a>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">መነሻ ገጽ</a></li>
				<li><a href="About-us.php">ስለእኛ</a></li>
				<li><a href="contact-us.php">ያግኙን</a></li>
				<li><a href="Login.php" style="color: yellow;">መግቢያ</a></li>
				<li><a href="Tutorial.php">መማርያ</a></li>
			</ul>
		</div>
	</div>	
	<div class="header">
		<div class="wht">
		<div class="form-area" style="background-color: rgba(0,0,0,0.6);">
			<form name="myForm" action="Login.php" onsubmit="return validate()" method="post">
			    <div class="form-field">
			    	
					<h3>መግቢያ</h3>
				</div>
			    <div class="form-field">
					<label>ስም</label>
					<input type="text" name="uname" id="uname" required onclick="greenBorder('uname')";>
					<div id="uname_error"></div>
				</div>
				<div class="form-field">
					<label>ማለፊያ ቃል</label>
					<input type="password" name="Password_1" id="password" required onclick="greenBorder('password')";>
					<div id="password_error"></div>
				</div>
						         <!--<div class="form-field">
					<button type="submit" class="btn">Log in</button>
				 </div>-->
				 <input type="submit" value="ግባ" class="btn" name="login">

          </form>
	</div>
	</div>

</div>
</body>
<?php                   
                    if(isset($_POST['login'])){
                         $db_host = '109.70.148.58';
						$db_name = 'safezoneelearnin_projectdb';
						$db_user = 'safezoneelearnin_root';
						$db_password = '0740730@Root';
						$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
                        if(!$connection){
                            echo "<script> alert('connection is lost'); </script>";
                            die();
                        }
                        $enuname = $_POST['uname'];
                        $password = $_POST['Password_1'];
						
                        $sql = "SELECT * FROM user WHERE username = '$enuname'  AND  password = '$password'";
                        $result = mysqli_query($connection, $sql);
                        $count = mysqli_num_rows($result);
						if($count > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $_SESSION["uname"] = $row["username"];
                                header("Location:Tutorial.php");
                            }
					}else {
						if($enuname == "kaleab" && $password = "12345678"){
                        	$_SESSION["admin"] = "admin";
							
                             header("Location:admin.php");
                        }
						else{
							echo "<script> alert('መጠቀሚያ ስም ወይም የይለፍ ቃል ተሳስተዋል!'); </script>";
						}
                            }
                                mysqli_close($connection);
                    }
                ?>

</body>
</html>
