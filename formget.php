<?php

$frisname = $_GET['frisname'];
$password = $GET['password'];
$comment = $GET['comment'];

?>
<!DOCTYPE html>
<html>
    <head>
<title>Format</title>
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="Mystyle.css">
    </head>
    <body>
    <h2>ส่งข้อมูลผ่าน Form (get) </h2>
            <form action ="formget.php"method="GET">
            First Name : <input type="text" name="firstname"><br><br>
            passeord : <input type ="password"name="password"><br><br>
            comment : <textarea name="comment"></textarea><br><br>
            <input type="submit" value="SEND"><br><br>
    </form>
        <?php
        if(isset($frisname)){
            echo "<h3>ข้อมูลที่รับเข้ามา</h3>";
            echo $frisname;
            echo '<br>';
            echo $password;
            echo '<br>';
            echo $comment;
        } // End issent
        else {
            echo "ไม่มีข้อมูล";
        }
        ?>
    </body>
</html>