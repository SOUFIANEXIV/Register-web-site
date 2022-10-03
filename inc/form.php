<?php 
session_start();

error_reporting(E_ERROR | E_PARSE);


$errors=[

    'firstnameError '=> '',

  'lastnameError' => '',

    'emailError'=>''

];


 if (isset($_POST['submit'])){

    $firstname=    $_POST['firstname'];
$lastname=   $_POST['lastname'];
$email=      $_POST['email'];
$Gender = $_POST['Gender'];




//echo $firstname .  ' '   .$lastname . ' '  . $email;

if (empty($firstname)){
    $errors['firstnameError']='please add the firstname';
   
 }


if (empty($lastname)){
    $errors['lastnameError']='please add the lastname';

    
}  

if (empty($email)){
    $errors['emailError']='please add the email';
    
 }  
 elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['emailError']='email not correct';
}
if(!empty($Gender))


if(!array_filter($errors)){



  $sql="SELECT *FROM users WHERE email='$email'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)){
echo '<script>alert("Already registred")</script>';
}else{


    
    $firstname=    mysqli_real_escape_string($connect,$_POST['firstname']);
    $lastname=   mysqli_real_escape_string($connect,$_POST['lastname']);
    $email=     mysqli_real_escape_string($connect, $_POST['email']);
    $Gender =  mysqli_real_escape_string($connect, $_POST['Gender']);

    $sql= "INSERT INTO users(firstname, lastname, email,Gender) VALUES('$firstname','$lastname','$email','$Gender')";
 
$result=mysqli_query($connect,$sql);
  if($result){
     echo '<script>alert("YOU ARE BEEN REGISTRED")</script>';
      header("location: ./index.php");
 
  }

}
}

}
