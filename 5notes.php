<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="shortcut icon" href="http://eduzeal.com/wp-content/uploads/2016/06/Sri-Revana-Siddeshwara-Institute-Of-Technology_logo.png.jpg">  
<title>7th sem Project</title>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

.header {
  overflow: hidden;
  padding: 8px 8px;
 background-color: white;
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
h4{
  color:white;
}
.imageSpace{
position: relative; left:70px;
}
.vtu_box {
    width: 199px;
    padding: 10px;
    float: left;
    height: auto;
    min-height: 225px;
    margin: 40px 40px 0px 70px;
    border: 1px solid;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background: white;
}
p1{
text-align:center;
}

body{
background: url("https://uomdigilab.files.wordpress.com/2016/09/lenovo-yoga-book_v2.gif")  no-repeat fixed center;
background-size: 100%;
}
h3{color:ghostwhite;
text-shadow: 2px 2px 4px #000000;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

#blackPart{
  background-color:#313233;
  opacity:0.9;
  border-radius:40px;
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

#myBtn:hover {
  background-color: blue;
}

hr {
    background-color: white;
    border-top: 1px solid #ccc;
}
</style>
</head>
<body>
<br>
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
         <div id="blackPart">
     <h2 align="center"><i class="fas fa-file"></i> NOTES</h2>   
<h4 align="center">This Section Provides all the 5th Sem Notes with subject Name and Module wise.</h4>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="http://localhost/phpmyadmin/Registration/3notes.php">3 sem</a>
    <a href="http://localhost/phpmyadmin/Registration/4notes.php">4 sem</a>
    <a href="http://localhost/phpmyadmin/Registration/5notes.php">5 sem</a>
    <a href="http://localhost/phpmyadmin/Registration/notes.php">6 sem</a>
  </div>
<span style="font-size:30px;color:#00fc00;cursor:pointer" onclick="openNav()">&#8195;&#9776; Open</span>
<hr color="yellow" width=95%; style="height:1px">
<button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-to-top">TOP</i> </button>
<table width="100%" border="0">
    <tbody>
      <tr>
        <td width="33%" align="center">
       <div class="vtu_box">
                  
                  <h1 align="center" style="color:greenyellow">ME</h1><hr>
                    
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_dHZGWjVJeEttTUE" target="_blank"><b>MODULE 1</b></a></p>
                   
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_amEwTUNGZEYxVkk" target="_blank"><b>MODULE 2</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_ME4xRUQ5eU1zZ0E" target="_blank"><b>MODULE 3</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1QhH032e7VTpb-TlqT-U1mJXo-JDspQyR" target="_blank"><b>MODULE 4</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1kXBvqCNNA2X42CUpAUpTKozMdbDFM4S1" target="_blank"><b>MODULE 5</b></a></p>
                                 
    </div> 
        
        </td>
        <td align="center" width="33%">
      <div class="vtu_box">
                  
                  <h1 align="center" style="color:greenyellow">CN</h1><hr>
                    
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_TWRveXNJM0kzMEk" target="_blank"><b>MODULE 1</b></a></p>
                   
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_bVl5OGh2RVRWclU" target="_blank"><b>MODULE 2</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1iKQQFxBmR-RRAX2ItEkn4s0SZAEYdpOz" target="_blank"><b>MODULE 3</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1e28kYa9L8QuZBE6i4vfGMXdCF-C_yvdY" target="_blank"><b>MODULE 4</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1Z5IEy5coi2zl0loItCAH_OF71EzIs73j" target="_blank"><b>MODULE 5</b></a></p>
                                 
    </div>  
        
        </td>
        <td align="center" width="33%">
  <div class="vtu_box">
                  
                  <h1 align="center" style="color:greenyellow">DBMS</h1><hr>
                    
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_MXR4NnoyT2tnbUE" target="_blank"><b>MODULE 1</b></a></p>
                   
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_VXhpV1hjalUtbGc" target="_blank"><b>MODULE 2</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1Ng7AkcZmlRay0PvkPhs6ty3ZfiR2KBf3" target="_blank"><b>MODULE 3</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1fTcQbqpXuhbAL74MkdEpaswPyXPwrvJ6" target="_blank"><b>MODULE 4</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1voaWJwAx90CRPEyWymOx49ulr2yfpdEx" target="_blank"><b>MODULE 5</b></a></p>
                                 
    </div>
         
        
        </td>
      </tr>
    </tbody>
  </table>
  
  
  <table width="100%" border="0">
    <tbody>
      <tr>
        <td width="33%" align="center">
       <div class="vtu_box">
                  
                  <h1 align="center" style="color:greenyellow">ATC</h1><hr>
                    
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_bVprR1dQTGJWN2M" target="_blank"><b>MODULE 1</b></a></p>
                   
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_c3E5S3dITUV4b0U" target="_blank"><b>MODULE 2</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_MWZzVTZvLUc3b0E" target="_blank"><b>MODULE 3</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1oo8_MexJNSmdjbNLo4vFizrzNb8AedFN" target="_blank"><b>MODULE 4 & 5</b></a></p>
                  
                  
                                 
    </div> 
        
        </td>
        <td align="center" width="33%">
      <div class="vtu_box">
                  
                  <h1 align="center" style="color:greenyellow">OOMD</h1><hr>
                    
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_d1RmblFmZFJ4VUU" target="_blank"><b>MODULE 1</b></a></p>
                   
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_cFJ0S1NGY0lIc0U" target="_blank"><b>MODULE 2</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_cUpMamRVbFpKRG8" target="_blank"><b>MODULE 3</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=19t6UtqJ54Ws7fSqW2UpvO8d5cA4qbqnQ" target="_blank"><b>MODULE 4</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1WzoNBNufWA-EHQ2VNGPWMP7RiMyayY4e" target="_blank"><b>MODULE 5</b></a></p>
                                 
    </div>  
        
        </td>
        <td align="center" width="33%">
  <div class="vtu_box">
                  
                  <h1 align="center" style="color:greenyellow">.NET</h1><hr>
                    
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_eXpMaUMxZDJUNmM" target="_blank"><b>MODULE 1</b></a></p>
                   
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_X3ZSVlZZRjY3OTA" target="_blank"><b>MODULE 2</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_d2sxZ21TWWNWUTQ" target="_blank"><b>MODULE 3</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1DmpLGctocLv4xU_ujbjK-79C8et-vvlD" target="_blank"><b>MODULE 4</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=13NecDZABmvdCIHProGZaIHFGjNI5afqk" target="_blank"><b>MODULE 5</b></a></p>
                                 
    </div>
         
        
        </td>
      </tr>
    </tbody>
  </table>
  
  <table width="100%" border="0">
    <tbody>
      <tr>
      <td width="15%" align="right">&nbsp;</td>
        <td width="36%" align="center">
       <div class="vtu_box">
                  
                  <h1 align="center" style="color:greenyellow">AJJ</h1><hr>
                    
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_ZEswZ214ZlVDWHM" target="_blank"><b>MODULE 1</b></a></p>
                   
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=1t_-fXxfePZxxGf9XMbcj1ynyBJjwAgRt" target="_blank"><b>MODULE 2</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_emZvTjFMNzRUdHM" target="_blank"><b>MODULE 3</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_WDBiMGlZazZmbzA" target="_blank"><b>MODULE 4</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_YjkxMm4weTRJMW8" target="_blank"><b>MODULE 5</b></a></p>
                                 
    </div> 
        
        </td>
        <td align="center" width="49%">
      <div class="vtu_box">
                  
                  <h1 align="center" style="color:greenyellow">AI</h1><hr>
                    
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_OVVETFBhbjBlbE0" target="_blank"><b>MODULE 1</b></a></p>
                   
                  <p align="center" style="font-size:15px"><a href="https://drive.google.com/open?id=0BzfpGB351Qv_Ykh3eDR2U01DRzQ" target="_blank"><b>MODULE 2</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="comingsoon.html"><b>MODULE 3</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="comingsoon.html"><b>MODULE 4</b></a></p>
                  
                  <p align="center" style="font-size:15px"><a href="comingsoon.html"><b>MODULE 5</b></a></p>
                                 
    </div>  
        
        </td>
      </tr>
    </tbody>
  </table>
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
    function openNav() {
document.getElementById("mySidenav").style.width = "250px";
 }

    function closeNav() {
document.getElementById("mySidenav").style.width = "0";
 }
    </script> 

    
</body> 
</html>        