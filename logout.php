<!--The page confirming logout and clearing the session-->
<?php 
include 'header.php';
session_destroy();
header( "refresh:5; url=index.php" );
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <style></style>
        <link rel="stylesheet" href="style2.css" type="text/css">
    </head>
    <body>
        <main>
            <h1>You have sucessfully logged out</h1>
            <p>You will be redirected to the main page in 5 seconds</p>
            <p>If not <a id="redir" href="index.php">click here</a>
        </main>
    </body>
</html>
<?php include 'footer.php' ?>
