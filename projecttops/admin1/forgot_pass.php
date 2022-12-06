<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body style="text-align:center;">
    <h2>Forgot Password</h2><br>
    <form method="post">
        Email : <input type="text" name="email" placeholder="Enter Your mail id" value="<?php echo @$alldata->reg_email;?>"/><br><br>
        <input type="submit" name="submit" value="Submit" style="margin-left:50px;"/>
    </form><br>
</body>
</html>
<?php
include_once 'footer.php';
?>