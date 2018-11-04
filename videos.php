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
  background-color:white;
  opacity: 0.9;
  padding: 8px 8px;
}

.header a {
  float: left;
  color: #031d84;
  font-weight: bold;
  text-align: center;
  padding: 35px 20px;
  font-size: 16px; 
  text-decoration: none;
  line-height: 25px;
  border-radius: 8px;
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
h2{
 color:red;  
 letter-spacing: 5px;
 text-shadow: 2px 2px 4px #000000; 
}
h1{
letter-spacing: 5px;
color:greenyellow;
text-shadow: 2px 2px 4px #000000;
}

h3{
  color:white;
  text-shadow: 2px 2px 4px #000000;
}

h4{
  color:yellow;
  text-shadow: 2px 2px 4px #000000;
}

h5{
  color:white;
}
.imageSpace{
position: relative; left:70px;
}

body{
background: url("https://static01.nyt.com/images/2018/08/02/business/02techfix/02techfix-facebookJumbo.gif")  no-repeat fixed center;
background-size: 100%;
}

table { 
    border-spacing: 30px;
    border-collapse: separate;
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
     <h2 align="center"><i class="fas fa-video"></i> VIDEOS</h2>   <br>
     <h4 align="center">This Section provides the online video tutorials mainly for a advanced Learning for final years students</h4><br>
     <hr color="#06ff02" width=95%; style="height:1px">
     <button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-to-top">TOP</i> </button>
     <h5>  &#8195;1. <u>Web Technology </u></h5>
     <table>
       <tr>
         <td>
     <iframe width="350" height="250" src="https://www.youtube.com/embed/JsbxB2l7QGY"
     allowfullscreen="allowfullscreen"
        mozallowfullscreen="mozallowfullscreen" 
        msallowfullscreen="msallowfullscreen" 
        oallowfullscreen="oallowfullscreen" 
        webkitallowfullscreen="webkitallowfullscreen">
     </iframe>
     </td>

     <td>
        <iframe width="350" height="250" src="https://www.youtube.com/embed/3GGmmVp6iOc"
        allowfullscreen="allowfullscreen"
           mozallowfullscreen="mozallowfullscreen" 
           msallowfullscreen="msallowfullscreen" 
           oallowfullscreen="oallowfullscreen" 
           webkitallowfullscreen="webkitallowfullscreen">
        </iframe>  
     </td>

     <td>
        <iframe width="350" height="250" src="https://www.youtube.com/embed/Ggh_y-33Eso"
        allowfullscreen="allowfullscreen"
           mozallowfullscreen="mozallowfullscreen" 
           msallowfullscreen="msallowfullscreen" 
           oallowfullscreen="oallowfullscreen" 
           webkitallowfullscreen="webkitallowfullscreen">
        </iframe>  
     </td>
     </tr>
     <tr>
       <td>
          <iframe width="350" height="250" src="https://www.youtube.com/embed/CUxH_rWSI1k"
          allowfullscreen="allowfullscreen"
             mozallowfullscreen="mozallowfullscreen" 
             msallowfullscreen="msallowfullscreen" 
             oallowfullscreen="oallowfullscreen" 
             webkitallowfullscreen="webkitallowfullscreen">
          </iframe>    
       </td>

       <td>
          <iframe width="350" height="250" src="https://www.youtube.com/embed/fju9ii8YsGs"
          allowfullscreen="allowfullscreen"
             mozallowfullscreen="mozallowfullscreen" 
             msallowfullscreen="msallowfullscreen" 
             oallowfullscreen="oallowfullscreen" 
             webkitallowfullscreen="webkitallowfullscreen">
          </iframe>    
       </td>
       <td>
          <iframe width="350" height="250" src="https://www.youtube.com/embed/mpQts3ezPVg"
          allowfullscreen="allowfullscreen"
             mozallowfullscreen="mozallowfullscreen" 
             msallowfullscreen="msallowfullscreen" 
             oallowfullscreen="oallowfullscreen" 
             webkitallowfullscreen="webkitallowfullscreen">
          </iframe>   
       </td>
     </tr>
    </table>
    <h5>  &#8195;2. <u>Cloud Computing</u> </h5>
    <table>
      <tr>
       <td>
          <iframe width="350" height="250" src="https://www.youtube.com/embed/usYySG1nbfI"
          allowfullscreen="allowfullscreen"
             mozallowfullscreen="mozallowfullscreen" 
             msallowfullscreen="msallowfullscreen" 
             oallowfullscreen="oallowfullscreen" 
             webkitallowfullscreen="webkitallowfullscreen">
          </iframe> 
       </td> 
       <td>
          <iframe width="350" height="250" src="https://www.youtube.com/embed/IT1X42D1KeA"
          allowfullscreen="allowfullscreen"
             mozallowfullscreen="mozallowfullscreen" 
             msallowfullscreen="msallowfullscreen" 
             oallowfullscreen="oallowfullscreen" 
             webkitallowfullscreen="webkitallowfullscreen">
          </iframe> 
       </td> 
       <td>
          <iframe width="350" height="250" src="https://www.youtube.com/embed/LICA-ILkO4w"
          allowfullscreen="allowfullscreen"
             mozallowfullscreen="mozallowfullscreen" 
             msallowfullscreen="msallowfullscreen" 
             oallowfullscreen="oallowfullscreen" 
             webkitallowfullscreen="webkitallowfullscreen">
          </iframe> 
       </td> 
      </tr>
      <tr>
          <td>
              <iframe width="350" height="250" src="https://www.youtube.com/embed/YH4CfwK6LhM"
              allowfullscreen="allowfullscreen"
                 mozallowfullscreen="mozallowfullscreen" 
                 msallowfullscreen="msallowfullscreen" 
                 oallowfullscreen="oallowfullscreen" 
                 webkitallowfullscreen="webkitallowfullscreen">
              </iframe> 
          </td>
          <td>
              <iframe width="350" height="250" src="https://www.youtube.com/embed/RWgW-CgdIk0"
              allowfullscreen="allowfullscreen"
                 mozallowfullscreen="mozallowfullscreen" 
                 msallowfullscreen="msallowfullscreen" 
                 oallowfullscreen="oallowfullscreen" 
                 webkitallowfullscreen="webkitallowfullscreen">
              </iframe> 
          </td>
          <td>
              <iframe width="350" height="250" src="https://www.youtube.com/embed/8CzFVa4UcVI"
              allowfullscreen="allowfullscreen"
                 mozallowfullscreen="mozallowfullscreen" 
                 msallowfullscreen="msallowfullscreen" 
                 oallowfullscreen="oallowfullscreen" 
                 webkitallowfullscreen="webkitallowfullscreen">
              </iframe> 
          </td> 
      </tr>
    </table>
    <h5>  &#8195;3. <u>Programming Knowledge</u> </h5>
    <table>
      <tr>
          <td>
              <iframe width="350" height="250" src="https://www.youtube.com/embed/WPvGqX-TXP0"
              allowfullscreen="allowfullscreen"
                 mozallowfullscreen="mozallowfullscreen" 
                 msallowfullscreen="msallowfullscreen" 
                 oallowfullscreen="oallowfullscreen" 
                 webkitallowfullscreen="webkitallowfullscreen">
              </iframe> 
          </td> 
          <td>
              <iframe width="350" height="250" src="https://www.youtube.com/embed/Rub-JsjMhWY"
              allowfullscreen="allowfullscreen"
                 mozallowfullscreen="mozallowfullscreen" 
                 msallowfullscreen="msallowfullscreen" 
                 oallowfullscreen="oallowfullscreen" 
                 webkitallowfullscreen="webkitallowfullscreen">
              </iframe> 
          </td> 
          <td>
              <iframe width="350" height="250" src="https://www.youtube.com/embed/nXvy5900m3M"
              allowfullscreen="allowfullscreen"
                 mozallowfullscreen="mozallowfullscreen" 
                 msallowfullscreen="msallowfullscreen" 
                 oallowfullscreen="oallowfullscreen" 
                 webkitallowfullscreen="webkitallowfullscreen">
              </iframe> 
          </td>    
      </tr>
      <tr>
          <td>
              <iframe width="350" height="250" src="https://www.youtube.com/embed/N4mEzFDjqtA"
              allowfullscreen="allowfullscreen"
                 mozallowfullscreen="mozallowfullscreen" 
                 msallowfullscreen="msallowfullscreen" 
                 oallowfullscreen="oallowfullscreen" 
                 webkitallowfullscreen="webkitallowfullscreen">
              </iframe> 
          </td>    
      </tr>
    </table>
    <h5>  &#8195;4. <u>Interview Tips to be followed</u> </h5>
    <table>
      <tr>
        <td>
          <iframe width="350" height="250" src="https://www.youtube.com/embed/iI6jiwoqxg4"
          allowfullscreen="allowfullscreen"
             mozallowfullscreen="mozallowfullscreen" 
             msallowfullscreen="msallowfullscreen" 
             oallowfullscreen="oallowfullscreen" 
             webkitallowfullscreen="webkitallowfullscreen">
          </iframe> 
        </td>
      
        <td>
          <iframe width="350" height="250" src="https://www.youtube.com/embed/JrbnTZPjg0k"
          allowfullscreen="allowfullscreen"
             mozallowfullscreen="mozallowfullscreen" 
             msallowfullscreen="msallowfullscreen" 
             oallowfullscreen="oallowfullscreen" 
             webkitallowfullscreen="webkitallowfullscreen">
          </iframe> 
        </td>
        <td>
          <iframe width="350" height="250" src="https://www.youtube.com/embed/r_w9gRRbC6s"
          allowfullscreen="allowfullscreen"
             mozallowfullscreen="mozallowfullscreen" 
             msallowfullscreen="msallowfullscreen" 
             oallowfullscreen="oallowfullscreen" 
             webkitallowfullscreen="webkitallowfullscreen">
          </iframe> 
        </td>
      </tr>
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
        </script>
</body> 
</html>        