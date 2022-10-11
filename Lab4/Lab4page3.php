<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>

<body>
 
    <?php
$id=$_GET['id'];
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
      <h1>View Record</h1>
      <br>
      <hr>
      <h5><b>name</b></h5>
      <p><?php echo $row['Name']?></p>

      <h5><b>Email</b></h5>
      <p><?php echo $row['Email']?></p>

      <h5><b>Gender</b></h5>
      <p><?php if($row['Gender']=='M'){echo 'Male';} else{echo 'Female';} ?></p>

      <p><?php if($row['mailStatue']=='Yes'){echo 'You Will Recive Email from us';}else{echo "You will <b>not</b> Recive Email from us";}?> </p>
    </div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>