<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
	<?php
    require("conf.php");
    ?>
	 <?php
                session_start();
                
                // Check if the user is already logged in, if yes then redirect him to welcome page
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo("<li><a href='profile.php' class='nav-link'>Profile</a></li>");
                    echo("<li><a href='logout.php' class='nav-link'>Log out</a></li>");
                }
                else{
                  echo("<li><a href='login.php' class='nav-link'>Login</a></li>");
                }
                ?>
    
	<?php 
                            echo htmlspecialchars($_SESSION["name"]);
                            echo " ("; 
                            echo htmlspecialchars($_SESSION["username"]);
                            echo ")";
							echo "/";
							 echo htmlspecialchars($_SESSION["email"]);
                          
                            
                            
                            ?></h4>
                            <?php
                            echo "ID: ".htmlspecialchars($_SESSION["id"])."<br/>";
       ?>
    <?php
    
    if (isset($_REQUEST['up'])){
        $kask=$yhendus->prepare("UPDATE users SET name=?, username=?, email=? WHERE id= ?");
        $kask->bind_param("sssi", $_REQUEST["name"], $_REQUEST["username"], $_REQUEST["email"]);
        $kask->execute();
        echo "<meta http-equiv='refresh' content='0;url=profileedit.php'>";
        exit();
        }
    ?>
	
</head>

<body>
    <form action="?">
        <!--<input type="hidden" name="uusrida" value="jah">-->
        Name:
        <input type="text" name="name">
        <br>
        Username:
        <input type="text" name="username">
        <br>
        E-mail:
        <input type="text" name="email">
        <br>
        <input type="submit" value="Sisesta">
    </form>


</body>
</html>