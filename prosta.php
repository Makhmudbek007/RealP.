<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h3>Name:</h3>
        <input type="text" name="name"><span name="nameText" style="color:red">*<?php if($_POST["name"] == ""){print "Ismni Kiriting!";};?></span>
        <h3>Tel-1</h3>
        <input type="text" name="name"><span name="nameText" style="color:red">*<?php if($_POST["name"] == ""){print "Tel-1 ni Kiriting!";};?></span>
        <br><br><br>
        <input type="submit" value="Ro'yxatdan o'tish">
        <input type="reset">
        <br><br><br>
    </form>
    <?php

            if ($_POST["name"] == "" || $_POST["pass_1"] == "" || $_POST["pass_2"] != $_POST["pass_1"] || $_POST["pass_2"] == "" || $_POST["name"] == "") {
                print "<h3 style='color:red'>To'ldiring!!</h3>";
            }else{
                print "<h3 style='color:green'>Ro'yxatdan muvaffaqiyatli o'tdingiz!</h3>";
                
    
                $db = new mysqli("localhost", "root", "", "maktab");
                
                $name = $_POST["name"];
                $pass = $_POST["pass_2"];
                $email = $_POST["email"];

                $db->query("INSERT INTO `dasturlash` (`Ism`, `Parol`, `Email`) VALUES ('$name', '$pass', '$email');");
                $db->close();
            }
    ?>
</body>
</html>