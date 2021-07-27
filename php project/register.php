<!DOCTYPE html>
<html>
<head>
	<title>Login-form</title>
<link rel="stylesheet" type="text/css" href="style.css">
   <style>
   	body{
   		background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("image.jpg");
   		height: 100vh;
   		background-size: cover;
   		background-position: center;
   	}
   </style>
   <style>
   	.Login-page{
   		width: 360px;
   		padding: 10% 0 0;
   		margin: auto;
   	}
   </style>
   <style>
   	.form{
   		position: relative;
   		z-index: 1;
   		background:rgba(7, 40, 195, 0.8);
   		max-width: 360px;
   		margin: 0 auto 100px;
   		padding: 45px;
   		text-align: center;
   	}
   </style>
   <style>
   	.form input{
   		font-family: "roboto",sans-serif;
   		outline: 1;
   		background:#f2f2f2;
   		width: 100%;
   		border: 0;
   		margin:0 0 15px;
   		padding: 15px;
   		box-sizing: border-box;
   		font-size: 14px;
   	}
   </style>
   <style>
   	.form button{
   		font-family: "roboto", sans-serif;
   		text-transform: uppercase;
   		outline: 0;
   		background:#4CAF50;
   		width: 100%;
   		border: 0;
   		padding: 15px;
   		color:#FFFFFF;
   		font-size:14px;
   		cursor:pointer;
   	}
   </style>
</head>
<body>
 <div class="Login-page">
        <div class="form">
        <form  action="log.php" method="post">
            <input type="usernsme" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
            <input type="email" placeholder="email" name="email">
            <button type="submit" name="submit">submit</button>
            <p class="message">Already Registered?<a href="log.php">Login</a></p>
        </form>
        </div>
    </div>
    </body>
     <h1><mark>Hello, Learners!</mark></h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Coding</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span >   </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="bootstrap.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Web Development
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Technology</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
    >
        <li><a class="dropdown-item" href="#">Something else here</a></li>
             <li><a class="dropdown-item" href="#">Write Us</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">Register</a>
        </li>
      </ul>
      <form class="d-flex">
      
     
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div></nav>
</body>
</html>