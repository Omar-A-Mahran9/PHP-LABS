<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
  <div class='container'> 
<div class='w-50 m-auto'>
<h1>User Registration Form</h1>
<p>please fill this form and submit to add user record to the database</p>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<div class="form-group">
<label>Name</label>
<br>
<input type="text" class="form-control" name="name">
</div>
<br>
<div class="form-group">
<label>Email</label>
<br>
<input type="email" class="form-control" name="email">
</div>
<br>
<label>Gender</label>
<br>
<div class="form-check">
<input type="radio" class="form-check-input" name='gender' value='F'><b>Female</b>
</div>
<br>
<div class="form-check">
<input type="radio" class="form-check-input" name='gender' value='M'><b>Male</b>
</div>
<br>
<div class="form-check">
<input type="checkbox" class="form-check-input" name="tru" value="Yes"><b> Recive E-mails from us.</b>
</div>
<br>
<input class="btn btn-primary" type="submit" name="submit" value='submit'>
<input class="btn btn-danger" type="reset" name="cancel"></input>
</form>
</div>
<?php

$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$check=$_POST['tru'];
$submit=$_POST['submit'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($submit)){

        if(!empty($name)&&!empty($email)&&!empty($gender)){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db='REGISTER';
        $conn = new mysqli($servername, $username, $password, $db);
        if ($conn->connect_error) {    
          }
          if(empty($check)){
            $sql = "INSERT INTO INFOREG (Name, Email, Gender) VALUES ('$name', '$email', '$gender')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                header("Location:lab4page1.php");
                exit();
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
          }
          else{
            $sql = "INSERT INTO INFOREG (Name, Email, Gender,mailStatue) VALUES ('$name', '$email', '$gender','$check')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                header("Location:lab4page1.php");
                exit();
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
          }
          $conn->close();


}
else{
    echo '<h4 style="color:red; text-align:center">fill all inputs field please</h4>';
}
}
}

?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</div>
</body>
</html>
