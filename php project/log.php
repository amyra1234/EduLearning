<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "file";
$conn = mysqli_connect($severname, $username, $password, $dbname) ;
if (isset($_POST['submit'])) {
   
         if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
        

            $query = "insert into paper(username,password,email) values('$username' , '$password', '$email')" ;
            $run = mysqli_query($conn,$query) or die(mysqli_error());
            if ($run) {
               echo "Form submitted successfully" ;
            }
            else{
               echo "Form not submitted";
            }

     }
     else{
      echo "all fields required" ;
     }
}
?>