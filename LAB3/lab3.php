<h1>Application name :AAST_BIS class registration </h1>
<?php
$name=$_POST['name'];
$Email=$_POST['Email'];
$GROUP=$_POST['group'];
$class_details=$_POST['details'];
$Gender=$_POST['gender'];
$agree=$_POST['done'];
$courses=$_POST['Courses'];
$submit=$_POST['submit'];
?>
<?php
    if(empty($name) || empty($Email) || empty($Gender) || empty($agree)){
        echo '<p style="color:red">ALL * Required field</p>';
    }
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

    <?php
    if(empty($name)){
        echo'<label>Name: <span style="color:red">*</span> </label> ';
    }
    else{
        echo'<label>Name: </label> ';
    }
    ?>
    <input type="text" name="name"  value="<?php echo $name ?>" ></input> <?php
    if(isset($submit)){
        if(empty($name)){
            echo '<span style="color:red">* Name is required</span>';
        }
    }
    ?>
    
    <br>
    <?php
    if(empty($Email)){
        echo'<label>Email: <span style="color:red">*</span> </label> ';
    }
    else{
        echo'<label>Email:</label> ';
    }
    ?>
    
    <input type="Email" name="Email" value="<?php echo $Email ?>"></input><?php
        if(isset($submit)){
        if(empty($Email)){
            echo '<span style="color:red">* Email is required</span>';
        }
    }?>
    <br>
    <label>Group:</label>
    <input type="text" name="group" value="<?php echo $GROUP ?>"></input>
    <br>
    <label>class details:</label>
    <textarea name="details" > <?php echo $class_details ?></textarea>
    <br>

<?php
    if(empty($Gender)){
        echo'<label>Gender:- <span style="color:red">*</span> </label> ';
    }
    else{
        echo'<label>Gender:-</label> ';
    }
    ?>
<label>Female</label>
<input type="radio" id="female" name="gender" value="Female" <?php if($Gender=='Female'){echo 'checked';}?>>
<label>Male</label>
<input type="radio" id="male" name="gender" value="Male" <?php if($Gender=='Male'){echo 'checked';}?>> 
<?php
        if(isset($submit)){
        if(empty($Gender)){
            echo '<span style="color:red">* Gender is required</span>';
        }
    }?>
<br>

    <label>select Courses</label>
    <select name='Courses[]' size='3' multiple='multiple' >
        <option value="php" <?php foreach($courses as $co){if($co=='php'){echo 'selected';}}?> >PHP</option>
        <option value="javascript" <?php foreach($courses as $co){if($co=='javascript'){echo 'selected';}}?>>JAVASCRIPT</option>
        <option value="MySQL" <?php foreach($courses as $co){if($co=='MySQL'){echo 'selected';}}?>>MySQL</option>
        <option value="HTML" <?php foreach($courses as $co){if($co=='HTML'){echo 'selected';}}?>>HTML</option>
    </select>
    <br>
    
    <?php
    if(empty($agree)){
        echo'<label>Agree:-<span style="color:red">*</span> </label> '; 
    }
    else{
        echo'<label>Agree:-</label>';
    }
    ?>
    <input type="checkbox" name="done"> <?php
        if(isset($submit)){
        if(empty($agree)){
            echo '<span style="color:red">* You must agree to terms is required</span>';
        }
    }?>
    <br>
    <button type='submit' name="submit">Submit</button>
</form>



<?php
if(isset($submit)){
if(!empty($name) && !empty($Email) && !empty($Gender) && !empty($agree)){
   echo '<hr>';
if(!is_numeric($name)){
echo 'name : '.$name."<br>";
}
else{
    echo 'name : '. '<b style="color:red">must be STRING Only</b>'."<br>";
}
echo 'Email : '.$Email."<br>";
echo 'Group : '.$GROUP."<br>";
echo 'class_details : '.$class_details."<br>";
echo 'Gender : '.$Gender."<br>";
echo 'agree : '.$agree."<br>";
echo 'courses : ';
foreach($courses as $coo){ echo $coo." ";}
}
}
?>

