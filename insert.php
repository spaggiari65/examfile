<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body >
    <h1>
        <?PHP 
            echo "Hello World!";
        ?>
    </h1>
    <form action="create.php" method="POST">
    
        <label for="user_id">USER_ID</label>
        <input type="text" name="user_id" id="userid"><br>

        <label for="activities">Activities</label>
        <input type="text" name="activity" id="activities"><br>

        <label for="activity_status">Activity Status</label>
        <input type="text" name="activity_status" id="status"> <br>

        <button type="submit" id="submit" name="submit">ADD</button>
    </form>
</body>
</html>