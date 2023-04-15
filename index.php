<?php 
include 'header.php';
if(count($_POST) > 0) {
    if($_POST['firstname'] == "") {
        $fnameError = "error";
    }
    if($_POST['lastname'] == "") {
        $lnameError = "error";
    }
    if(!isset($fnameError) && !isset($lnameError)) {
        $_SESSION['userInfo'] = $_POST;
        header("Location: rolelookup.php");
    }
}
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

            <form class="input" method="post" action="index.php">
                <select name="prefix">
                    <option>Mr.</option>
                    <option>Mrs.</option>
                </select>
                <label for="firstname">First Name:</label>
                <input type="text" class="<?=$fnameError?>" id="firstname" name="firstname"/>
                <label for="lastname">Last Name:</label>
                <input type="text" class="<?=$lnameError?>" id="lastname" name="lastname"/>
                <select name="job">
                    <option>Admin</option>
                    <option>Manager</option>
                    <option>CEO</option>
                </select>
                <input class="button" type="submit"/>
            </form>
        </main>
    </body>
</html>
<?php include 'footer.php' ?>