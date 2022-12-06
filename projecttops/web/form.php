
<html>
<body>

    <div class="container">
    <br><br><br><br><br><br><br><br>
        <div class="row mt-5">
            <div class="col-12">
            <h1 align="center">Ragistration Form</h1>
                <Form action="" method="post">
                    <table border="3" class="table">
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="Name" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="email" name="Email" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="Password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Bio:</td>
                            <td><textarea name="bio" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><input type="radio" name="gender" value="male">Male
                                <input type="radio" name="gender" value="female">Female
                            </td>
                        </tr>
                        <tr>
                            <td>Language:</td>
                            <td><input type="checkbox" name="lan[]" value="Gujrati">Gujrati
                                <input type="checkbox" name="lan[]" value="Hindi">Hindi
                                <input type="checkbox" name="lan[]" value="English">English
                            </td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td><select name="Country" class="form-control">
                                <?php
                                foreach($data as $c)
                                {
                                ?>
                                <option value="<?php echo $c->cid;?>"><?php echo $c->cname;?></option>
                                <?php
                                }
                                ?>
                            </select></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><input type="submit" name="submit" value="Register" class="btn btn-primary">
                            <input type="reset" name="reset" value="Reset" class="btn btn-primary"></td>
                        </tr>
                    </table>
                </Form>
            </div>
        </div>
    </div>
</body>
</html>