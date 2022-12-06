<?php
ob_start();
include_once 'Model.php';

class Mycontrol extends Model
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        $url = $_SERVER['PATH_INFO'];
        $data = $this->SelectAll("country");
        //  echo $url;
        switch($url)
        {
            case '/index':
                if(isset($_POST['login']))
                    {
                        $email = $_POST['Email'];
                        $pwd = $_POST['Password'];

                        $where = array('email'=>$email, 'pwd'=>$pwd);
                        $fdata = $this->Select_where('admin',$where);
                        $g = $fdata->num_rows;
                        if($g>0)
                        {
                            $e = $fdata->fetch_object();
                            $em = $e->email;
                            $_SESSION['user'] = $e->aid;
                            $_SESSION['name'] = $e->email;
                            echo "<script>alert('Login Success');</script>";
                            header('location:AllUsers');
                        }
                        else
                        {
                            echo "<script>alert('Invalid information');</script>";
                        }
                    }
                include_once 'index.php';
                break;


                case '/contact':
                    include_once 'header.php';
                    $user1 = $this->SelectAll('contact');
                    include_once 'contact.php';
                    include_once 'footer.php';
                    break;
                
                case '/AllUsers':
                    if(isset($_SESSION['name']) && ($_SESSION['user']))
                   { 
                    include_once 'header.php';
                    $user = $this->SelectAll('register');
                    include_once 'users.php';
                    include_once 'footer.php';
                    }
                    else
                    {
                        header('location:index');
                    }
                    break;


                    case '/logout':
                        session_destroy();
                        header('location:index');
                        break;

                    case '/delete_user':
                        include_once 'header.php';
                        if(isset($_GET['did']))
                        {
                            $did = $_GET['did'];
                            $where = array('id'=>$did);
                            $this->Delete_Data('register',$where);
                            header('location:AllUsers');
                        }
                        include_once 'footer.php';
                        break;

                    
                    case '/edit_user':
                        include_once 'header.php';
                        if(isset($_GET['eid']))
                        {
                            $eid = $_GET['eid'];
                            $where = array('id'=>$eid);
                            $user_data = $this->Select_where('register',$where);
                            $user_fetch = $user_data->fetch_object();


                            //update
                            if(isset($_POST['update']))
                            {
                                $name = $_POST['Name'];
                                $email = $_POST['Email'];
                                $pwd = $_POST['Password'];
                                $bio = $_POST['bio'];
                                $gen = $_POST['gender'];
                                $lan = $_POST['lan'];
                                $l = implode(",",$lan);
                                $country = $_POST['Country'];

                                $data = array('name'=>$name,
                                            'email'=>$email,
                                            'pwd'=>$pwd,
                                            'bio'=>$bio,
                                            'gender'=>$gen,
                                            'lan'=>$l,
                                            'country'=>$country);
                            $this->UpdateData('register',$data,$where);
                            header('location:AllUsers');
                            }
                        }
                        include_once 'edit_user.php';
                        include_once 'footer.php';
                        break;


                        case '/Add_category':
                            include_once 'header.php';
                            if(isset($_POST['submit']))
                            {
                                $cat = $_POST['cat'];
                                $data = array('cat_name'=>$cat);
                                $this->InsertData('category',$data);
                                echo "<script>alert('Data inserted');</script>";
                            }
                            include_once 'category.php';
                            include_once 'footer.php';
                        break;
                            
                            case '/Add_product':
                                include_once 'header.php';
                                $all_cat = $this->SelectAll('category');
                                if(isset($_POST['submit']))
                                {
                                    $cat = $_POST['cat'];
                                    $pro_img = $_FILES['file']['name'];
                                    $pro_name = $_POST['pro_name'];
                                    $pro_price = $_POST['pro_price'];
                                    $pro_desc = $_POST['pro_desc'];

                                    $data = array('cat_id'=>$cat,
                                                  'pro_img'=>$pro_img,
                                                  'pro_name'=>$pro_name,  
                                                  'pro_price'=>$pro_price,
                                                  'pro_desc'=>$pro_desc);
                                                  move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']);
                                    $this->InsertData('product',$data);
                                    echo "<script>alert('Data inserted');</script>";
                                }
                                include_once 'product.php';
                                include_once 'footer.php';
                            break;

                            //block//unblock
                            case '/status':
                                if(isset($_GET['sid']) && ($_GET['sta']))
                                {
                                    $sid = $_GET['sid'];
                                    $sta = $_GET['sta'];
                                    $where = array('id'=>$sid);
                                    $data = array('status'=>'block');
                                    $data1 = array('status'=>'unblock');

                                    if($sta == "unblock")
                                    {
                                        $this->UpdateData('register',$data,$where);
                                        header('location:AllUsers');
                                    }
                                    else
                                    {
                                        $this->UpdateData('register',$data1,$where);
                                        header('location:AllUsers');
                                    }
                                }
                                break;

                                case '/forgot':
                                    include_once 'header.php';
                                    if(isset($_POST['submit']))
                                   {
                                       $email = $_POST['email'];
                                    //    $password = $_GET['password'];
                                    //    echo $password; 
                                       $where = array('email'=>$email);
                                    //    print_r($where);
                                       //$where = array('reg_password'=>$password);
                                       $odata = $this->Select_Where('admin',$where);
               
                                       $alldata = $odata->fetch_object();
                                       echo $alldata->pwd;exit;
                                       header('location:index');
                                    }
                                    else
                                    {
                                       echo "<script>alert('Invalid Data');</script>";
                                    }
                                   include_once 'forgot_pass.php';
                                   include_once 'footer.php';
                                   break;


                                   case '/change':
                                    include_once 'header.php';
                                    if(isset($_POST['submit']))
                                   {
                                       $email = $_POST['email'];
                                        $old = $_POST['pass'];
                                        $new = $_POST['pass1'];
                                        $data = array('pwd'=>$new);
                                        $where = array('email'=>$email , 'pwd'=>$old);
                                        $odata = $this->Select_Where('admin',$where);
                                       $alldata = $odata->fetch_object();
                                        $this->UpdateData('admin',$data,$where);
                                    }
                                    else
                                    {
                                       echo "<script>alert('Invalid Data');</script>";
                                    }
                                   include_once 'change_pass.php';
                                   include_once 'footer.php';
                                   break;
                                
            
        }
    } 
}
$obj = new Mycontrol;
ob_flush();
?>