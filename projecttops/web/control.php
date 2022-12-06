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
        // echo $url;
        switch($url)
        {
            case '/index':
                include_once 'header.php';
                $data = $this->SelectAll("country");
                //insert data
                if(isset($_POST['submit']))
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
                                //   echo json_encode($data);exit;
                    $this->InsertData("register",$data);
                }
                include_once 'form.php';
                include_once 'footer.php';
                break;

                case '/login':
                    include_once 'header.php';
                    if(isset($_POST['login']))
                    {
                        $email = $_POST['Email'];
                        $pwd = $_POST['Password'];
                        $where = array('email'=>$email,'pwd'=>$pwd);
                        $odata = $this->Select_where('register',$where);
                        $alldata = $odata->fetch_object();
                        // echo $alldata->status;exit;
                        if($alldata->status == 'block')
                        {
                            echo "<script>alert('you are blocked');</script>";
                        }
                        else{

                        $where = array('email'=>$email, 'pwd'=>$pwd);
                        $fdata = $this->Select_where('register',$where);
                        $g = $fdata->num_rows;
                        if($g>0)
                        {
                            $e = $fdata->fetch_object();
                            $em = $e->email;
                            $_SESSION['user'] = $e->id;
                            $_SESSION['name'] = $e->name;

                            if(isset($_POST['remember']))
                            {
                                setcookie('email',$email,time()+3600);
                                setcookie('pwd',$pwd,time()+3600);
                            }
                            header('location:product');
                        }
                        else
                        {
                            echo "<script>alert('Invalid information');</script>";
                        }
                        }
                    }
                    include_once 'login.php';
                    include_once 'footer.php';
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
                           $odata = $this->Select_Where('register',$where);
   
                           $alldata = $odata->fetch_object();
                           echo $alldata->pwd;exit;
                           header('location:login');
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
                            $odata = $this->Select_Where('register',$where);
                           $alldata = $odata->fetch_object();
                            $this->UpdateData('register',$data,$where);
                        }
                        else
                        {
                           echo "<script>alert('Invalid Data');</script>";
                        }
                       include_once 'change_password.php';
                       
                       include_once 'footer.php';
                       break;


                        case '/product':
                            if(isset($_SESSION['name']) && ($_SESSION['user']))
                            {
                                include_once 'header.php';
                                $allpro = $this->SelectAll('product');
                                if(isset($_POST['addtocart']))
                                {
                                    $uid = $_SESSION['user'];
                                    $pid = $_POST['pid'];
                                    $qty = $_POST['qty'];

                                    $data = array('user_id'=>$uid, 'pro_id'=>$pid, 'qty'=>$qty);
                                    $pro_data = $this->InsertData('cart',$data);
                                    echo "<script>alert('Data added in cart successfully!');</script>";
                                }
                                include_once 'product.php';
                                include_once 'footer.php';
                            }
                            else{
                                header('location:login');
                            }
                            break; 



                        case '/logout':
                            session_destroy();
                            header('location:login');
                            break;

                            


                            case '/showcart':
                                    include_once 'header.php';
                                    $cart = $this->Join_two('cart','product','cart.pro_id=product.pro_id');
                                    include_once 'showcart.php';
                                    include_once 'footer.php';
                                
                                break; 

                                case '/paytm-payment':
                                    include_once 'header.php';
                                    $paytm = $this->Join_two('cart','product','cart.pro_id=product.pro_id');
                                    include_once 'paytm-payment.php';
                                    include_once 'footer.php';
                                
                                break; 



                                case '/contact':
                                    include_once 'header.php';
                                    // $data = $this->SelectAll("country");
                                    //insert data
                                    if(isset($_POST['submit']))
                                    {
                                        $name = $_POST['Name'];
                                        $pno = $_POST['Pno'];
                                        $email = $_POST['Email'];
                                        $msg = $_POST['Massage'];
                    
                                        $data = array('Name'=>$name,
                                                      'pno'=>$pno,
                                                      'email'=>$email,
                                                      'msg'=>$msg);
                                                    //   print_r($data);exit;
                                        $this->InsertData("contact",$data);
                                    }
                                    include_once 'contact.php';
                                    include_once 'footer.php';
                                    break;
        }
    } 
}
$obj = new Mycontrol;
ob_flush();
?>