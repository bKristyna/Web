<?php
   $conn= new mysqli ("localhost", "root", "root", "blog"); 
   
   $i = 0;
   $data = array();

   foreach ($_POST as $key => $value){
      $data[$i] = $value;
      $i++;
   }

   //kategorie
   if ($data [3]==1) {
      $data [3]= 1;
   }
   else if ($data [3]==2){
      $data [3] = 2;
   }
   else {
      $data [3]= 8;
   }

   $test = "INSERT INTO clanky(name,autor,text,kategory,date) VALUES('" . $data[0] . "', '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "')";

   mysqli_query($conn,$test);
   $conn->close();

   echo json_encode('works');
?>