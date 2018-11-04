<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="shortcut icon" href="http://eduzeal.com/wp-content/uploads/2016/06/Sri-Revana-Siddeshwara-Institute-Of-Technology_logo.png.jpg">  
<title>7th Sem Project</title>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

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
 text-shadow: 2px 2px 4px #000000; 
 letter-spacing: 5px;
}

h3{
  color:floralwhite;
  text-shadow: 2px 2px 4px #000000;
}

h4{
  color:white;
text-shadow: 2px 2px 4px #000000; 
}

h5 {
  color:yellow;
  text-shadow: 2px 2px 4px #000000; 
}
.imageSpace{
position: relative; left:70px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}  

body{
background: url("http://bestanimations.com/Books/pretty-book-bench-nature-water-outdoors-animated-gif.gif")  no-repeat fixed center;
background-size: 100%;
}

.content1{
  position: relative;
  left:5%;
  width: 50%;
}

p{
  color:white;
  text-shadow: 2px 2px 4px #000000;
}
p a{
  color:chartreuse;
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

#OpenButton{
  background-color: white;
  border-radius:40px;
  height:50px;
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
         </div>
      <div class="content">
     <h2 align="center"><i class="fas fa-book-reader"></i> BOOKS</h2> 
     
     <h4 align="center">This Section provides the PDF of the Books for 7th SEM as per recomended by the VTU<br> 
Thus, saves your time searching on websites for the Books.
     </h4> <br>
     <span style="font-size:30px;color:#00ffe9;cursor:pointer" onclick="openNav()">&#8195;&#9776; Open</span>
     <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">3 sem</a>
      <a href="#">4 sem</a>
      <a href="#">5 sem</a>
      <a href="#">6 sem</a>
      <a href="http://localhost/phpmyadmin/Registration/books.php">7 sem</a>
    </div>
  
    <hr color="white" width=95%; style="height:1px">
     <h5> &#8195; &#8195;1. WEB TECHNOLOGY AND ITS APPLICATIONS</h5>
     <p> &#8195; &#8195;>>>>> <a href="http://file.allitebooks.com/20150627/Fundamentals%20of%20Web%20Development.pdf" target="_blank"><b>Click me For WT TextBook</b></a><br><br>
     </p><br>
     <h5> &#8195; &#8195;2. ADVANCED COMPUTER ARCHITECTURES</h5> 
      <p> &#8195; &#8195;>>>>> <a href="file:///home/shubham/Desktop/7th%20sem%20textBook/ACA-textbook.pdf" target="_blank"><b>Click me For ACA TextBook</b></a><br>
             </p><br>
      <h5> &#8195; &#8195;3. MACHINE LEARNING</h5>
        <p> &#8195; &#8195;>>>>> <a href="https://www.cs.ubbcluj.ro/~gabis/ml/ml-books/McGrawHill%20-%20Machine%20Learning%20-Tom%20Mitchell.pdf" target="_blank"><b>Click me For ML TextBook</b></a><br>
        </p><br>
       <h5> &#8195; &#8195;4. UNIX SYSTEM PROGRAMMING</h5>
           <p> &#8195; &#8195;>>>>> <a href="file:///home/shubham/Desktop/7th%20sem%20textBook/UNIX-2nd%20Book.pdf" target="_blank"><b>Click me For USP TextBook</b></a><br>

          </p><br>
          <h5> &#8195; &#8195;5. STORAGE AREA NETWORKS</h5>
            <p> &#8195; &#8195;>>>>> 1. <a href="http://sitlib.sethu.ac.in/e-books/CSE%20and%20IT%20books/Information%20Storage%20and%20Management%20Somasundaram.pdf" target="_blank"><b>Click me For SAN TextBook</b></a><br>
              &#8195; &#8195; >>>>> 2. <a href="https://www.researchgate.net/profile/Vladimir_Riabov/publication/273830919_Storage_Area_Networks_Fundamentals/links/550e0a320cf27526109c9766/Storage-Area-Networks-Fundamentals.pdf?origin=publication_detail" target="_blank">Click me for 2nd Book</a>
           </p><br>
    
  
    <script>
      window.onscroll = function() {myFunction()};
      
      var navbar = document.getElementById("navbar");
      var sticky = navbar.offsetTop;
      
      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
        } else {
          navbar.classList.remove("sticky");
        }
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