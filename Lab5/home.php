<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['UserName'])){
    header('Location:login.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head> 

<body>
    <div class="w-50 m-auto mt-5 d-flex flex-column ">
    <h3 class="text-center ">Hi, <b class="text-info"><?php echo $_SESSION["UserName"]?></b> Welcome to our site</h3>
    <img src="./img1.png" width=100% class="border border-dark rounded">
    <a  href="logout.php" class="btn btn-danger w-50 m-auto mt-3" name="logout">Logout</a>
    </div>
</body>
</html>