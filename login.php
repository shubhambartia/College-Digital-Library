<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Registration system </title>
  <link rel="icon" type="image/png" href="https://pbs.twimg.com/profile_images/687891381159788544/DBlelb2p.jpg">
<style>
* {
    margin: 0px;
    padding: 0px;
  }
  body {
    font-size: 120%;
    font-family: Arial, Helvetica, sans-serif;
    background: url("https://srsect.edu.in/wp-content/uploads/2016/01/srsitslide1.jpg") no-repeat fixed center;
    background-size: 100%;
  } 
  
  .header {
    width: 80%;
    margin: 50px auto 0px;
    color: white;
    background: #0145b2;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
  }
  form, .content {
    width: 0%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid black;
    width: 35%;
    height: 40%;
    position: relative;
    left: 1%;
    background: rgb(247, 247, 250);
    border-radius: 0px 0px 10px 10px;
    opacity: 0.9;
  }
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    display: block;
    text-align: left;
    margin: 3px;
    }
  .input-group input {
    height: 40px;
    width: 100%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 40px;
    box-sizing: border-box;

  }
  .btn {
    padding: 10px;
    font-size: 15px;
    border-radius: 40px;
    box-sizing: border-box;
  }
  .error {
    width: 92%; 
    margin: 0px auto; 
    padding: 10px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;
  }
  .success {
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    margin-bottom: 20px;
  }
  h2{color:#13428e;letter-spacing: 3px;}

  button {
    background-color: #0341a5;
    color: white;
    padding: 14px 20px;
    border-radius: 40px;
  box-sizing: border-box;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.9;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  line-height:10px;
}

img.avatar {
  width: 30%;
}

</style>
</head>
<body>
<h3><br></h3>
  <form method="post" action="login.php">
      <?php include('errors.php'); ?>
  	<div class="imgcontainer">
    <img src="https://pbs.twimg.com/profile_images/687891381159788544/DBlelb2p.jpg" alt="AMCI" class="avatar">
   
    <h2>SRSIT <br> DIGITAL LIBRARY</h2>
  </div>
  <div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter Username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter Password">
  	</div>
      <div class="input-group">
  		<button type="submit" class="btn" name="login_user">SIGN IN</button>
  	</div>
    <p>
  		Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </div>
  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>