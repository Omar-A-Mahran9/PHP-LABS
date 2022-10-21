<?php
session_start();
include "config.php";
if(isset($_SESSION['UserName'])){
    header('Location:home.php');
}
?>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>

<body class="w-25 m-auto mt-5">
<h2>Sign Up</h2>
<p >please fill this form to create an account</p>

<form class="d-flex flex-column gap-2" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label >Username</label>
    <input type="text" name="username" class="form-control"  >

    <label>Password</label>
    <input type="password" name="password" class="form-control"  >

    <label>Confirm Password</label>
    <input type="password" name="CPass" class="form-control"  >

    <div class="d-flex flex-row gap-2">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    </div>
    <p>Already have an account? <a href="login.php"  class="text-decoration-none">Login here</a></p>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmPass=$_POST['CPass'];
    $submit=$_POST['submit'];
    
    if(isset($submit)){
    if(!isset($username,$password,$confirmPass)){
        exit( "<div class='alert alert-danger'>One OR more Request not found</div>");
    }
    else{
        if(empty($username)||empty($password)||empty($confirmPass)){
            exit( "<div class='alert alert-danger'>All field Required</div>");  
        }
        else{
            if($password != $confirmPass){
                exit( "<div class='alert alert-danger'>Password Not Match</div>");   
            }
            else{
                $sql = "Select * from Users Where UserName=?";
                $stmt= $conn->prepare($sql);
                $stmt->execute([$username]);
                $count=$stmt->rowCount();
                $users=$stmt->fetch();
                if($count>0){
                    exit( "<div class='alert alert-danger'>This User Found before</div>");
                    }
                else{
                    $sql = "INSERT INTO Users (UserName, Password, CPassword)
                    VALUES (?,?,?)";
                 $stmt= $conn->prepare($sql);
                 $stmt->execute( array($username,$password,$confirmPass)); 
                echo "<div class='alert alert-success'>New record created successfully</div>";
                header("Location:login.php");
                }


        
        }
        }
    }
}
}
?>

</body>
 