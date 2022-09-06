<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inpsire NCFE L3</title>
</head>

<body>
    <?php
            include("includes/header.php");
        ?>
    <h1>
        Contact Us below:
    </h1>
    <div class="text">
        <form action="demo.php" method="POST">
            <input type="text" name="username" value="" placeholder="User Name" />
            <input type="password" name="password" value="" placeholder="Password" />
            <input type="submit" name="action" value="Login" />
            <input type="submit" name="action" value="Register" />
        </form>
    </div>

</body>

</html>