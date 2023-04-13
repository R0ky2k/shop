<?php session_start();?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход в админку</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div style="text-align: center">

<?php echo  "Вы в админке " . $_SESSION["login"]; ?>
    <br>
<?php echo $array["login"]?>

</div>
</body>
</html>