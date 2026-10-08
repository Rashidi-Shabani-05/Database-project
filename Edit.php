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
        <h2>Form for data edit</h2>
        <?php foreach($my_edit_data as $data) { ?>
    <form action="process.php?up=<?php echo $data['student_id']; ?>" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName" value="<?php echo $data['firstName'] ?>">
        <br><br>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName" value="<?php echo $data['lastName'] ?>">
        <br><br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" value="<?php echo $data['age'] ?>">
        <br><br>
        <input type="submit" name="update" id="update" value="update">
    </form>
    <?php } ?>
</body>
</html>