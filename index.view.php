<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
</head>
<body>
<ul>
    
    <?php
    require 'index.php';
   
    foreach ($person as $key => $val){
        echo "<li>$key: $val</li>";
    }
    ?>
</ul>

    
</body>
</html>