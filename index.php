<?php
$insert=false;



if (isset($_POST['name'])) {
 // if($_SERVER['REQUEST_METHOD']='post'){
  

    /// collect post varibles

    $name=$_POST['name'];
 $age=$_POST['age'];
 $gender=$_POST['gender'];
 $class=$_POST['class'];
 $email=$_POST['email'];
 $desc=$_POST['desc'];
 $phone=$_POST['phone'];

  

///// set connection varible

$SERVER="localhost";
$username="root";
  $password="";
 // $database="trip_puri"
//create a database connectio
  $con =mysqli_connect($SERVER,$username,$password);
/// check  for connectio success
  if(!$con){
      die("connection to this datasbase failed due to  ".mysqli_connect_error());


  }
//   echo "success  connectio to the db"

 /// collect post varibles

 $name=$_POST['name'];
 $age=$_POST['age'];
 $gender=$_POST['gender'];
 $class=$_POST['class'];
 $email=$_POST['email'];
 $desc=$_POST['desc'];
 $phone=$_POST['phone'];




 $sql="INSERT INTO `trip_puri`.`prui` ( `name`, `age`, `Gender`, `class`, `email`, `phone`, `other`, `dd`) VALUES
  ( '$name', '$age', '$gender', '$class', '$email', '$phone', '$desc',current_timestamp())";

// echo $sql;
// execute the query   
if($con->query($sql) == true) {
  // echo "successfully inserted";
  $insert =true;

}
else{
  echo "ERROR : $sql <br> $con->error";
  
}
$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="WhatsApp Image 2021-12-18 at 12.49.12 (1).jpeg" alt="GITA BBSR">
   <div class="container">


    <h2>Welcome to  GITA BBSR PURI Trip  Form</h2>
    <p>enter you deatils   and submited this form to comfirm  participation in the trip</p>
    <?php
    if($insert==true){

     echo"  <p class='sky'>Thanks for submitting your form.We are happy to see you joining us for the Puri Trip</p>";
    }
?>
   <form action="index.php" method="post">
   <input type="text" name="name" id="name" placeholder="Enter your name">
   <input type="text" name="age" id="age "  placeholder="Enter your Age" >

   <input type="gender" name="gender" id="gender"  placeholder="Enter your Gender">
   <input type="text" name="class" id=" class"  placeholder="Enter your class" >
<input type="email" name="email" id="email" placeholder="enter your email"  >

 <input type="phone" name="phone" id= "phone" placeholder="enter your phone number">

<textarea name="desc" id="desc " cols=" 30" rows="10" placeholder="enter your required imformation here"></textarea>
<button class="btn">submit</button>


   </form>






   </div> 
   <script src="index.js"></script>

</body>
</html>