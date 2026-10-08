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

   //edit data
   if(isset($_GET['edit'])){
      $ed = $_GET['edit'];
      $edit_data = "SELECT *FROM student WHERE student_id=$ed";
      $my_edit_data = mysqli_query($conn, $edit_data);
   }
   if(isset($_POST['update']) && isset($_GET['up'])){
      $Fname = $_POST['first_name'];
      $Lname = $_POST['last_name'];
      $age1 = $_POST['age'];
      $ed = $_GET['up'];
      $update = "UPDATE student SET firstName='$Fname', lastName='$Lname', age=$age1 WHERE student_id=$ed";
      mysqli_query($conn, $update);
      header("location:form.php");
   }

   //delete specific data from database
    if(isset($_GET['del'])){
      $delete = $_GET['del'];
      $my_delete = "DELETE FROM student WHERE student_id = $delete";
      mysqli_query($conn, $my_delete);
      header("location:form.php");
    }