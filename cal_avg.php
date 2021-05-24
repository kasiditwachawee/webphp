<?php
$nume1 = $_POST['nume1'];
$nume2 = $_POST['nume2'];
$nume3 = $_POST['nume3'];
$nume4 = $_POST['nume4'];
$nume5 = $_POST['nume5'];
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
    <h2>โปรแกรมคำนวณค่าเฉลี่ย</h2>
        <form action="cal_avg.php" method="POST">
        Number 1 : <input type="text" name="num1"><br><br>
        Number 2 : <input type="text" name="num2"><br><br>
        Number 3 : <input type="text" name="num3"><br><br>
        Number 4 : <input type="text" name="num4"><br><br>
        Number 5 : <input type="text" name="num5"><br><br>
        <input type="reset" value="Clear">
        <input type="submit" value="Cal Average"><br><br>
        </form>
        <?php
        

        ?>
    </body>
</html>