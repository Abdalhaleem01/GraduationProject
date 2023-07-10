<?php
session_start();
if(
isset($_POST['email'])&&
isset($_POST['pass'])){
    include "../dbconnect.php";

$email = $_POST['email'];
$password = $_POST['pass'];

$data="email=".$email;


 if(empty($email)){
    $em="Email is required";
    header("Location:../login.php?error=$em&$data");
    exit;
}
else if(empty($password)){
    $em="Password is required";
    header("Location:../login.php?error=$em&$data");
    exit;
}else{

    $sql="SELECT * FROM citizen WHERE C_email= ?";
 
    $stmt=$conn->prepare($sql);
    $stmt->execute([$email]);

    if($stmt->rowCount()==1){
        $user=$stmt->fetch();
        $emailAddress=$user['C_email'];
        $passwordA=$user['C_Password'];
        $Firstname=$user['C_Fname'];
        $Lastname=$user['C_Lname'];
        $id=$user['C_ID'];

        if($emailAddress === $email){
     if(password_verify($password,$passwordA)){
        $_SESSION['C_ID'] = $id;
        $_SESSION['C_email'] = $email;
        $_SESSION['C_Fname'] = $Firstname;
        $_SESSION['C_Lname'] = $Lastname;



        header("Location: ../home.php");
        exit;
}

        else{
            $em="Incorect User name or password";
            header("Location:../login.php?error=$em&$data");
            exit;
        
    }
 } else{
            $em="Incorect User name or password";
            header("Location:../login.php?error=$em&$data");
            exit;
        
    }

 
}
else{
        $em="Incorect User name or password";
        header("Location:../login.php?error=$em&$data");
        exit;
    }

}



}else{

 header("Location:../login.php?error=error");
   exit;

  
}


?>