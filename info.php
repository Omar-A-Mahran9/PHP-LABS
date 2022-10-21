<?php
if(isset())
setcookie("username","Omar",time()+60);
setcookie("name",'OMARMAHRAN',time()+60);
echo '<pre>';
var_dump($_COOKIE).username;
echo $_COOKIE.username;
echo '<pre>';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'Set Cookies';
    ?>
</body>
</html>