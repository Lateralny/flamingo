
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../public/css/style.css"/>
        <title> flamingo </title>
    </head>
    <body>
    <div class="container">
        <div class="logo">
            <img src="../public/img/logo.svg">
        </div>
        <form action="profile.php" method="post">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button action="profile.php" type="submit"> CONTINUE </button>
            <!--button> SIGN UP </button-->
            <button action="signup.php" method="post" type="submit"> SIGN UP </button>
            <?php
            include_once 'core/init.php';
            DB::getInstance();
            ?>
    </div>
    </body>
</html>