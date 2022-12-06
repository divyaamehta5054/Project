<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body style="text-align:center;">
    <h2>Change Password</h2><br>
    <form method="post">
        <tr>
            <td>Email id:</td>
            <td><input type="email" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td>Old pass:</td>
            <td><input type="text" name="pass" class="form-control"></td>
        </tr>
        <tr>
            <td>New pass:</td>
            <td><input type="text" name="pass1" class="form-control"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Submit" style="margin-left:50px;"/></td>
        </tr>
        
    </form><br>
</body>
</html>
<?php
include_once 'footer.php';
?>