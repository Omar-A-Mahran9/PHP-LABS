<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "GET"){
  if(isset($_GET['iid'])){
$id=$_GET['iid'];
$servername = "localhost";
$username = "root";
$password = "";
$db='REGISTER';
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {    
  }
  $sql="SELECT * FROM INFOREG WHERE id=$id";
    $result= $conn->query($sql);
    $row=$result->fetch_assoc();
    $conn->close();
    
    ?>
    <div class='container'> 
<div class='w-50 m-auto'>
<h1>User Update Form</h1>
<p>please <b>Edit<b> this form and submit to add user record to the database</p>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<div class="form-group">
<label>Name</label>
<br>
<input type="text" class="form-control" name="name" value='<?php echo $row['Name'];?>'>
</div>
<br>
<div class="form-group">
<label>Email</label>
<br>
<input type="email" class="form-control" name="email" value='<?php echo $row['Email'];?>'>
</div>
<br>
<label>Gender</label>
<br>
<div class="form-check">
<input type="radio" class="form-check-input" name='gender' value='F' <?php if($row['Gender']== 'F'){echo 'checked';}?>><b>Female</b>
</div>
<br>
<div class="form-check">
<input type="radio" class="form-check-input" name='gender' value='M' selected <?php if($row['Gender']== 'M'){echo 'checked';}?>><b>Male</b>
</div>
<br>
<div class="form-check">
<input type="checkbox" class="form-check-input" name="tru" value="Yes" <?php if($row['mailStatue']== 'Yes'){echo 'checked';}?>><b> Recive E-mails from us.</b>
</div>
<br>
<input class="btn btn-primary" type="submit" name="update" value='Update'>
<input class="btn btn-danger" type="reset" name="cancel"></input>
</form>
    <?php
  }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $emaill=$_POST['tru'];
    $id=$_GET['iid'];
    
    /*---------------------*/
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db='REGISTER';
    $conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {    
}

$sql="UPDATE `INFOREG` SET `Name`='$name',`Email`='$email',`Gender`='$gender',`mailStatue`='$emaill' WHERE `id`=$id";

if ($conn->query($sql) === TRUE) {
  echo "<div class='alert alert-success'>Record updated successfully</div>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

  }
  header("Location: lab4page1.php");
  exit();
  }
?>
</body>
</html>