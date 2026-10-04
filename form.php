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
    <table>
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
            <?php foreach($student as $student){?>
              <tr>
                <td> <?php echo $student ['student_id']; ?></td>
                <td> <?php echo $student ['firstName']; ?></td>
                <td> <?php echo $student ['lastName']; ?></td>
                <td> <?php echo $student ['age']; ?></td>
                <td><button>View</button><button>Edit</button><button>Delete</button></td>
              </tr> 
            <?php } ?>
        </tbody>
    </table>
</body>
</html>