<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Get</title>
</head>
<body>
    <h2>Search Word</h2>
    <form action="" method="GET" >
        <label for="">find word</label><br>
        <input type="text" name="keyword" placeholder="computer..." require><br><br>
        <button type="submit"> Find</button>
        
    </form>

    <hr>

    <?php
    if(isset($_GET['keyword'])){
        $keyword = htmlspecialchars($_GET['keyword']);

        echo "<h3> Result from GET</h3>";
        echo "You are finding the word : <strong>" . $keyword . "</strong><br>";
    
    }
    ?>
</body>
</html>