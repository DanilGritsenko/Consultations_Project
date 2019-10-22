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
    
    if (isset($_REQUEST['update'])){
        $kask=$yhendus->prepare("UPDATE users SET name=?, username=?, E-mail=? WHERE id= ?");
        $kask->bind_param("sss", $_REQUEST["name"], $_REQUEST["username"], $_REQUEST["e-mail"] );
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
        <input type="text" name="e-mail">
        <br>
        <input type="submit" value="Sisesta">
    </form>

    <table border="1">
        <?php
            $kask=$yhendus->prepare("SELECT id, name, username, E-mail FROM users");
            $kask->bind_result($id, $name, $username, $email);
            $kask->execute();
            echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Username</th>";
            echo "<th>E-mail</th>";
            echo "<th>Name</th>";
            echo "</tr>";
            
            while($kask->fetch()){
                echo "<tr><td>$id</td>";
                echo "<td>".htmlspecialchars($name)."</td>";
                echo "<td>".htmlspecialchars($username)."</td>";
                echo "<td>".htmlspecialchars($email)."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>