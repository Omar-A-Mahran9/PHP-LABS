<?php
//Q1:Show your phpinfo on browser.
//echo phpinfo();


//Q2:Use constant to display your website name which mustn’t change across your pages.

/*define('WEBSITE_NAME',"PHP_ITI");
$webTitle=WEBSITE_NAME;
echo "<title>$webTitle</title>";
*/



//Q#: Show your server name, address, port,filename and path of the currently executing script.

 /*
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo __FILE__;
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

*/
//Q4:Display the output of for,while,do while and foreach fn code from demo file   

/*
$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
   $a += 10;
   $b += 5;
}
echo "a= $a and b= $b";

echo "<br>";

$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}
echo "i= $i and num= $num";
echo "<br>";

$i2 = 0;
         $num2 = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
echo "i= $i1 and num= $num2";

echo "<br>";

$arr = array( 1, 2, 3, 4, 5);
         
foreach( $arr as $value ) {
   echo "Value is $value <br />";
}
*/

/*Q5: Your brother is 10 years old, If you know that :
    age less than 5 --> Print Msg --> Stay at home,
    age equal 5 --> Print Msg --> Go to Kindergarden,
    age between 6 & 12 --> Print Msg --> Go to grade :XXX
    (Use switch case).
    */

/*
$age=10;
switch($age){
    case $age<5:
        echo "Stay At Home";
        break;
     case $age==5:
        echo "GO TO KINDERGARDEN";
    case $age>=6 && $age<=12:
        echo "GO TO grade 2";
}
?>
*/