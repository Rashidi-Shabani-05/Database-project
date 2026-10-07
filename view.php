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
    <?php foreach($my_data as $data){?>
    <h2>First Name: <?php echo $data['firstName']?></h2>
    <h2>Last Name: <?php echo $data['lastName']?></h2>
    <h2>Age: <?php echo $data['age']?></h2>
    <?php } ?>
    <a href="form.php"><button>Back</button></a>
</body>
</html>