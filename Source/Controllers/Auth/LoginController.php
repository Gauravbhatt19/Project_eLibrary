<?php
require '../connection.php';
 if(isset($_POST['loginid'])) {
 if(isset($_POST['password'])){
            $name=mysqli_escape_string($conn,$_POST['loginid']);
            $pass=mysqli_escape_string($conn,$_POST['password']);
            $qry="SELECT password FROM admins WHERE login_name='{$name}'";
            $result=mysqli_query($conn,$qry);
            if(isset($result)){
                $db_values=mysqli_fetch_assoc($result);
                $db_pass=$db_values['password'];
                if(password_verify($pass, $db_pass)){
                echo "ADMIN LOGGED IN !";
            }
            else{
                echo "<script type='text/javascript'>
                        window.setTimeout(function() { alert( 'Invalid Login ID or Password ! Try Again..!' ); window.location='/admin?q=admins';},0);</script>";
        }
            }}}
            elseif(isset($_POST['emailid'])) {
                 if(isset($_POST['password'])){
            $emailid=mysqli_escape_string($conn,$_POST['emailid']);
            $pass=mysqli_escape_string($conn,$_POST['password']);
            $qry="SELECT * FROM readers WHERE email='{$emailid}'";
            $result=mysqli_query($conn,$qry);
            if(isset($result)){
                $db_values=mysqli_fetch_assoc($result);
                $db_pass=$db_values['password'];
                if(password_verify($pass, $db_pass)){
                echo "READERS LOGGED IN !";
            }
            else{
                echo "<script type='text/javascript'>
                        window.setTimeout(function() { alert( 'Invalid Login ID or Password ! Try Again..!' ); window.location='/';},0);</script>";
        }
            }}
             } 

?>