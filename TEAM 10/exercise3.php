<html>
<body>
<?php

#TASK 1
echo "TASK 1 <br>";
$a = date("F");
if ($a == "August") {
    echo "<br>"."so it's still holiday.";
} else {
    echo "<br>"."This is $a so i don't have any holidays. <br>";
}

#TASK 2
echo "<br>"."TASK 2 <br>";
$color = "red";
if ($color == "red") {
    echo "<br>"."The color is red.<br>";
} else {
   echo "<br>"." The color is not red. <br>";
}

#TASK 3
echo "<br>"."TASK 3 <br>";
$student_grade = 30;
if ($student_grade > 80) {

  echo "<br>"."Excellent";
}
elseif ($student_grade >70 && $student_grade<80) {
    echo "<br>"."Great";
}
elseif ($student_grade >60 && $student_grade<70) {
    echo "<br>"."Good";
}
elseif ($student_grade >50 && $student_grade<60) {
    echo "<br>"."Pass";
}
elseif ($student_grade <50) {
    echo "<br>"."Fail";
}

#TASK 4
echo "<br>"."<br>"."TASK 4 <br> <br>";
echo "Enter your Name and Age to check the eligiblity: <br>";
?>

  <form action="exercise3.php" method="get">
   Name: <input type="text" name="name"><br>
   Age:   <input type="number" name="age"><br>
         <input type="submit">
   </form>

   <?php
   $name = $_GET["name"];
   $age = $_GET["age"];
   if ($age >= 18) {
      echo "you are eligible for voting.";
   }
   else {
    echo "you are NOT eligible for voting.";
   } 

#TASK 5
echo "<br>"."<br>"."TASK 5 <br> <br>";

for ($i=8; $i >=1 ; $i--) { 

    for ($j=1; $j <= $i ; $j++) { 
        echo $j;
        
    }
    echo "<br>";
}

#TASK 6
echo "<br>"."TASK 6 <br> <br>";

for ($i=1; $i <= 8 ; $i++) { 

    for ($j=1; $j <= $i ; $j++) { 

        echo "*";
        
    }
    echo "<br>";
}

   ?>
   
 </body>
</html>



 





