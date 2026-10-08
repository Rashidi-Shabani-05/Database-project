<?php
 include "process.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form for data submition</h2>
    <form action="process.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
        <br><br>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
        <br><br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age">
        <br><br>
        <input type="submit" name="submit" id="submit">
    </form>
    <hr>

    <h2>list of registered student</h2>
    <table border="2px">
        <thead>
            <tr>
                <td>S/N</td>
                <td>Frst Name</td>
                <td>Last Name</td>
                <td>Age</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <!-- foreach take arry of students to give details of each student -->
            <?php 
            $sn = 1;
            foreach($student as $student){?>
              <tr>
                <td> <?php echo $sn++; ?></td>
                <td> <?php echo $student ['firstName']; ?></td>
                <td> <?php echo $student ['lastName']; ?></td>
                <td> <?php echo $student ['age']; ?></td>
                <td><a href="view.php?id=<?php echo $student ['student_id']; ?>"><button>View</button></a>
                <a href="Edit.php?edit=<?php echo $student ['student_id']; ?>"><button>Edit</button></a>
                <a href="process.php?del=<?php echo $student ['student_id']; ?>"><button>Delete</button></a></td>
              </tr> 
            <?php } ?>
        </tbody>
    </table>
</body>
</html>