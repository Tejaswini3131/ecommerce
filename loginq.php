<?php

include ('config.php');

if (isset($_POST['register'])) {

  $f_name=$_POST['fname'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $cpass=$_POST['cpass'];
     
  $duplicate="SELECT * FROM admin WHERE email = :email";
  $stmt = $conn->prepare($duplicate); 
  $stmt->execute(['email' =>$email]); 
  $user = $stmt->fetch();
   if($user){?>

     <script>
        alert("EmailId and Username already existed");
          window.open('index','_self');
        </script>
<?php
   }

  elseif ($pass==$cpass) {
    
    	$query="INSERT INTO admin(f_name,email,pass) VALUES ('$f_name','$email','$pass')";
       
        $result = mysqli_query($connect, $query);
        ?>
        <script>
        alert("Successfully Registered");
          window.open('index','_self');
        </script>
    <?php
    
        
 }
 else{
  ?>
        <script>
        alert("Password not match");
          window.open('register','_self');
        </script>
    <?php
 }
   } 
 


?>