
<html>
<body>

    <div class="container">
    <br>
        <div class="row mt-5">
            <div class="col-12">
            <h1 align="center">Ragistration Form</h1>
                <Form action="" method="post">
                    <table border="3" style="border:2px solid white" class="table">
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="Name" class="form-control" value="<?php echo $user_fetch->name;?>"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="email" name="Email" class="form-control" value="<?php echo $user_fetch->email;?>"></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="Password" class="form-control" value="<?php echo $user_fetch->pwd;?>"></td>
                        </tr>
                        <tr>
                            <td>Bio:</td>
                            <td><textarea name="bio" class="form-control"> <?php echo $user_fetch->bio ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><input type="radio" name="gender" value="male"
                            <?php
                                $g = $user_fetch->gender;
                                if($g == 'male')
                                {
                                    echo "Checked= 'checked'";
                                }
                            ?>
                            >Male
                                <input type="radio" name="gender" value="female"
                                <?php
                                $g = $user_fetch->gender;
                                if($g == 'female')
                                {
                                    echo "Checked= 'checked'";
                                }
                                ?>
                                >Female
                                <input type="radio" name="gender" value="other"
                                <?php
                                $g = $user_fetch->gender;
                                if($g == 'other')
                                {
                                    echo "Checked= 'checked'";
                                }
                                ?>
                                >Other
                            </td>
                        </tr>
                        <tr>
                            <td>Language:</td>
                            <td><input type="checkbox" name="lan[]" value="Gujrati"
                            <?php
                            $h = $user_fetch->lan;
                            $hh = explode(",",$h);
                            ?>
                            <?php
                            if(in_array("Gujrati",$hh))
                            {
                                echo "Checked= 'checked'";
                            }
                            ?>
                            >Gujrati
                                <input type="checkbox" name="lan[]" value="Hindi"
                                <?php
                                if(in_array("Hindi",$hh))
                                {
                                    echo "Checked= 'checked'";
                                }
                                ?>
                                >Hindi
                                <input type="checkbox" name="lan[]" value="English"
                                <?php
                                if(in_array("English",$hh))
                                {
                                    echo "Checked= 'checked'";
                                }
                                ?>
                                >English
                            </td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td><select name="Country" class="form-control">
                                <?php
                                foreach($data as $c)
                                {
                                    if($c->cid == $user_fetch->country)
                                    {
                                ?>
                                <option value="<?php echo $c->cid;?>" selected><?php echo $c->cname;?></option>
                                <?php
                                }
                                else{
                                ?>
                                <option value="<?php echo $c->cid;?>"><?php echo $c->cname;?></option>
                                <?php
                                }
                                }
                                ?>
                            </select></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><input type="submit" name="update" value="Update" class="btn btn-primary"></td>
                        </tr>
                    </table>
                </Form>
            </div>
        </div>
    </div>
</body>
</html>