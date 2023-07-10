<?php

if(isset($_POST['firstname'])&&
isset($_POST['lastname'])&&
isset($_POST['email'])&&
isset($_POST['pass'])){
    include "../dbconnect.php";
    $firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['pass'];

$data="firstname".$firstname."&lastname=".$lastname."&email=".$email;

if(empty($firstname)){
    $em="Fisrt name is required";
    header("Location:../signup.php?error=$em&$data");
    exit;

}else if(empty($lastname)){
    $em="Last name is required";
    header("Location:../signup.php?error=$em&$data ");
    exit;
}
else if(empty($email)){
    $em="Email is required";
    header("Location:../signup.php?error=$em&$data ");
    exit;
}
else if(empty($password)){
    $em="Password is required";
    header("Location:../signup.php?error=$em&$data ");
    exit;
}else{
    //hashing the password
    $password=password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO citizen(C_Fname,C_Lname,C_email,C_Password)
    VALUES(?,?,?,?)";
 
    $stmt=$conn->prepare($sql);
    $stmt->execute([$firstname,$lastname,$email,$password]);

    
 header("Location:../signup.php?success=Your account has been created successfully");
 exit;

}

}else{

 header("Location:../signup.php?error");
   exit;

  
}


?>