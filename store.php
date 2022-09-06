<?php

//START:Added By- Rahul Kumar Kusvaha on 6-Sep-2022 for Code for storing user's data in database
if(isset($_POST['uname']) && isset($_POST['uemail']) && isset($_POST['upassword']))
{
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $password = $_POST['upassword'];
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);

    //START:Added By- Rahul Kumar Kusvaha on 6-Sep-2022 for database connection

    $host='localhost';
    $dbname='test';
    $username='root';
    $password='';

    try
    {
        $db = mysqli_connect($host,$username,$password);
        if ($db)
        {
            mysqli_select_db($db,$dbname) or die(mysqli_error());
        }
        else
        {
            throw new Exception('Unable to connect with database server, please try again later');
        }
    }
    catch(Exception $e)
    {
        die($e->getMessage());
    }
    //END:Added By- Rahul Kumar Kusvaha on 6-Sep-2022 for database connection

    if($db)
    {
        try
        {
            $str="insert into users(fullname,  emailid, password)
            values('".$name."','".$email."','".$passwordhash."')";
            
            if(mysqli_query($db,$str))
            {
                echo "<span style='color:green;font-weight: 800;'>Registration done successfully</span>";
            }
            else
            {
                throw new Exception(mysqli_error($db)); 
            }
        }

        catch(Exception $e)
        {
            $error = $e->getMessage();
            $eCode = $e->getCode();

            //echo "<span style='color:red;font-weight: 800;'>There is an error '".$error."' with error code ".$eCode."</span>";
            if($eCode==1062)
                echo "<span style='color:red;font-weight: 800;'>Email Id is already registered</span>";
        }
        finally{
            mysqli_close($db);
        }
    }
}

//END:Added By- Rahul Kumar Kusvaha on 6-Sep-2022 for Code for storing user's data in database
?>