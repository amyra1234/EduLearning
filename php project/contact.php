<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "contact";
$conn = mysqli_connect($severname, $username, $password, $dbname) ;
if (isset($_POST['submit'])) {
    
         if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['doubt'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $doubt = $_POST['doubt'];

            $query = "insert into book(name,email,age,doubt) values('$name' , '$email', '$age' , '$doubt')" ;
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