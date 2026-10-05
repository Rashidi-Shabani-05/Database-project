<?php
   
   include "connection.php";

   if(isset ($_POST['submit'])){
      $fname = $_POST['first_name'];
      $lname = $_POST['last_name'];
      $age = $_POST['age'];
      //query to insert into database
      $form_data = "INSERT INTO student(firstName, lastName, age) 
               VALUES('$fname', '$lname', $age)";
      //execute query
      mysqli_query($conn, $form_data);
      header("location:form.php");
   }
   //take all student detail from the database table(student) 
   $datas = "SELECT *FROM student";
   $student = mysqli_query($conn, $datas);

   //view single data from the database
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      $single_data = "SELECT *FROM student WHERE student_id=$id";
      $my_data = mysqli_query($conn, $single_data);
   }