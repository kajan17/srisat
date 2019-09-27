<?php

include("database/db_conection.php");//make connection here
if(isset($_POST['update']))
{
    $username=$_POST['email'];
    $full_name=$_POST['fname']; //strlen($name);
    $ds_division=$_POST['dsdivision'];
    $gs_division=$_POST['gsdivision'];
    $vcnum=$_POST['vcno'];
    $vendor=$_POST['vendor'];
    $address=$_POST['address'];
    $contactno=$_POST['contact'];
    $status='1';
    

    if(strlen($vcnum) <> 11)  { 
             $_SESSION['username']=$username;
              echo"<script>alert('vc number must be 11 digits')</script>";
                   echo"<script>window.open('register1.php','_self')</script>";
            exit();

    }
    else{

              if(isset($_FILES['image'])){
                    $errors= array();
                    $file_name = $_FILES['image']['name'];
                    $file_size =$_FILES['image']['size'];
                    $file_tmp =$_FILES['image']['tmp_name'];
                    $file_type=$_FILES['image']['type'];
                    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
                    
                    $extensions= array("jpeg","jpg","png");
                    
                    if(in_array($file_ext,$extensions)=== false){
                       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                    }
                    
                    
                    
                    if(empty($errors)==true){
                      mkdir("images/$username");
                       move_uploaded_file($file_tmp,"images/$username/".$file_name);
                       echo "Success";
                    }else{
                       print_r($errors);
                    }
                 }




              $location="images/$username/".$_FILES["image"]["name"]."";
              $rand=rand();

              $check_username_query="select * from tvconnection WHERE nicnumber='$username'";
              $run_query1=mysqli_query($dbcon,$check_username_query);//check the user's record at database

              if(mysqli_num_rows($run_query1)>0)
               {

                    $insert_user="INSERT INTO customer(username,fullname,area,gsdivision,address,contactno,mobilenocode,mobileconfirmation) VALUES('$username','$full_name','$ds_division','$gs_division','$address','$contactno','$rand','1')";
                    mysqli_query($dbcon,$insert_user);
                }
                else{
                $insert_user="INSERT INTO customer(username,fullname,area,gsdivision,address,contactno,image,mobilenocode,mobileconfirmation) VALUES('$username','$full_name','$ds_division','$gs_division','$address','$contactno','$location','$rand','1')";
                mysqli_query($dbcon,$insert_user);

                }


                  $cus_ID="SELECT * FROM customer WHERE username='$username'";//select query for viewing users.
                  $run=mysqli_query($dbcon,$cus_ID);//here run the sql query.
                  $row=mysqli_fetch_array($run);
                  $customer_ID=$row['customerID'];

                       $check_carde_query="select * from carduser WHERE cardnumber='$vcnum'";
                        $run_query=mysqli_query($dbcon,$check_carde_query);

                      if(mysqli_num_rows($run_query)==0)
                          {

                           
                              if(mysqli_num_rows($run_query1)>0)
                              {
                                        $insert_card="INSERT INTO carduser(customerID,cardnumber,vender,activestatus) VALUES('$customer_ID','$vcnum','$vendor','1')";
                                        mysqli_query($dbcon,$insert_card);
                                        $_SESSION['register']=$full_name;
                                        $_SESSION['customerid']=$customer_ID;
                                        $_SESSION['mobilecheck']=$rand;
                                        //include('sendmessagemobilecheck.php');
                                        echo "<script>window.open('newusermobilnumbercheck.php?id=".$customer_ID."','_self')</script>";
                                        //echo "<script>window.open('index.php?id=".$customerid."',)</script>";
                              }

                            else{

                                    $check_carde_query="select * from carduser WHERE cardnumber='$vcnum'";
                                  $run_query=mysqli_query($dbcon,$check_carde_query);
                                  if(mysqli_num_rows($run_query)==0)
                                  {
                                            $insert_card="INSERT INTO carduser(customerID,cardnumber,vender) VALUES('$customer_ID','$vcnum','$vendor')";
                                            mysqli_query($dbcon,$insert_card);
                                            $_SESSION['register']=$full_name;
                                            $_SESSION['customerid']=$customer_ID;
                                            $_SESSION['mobilecheck']=$rand;
                                            //include('sendmessagemobilecheck.php');
                                            echo "<script>window.open('newusermobilnumbercheck.php?id=".$customer_ID."','_self')</script>";
                                            //echo "<script>window.open('index.php?id=".$customerid."',)</script>";



                                  }
                              }
                            }

       
        //echo "<script>window.open('adminapprovalwaitmessage.php','_self')</script>";
 //$_SESSION['waitforapproval']="Wait For User Approval";
    }
}



 ?>
