<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://eduzeal.com/wp-content/uploads/2016/06/Sri-Revana-Siddeshwara-Institute-Of-Technology_logo.png.jpg">  
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>7th sem Project</title>
<style>
* {box-sizing: border-box;}
body {
  font-family: "Lato", sans-serif;
}

.header {
  overflow: hidden;
  background-color: white;
  padding: 8px 8px;
  opacity: 0.9;
}

.header a {
  float: left;
  color: #031d84;
  font-weight: bold;
  text-align: center;
  padding: 35px 20px;
  font-size: 16px; 
  line-height: 25px;
  border-radius: 8px;
  text-decoration: none;
}

.header a:hover {
  background-color:greenyellow;
  color: black;
}

.header-right {
  position: relative;
  left:52%;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
}

h1{
letter-spacing: 5px;
color:greenyellow;
text-shadow: 2px 2px 4px #000000;
}

h2{
 color:red;
 letter-spacing: 5px;
 text-shadow: 2px 2px 4px #000000;   
}

h3{
  color:floralwhite;
  font-size:20px;
}
h4{
  font-size: 180%;
 color:greenyellow;
text-shadow: 2px 2px 4px #000000;
letter-spacing: 3px;
}

.imageSpace{
position: relative; left:70px;
}


body{
background: url("https://srsect.edu.in/wp-content/uploads/2016/01/SLIDE2SRSIT.jpg")  no-repeat fixed center;
background-size: 100%;
}

span{
  font-size:30px;
  text-align:center;
  color:yellow;
}

p{
  color:white;
}

.content{
  background-color: #313233;
  opacity: 0.9;
}

#startHead{
  color:white;
  text-shadow: 0 0 3px white,0 0 5px black;
  background-color:#0f5edd;
  border-radius:40px;
  border-style: solid;
    border-color: white;
}

#signOut{
  border-radius:40px;
  position:relative;
  left:90%;
  color: black;
  text-decoration: none;
  background-color:white;
}

.modal-title{
  color:#0143ad;
}
#popUpH3{
  color:black;
  text-decoration:none;
}
#popUppara{
  color:Gray;
}

.success {
    text-align:center;
    background: #25dd25; 
    position:relative;
    left:35%;
    border-radius:40px;
    border: 1px solid #3c763d;
    width:30%;
    color:blue;
    margin-bottom: 20px;
  }
  #introPara{
    text-indent: 50px;
    text-align: justify;
    letter-spacing: 3px;
  }

  .ib {
  overflow: hidden;
  padding: 20px 10px;
 
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  background-color: #1d69e2;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 50%;
}
.header-right a:hover{
  display:block;
font-size:20px;
}
.header-right a:active{
transform:translateY(10px);
}

#myBtn:hover {
  background-color: blue;
}
</style>
</head>
<body>
<div id="popModel" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h2 class="modal-title">SRSIT DIGITAL LIBRARY</h2>
</div>
<div class="modal-body">
<?php  if (isset($_SESSION['username'])) : ?>
<h3 align="center" id="popUpH3">Welcome ,<b> <?php echo $_SESSION['username']; ?></b> !!</h3>
<p id=popUppara>A heartly welcome to our website, This is a Unique Web App introduced for the first time in SRSIT's history.<br> I am quite sure it will meet all your requirnment related to study material, So hope you will like the Project.<br>THANK YOU! </p>
<?php endif ?>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:40px;">Close</button>
</div>
</div>
</div>
</div>


<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6645541031569203" data-ad-slot="1561905375" data-ad-format="link"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script>
$(function() {  
  $("#popModel").modal('show');
});
</script>

<button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-to-top">TOP</i> </button>

<h1 align="center" id="startHead">SRSIT DIGITAL LIBRARY<br></h1>
<div class="content1">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<button id="signOut"><a href="index.php?logout='1'"> <i class="fas fa-sign-out-alt"></i>  SIGN OUT</a></button>
    <?php endif ?>
</div>


<div id="navbar">
<div class="header">
 <div class="imageSpace">
  <img src="https://pbs.twimg.com/profile_images/687891381159788544/DBlelb2p.jpg" alt="clgLOGO" style="width:140px;height:120px;" align="left">
  </div>  
    <div class="header-right">
      <a href="http://localhost/phpmyadmin/Registration/main.php">HOME</a>
      <a href="http://localhost/phpmyadmin/Registration/notes.php">NOTES</a>
      <a href="http://localhost/phpmyadmin/Registration/books.php">BOOKS</a>
      <!--<a href="/home/shubham/Documents/Previous windows file/7th sem/live.html">LIVE</a>-->
      <a href="http://localhost/phpmyadmin/Registration/videos.php">VIDEOS</a>
</div>
  </div>
  <hr >
</div>
<div class="content">
  <h2 align="center"><i class="fas fa-home"></i> HOME</h2><br>
<h4 align="center"><u>Department of Computer Science & Engineering</u><br></h4><br>
<h3 align="center"> WEB TECHNOLOGY LABORATORY <br><span align="center">MINI PROJECT</span></h3><br>
<p id="introPara"><i>An attempt is been made to show a Mini Project that represents our idea and creativity involved during the creation of the project. The Idea behind this project is completely unique and generally
  covers the concept that a basic Web Application may have. <br>
  In this project we have created a Web Application for our college through which the college will be able provides some of the study material though online which will help students in there academic carrier, and in return makes this website usefull.<br>
  In Top there is a navigation panel that easily helps in navigate to the respective request for the users.<br><br>
  <span>&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;Thank You !!</span></i>

 <div class="ib"><h3><i><u>Developed By<u></i></h3>
<p><i>1.&#8195; Shubham Bartia
   (1RC15CS024) <br>
2.&#8195; Sanjit Chakrabarti
   (1RC15CS023) </i></p>
</div>
</div>   
</div>
<script>
     window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html> 
