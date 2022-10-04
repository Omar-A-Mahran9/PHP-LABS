
<?php
//Q1:- Search for how to make \n work in browser
/*
echo nl2br("Hello \n Eng. Omar \r\n Welcome To ITI");
*/
//Q2:-Search for 3 built-in function of a string.
/*
$str="HELLO OMAR";
echo strlen($str).'</br>';
echo strrev($str).'</br>';
echo strpos($str,'OMAR');
*/



//Q3:- Write a PHP script to get the sum and avg of an indexed array
/*
$a = array(12,45,10,25);
$sum = array_sum($a);
echo "sum of Array =".$sum."</br>";
$Avg=$sum/count($a);
echo "Avg of Array =".$Avg."</br>";

echo'<h3>sort from highest to lowest</h3>';
rsort($a);
$clength = count($a);
for($x = 0; $x < $clength; $x++) {
  echo $a[$x];
  echo "<br>";
}
*/

//Q4:-  Write a PHP script to sort the following associative array :


/*
$script=array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40); 
//asort($script);//According to Value 
//ksort($script);//According to Key
arsort($script);//Descending Order- According to Value
//krsort($script)//Descending Order- According to Key


foreach($script as $i => $value) {
  echo "Key=" . $i . ", Value=" . $value;
  echo "<br>";
}
*/

//Q5:-Display the following array in an HTML table with Name, Email and Status table headers.
$students = [
    ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
    ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
    ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
];
echo "<table>
<tr>
  <th>Name</th>
  <th>Email</th>
  <th>Statue</th>
</tr>
";

foreach($students as $x => $value) {
   echo "<tr>";
    foreach($students[$x] as $i => $value) {
    //echo "Key=" . $i . ", Value=" . $x_value;
    if($i==='status'){
      echo "<td style='color:red'>".$value."</td>";
    }
    echo "<td>".$value."</td>";
    }
    echo "</tr>";
  }
  
  



?>