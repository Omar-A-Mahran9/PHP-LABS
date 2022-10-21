<!DOCTYPE html>
<?php
include "config.php";
?>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>

<body>
    
    <div class='container'> 
    <div class='w-70 m-auto'>
    <div class="d-inline-flex mt-5 justify-content-between w-100">
    <h1>Users Details</h1>
    <a href="lab4page2.php" class="btn btn-success">Add New User</a>
    
    </div>
    <hr>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Mail Statue</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$db='REGISTER';
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {    
  }
  
  $sql = "SELECT * FROM INFOREG";

  $result = $conn->query($sql);
  

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<th scope='row'>".$row['id']."</th>";
      echo "<td>".$row['Name']."</td>";
      echo "<td>".$row['Email']."</td>";
      echo "<td>".$row['Gender']."</td>";
      echo "<td>".$row['mailStatue']."</td>";
      echo "<td class='d-flex gap-3' >
      <a class='btn btn-danger' type='button'  href=lab4page1.php?id=".$row['id'].">Delete</a>
      <a class='btn btn-primary' type='button' href=update.php?iid=".$row['id'].">Edit</a>
      <a class='btn btn-success' type='button' href=lab4page3.php?id=".$row['id'].">view</a></td>";
      echo "</tr>";
      //echo "id: " . $row["id"]. " - Name: " . $row["Name"]. " " . $row["Email"]. " ".$row["Gender"]." ".$row["mailStatue"]."<br>";
    }
  } else {
    echo "<h3><b>0 results of row</b></h3>";
  }
  $conn->close();
    ?>
        
        </tbody>
      </table>
</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
  if(isset($_GET['id'])){
$id=$_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$db='REGISTER';
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {    
  }
  $sql="DELETE FROM INFOREG WHERE id=$id";
  if ($conn->query($sql) === TRUE) {
    echo "<b class='alert alert-success'>Record deleted successfully</b>";
    header("Refresh:1; url=lab4page1.php");
    exit();
  } else {
    echo "Error deleting record: " . $conn->error;
  }
    $conn->close();
  }

}
?>



</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>