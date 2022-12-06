<?php
if(isset($_COOKIE['email']['pwd']))
{
    $email = $_COOKIE['email'];
    $pwd = $_COOKIE['pwd'];
}
else
{
    $email = "";
    $pwd = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
    <div class="container">
        <br><br><br><br><br><br><br><br>
            <div class="row mt-5">
                <div class="col-12">
                <h1 align="center">Login</h1>
                    <Form action="" method="post">
                        <table border="3" class="table">
                            <tr>
                                <td>Email:</td>
                                <td><input type="email" name="Email" class="form-control" value="<?php echo @$_COOKIE['email'];?>"></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="Password" class="form-control" value="<?php echo @$_COOKIE['pwd'];?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><input type="checkbox" name="remember" value="remember">Remember</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><a href="change">Change Password</a><br><a href="forgot">Forgot Password</a></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2"><input type="submit" name="login" value="login" class="btn btn-primary">
                            </tr>
                        </table>
                    </Form>
                </div>
            </div>
    </div>
</body>
</html>