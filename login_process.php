<?php 
require_once("database.php"); 
if(isset($_POST['sublogin'])){ 
$login = $_POST['login_var'];
$password = $_POST['password'];
$user_type = $_POST['user'];
$query = "select * from user where ( username='$login' OR email = '$login')";
$res = mysqli_query($dbc,$query);
$numRows = mysqli_num_rows($res);
if($numRows  == 1){
        $row = mysqli_fetch_assoc($res);
        if(password_verify($password,$row['password'])){
            $_SESSION["login_sess"]="1"; 
            $_SESSION["login_email"]= $row['email'];
            $_SESSION["user_type"]= $row['user_type'];
            header("location:http://localhost/dropdownTab/pravGit/dbms/index.php");
        }
        else{ 
     header("location:pages-login.php?loginerror=".$login);
        }
    }
    else{
  header("location:pages-login.php?loginerror=".$login);
    }
}
?>