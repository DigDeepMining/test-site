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
    <div class="text">
        <?php
            $correctPWord = "password123";

            $username = $_POST['username'];
            $password = $_POST['password'];
            $action = $_POST['action'];

            if(($action === "Login") && ($password === $correctPWord))
            {
                echo "<img class=\"Key\" src\"images/key.png\" alt=\"Key\" />
                <p>Welcome $username - enjoy your session</p>";
            }
            elseif(($action === "Register") && ($password === ""))
            {
                echo "<img class=\"Key\" src\"images/form.png\" alt=\"Key\" />
                <p>Thanks $username for registering!</p>";
            }
            else
            {
                echo "<p>Please try to enter your details again</p>";
            }
        ?>
        <div class="spacer"></div>
    </div>
</body>
</html>