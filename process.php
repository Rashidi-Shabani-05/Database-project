<?php
   
   include "connection.php";

   if(isset ($_POST['submit'])){
      $fname = $_POST['first_name'];
      $lname = $_POST['last_name'];
      $age = $_POST['age'];
      //query to insert into database
      $data = "INSERT INTO student(firstName, lastName, age) 
               VALUES('$fname', '$lname', $age)";
      //execute query
      mysqli_query($conn, $data);
      header("location:form.php");
   }
   //take all student detail from the database table(student) 
   $datas = "SELECT *FROM student";
   $student = mysqli_query($conn, $datas);