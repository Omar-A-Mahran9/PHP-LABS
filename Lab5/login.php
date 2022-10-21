<?php
session_start();
if(isset($_SESSION['UserName'])){
    header('Location:home.php');
}

include "config.php";
?>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>

<body class="w-25 m-auto mt-5 ">
<h2>Log in</h2>
<p >please fill in your cerdential to login</p>

<form class="d-flex flex-column gap-2" method='post'>
    <label >Username</label>
    <input type="text" name="user" class="form-control">

    <label>Password</label>
    <input type="password" name="pass" class="form-control">


    <div class="d-flex flex-row gap-2">
    <button type="submit" name="submit" class="btn btn-primary">Login</button>

    </div>
    <p>Dont have acccount? <a href="signup.php" class="text-decoration-none">Sign up now</a></p>
</form>
</body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST['user'];
    $pass=$_POST['pass'];
    if(isset($_POST['submit'])){
        $sql="SELECT * FROM Users WHERE UserName=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$username]);
        $count=$stmt->rowCount();
        if($count>0){
            $_SESSION["UserName"] =  $username;
            header('Location:home.php');
            exit;
        }
        else{
            echo "<div class='alert alert-danger'>You Do not have any account with thi username</div>";
        }

    }
}
?>