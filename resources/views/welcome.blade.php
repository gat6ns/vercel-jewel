<!DOCTYPE html>
<html lang="en">
<head>
<title>PORTFOLIO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<style>
body {font-family: "Lato", sans-serif}

.mySlides {display: none}

h2{
  font-family: 'Saira Extra Condensed', serif;
  font-weight: 700;
  text-transform: uppercase;
  color: #343a40;
  }

  .w3-top{
  font-family: "Lato", sans-serif;
  font-weight: 700;
  text-transform: uppercase;
  color: #ffffff;
  }

  p{
  font-family: "Lato", sans-serif;
  }
  
  .w3-bar{
  background-color: #000000;
  }

  .w3-third{
  font-family: 'Saira Extra Condensed', serif;
  font-weight: 700;
  }
  
  img {
    border-radius: 50%;
  }

</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT ME</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SKILLS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">INTEREST</a>
    <div class="w3-dropdown-hover w3-hide-small">
    </div>
  </div>
</div>


<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <img src="../profile.jpg" alt="profile" style="width:10%" class="w3-hover-opacity">
    <h2 class="w3-wide w3-center"  style="font-size:70px;">JEWELL ESTILLORE</h2>
    <p class="w3-opacity"><i>LA UNION, PHILIPPINES</i></p>
    <p class="w3-opacity" >Hello! I’m Jewell, a passionate graphic designer and video editor. With a keen eye for detail and a love for visual storytelling, I specialize in creating compelling visuals that captivate and engage audiences. Proficient in Adobe After Effects and Adobe Photoshop, I bring creative ideas to life, whether it’s through stunning graphics or dynamic video content.</p>
    <div class="w3-row w3-center w3-padding-32">
      <div class="w3-third">
        <p>After Effects</p>
        <i class="devicon-aftereffects-plain colored"></i>
      </div>
      <div class="w3-third">
        <p>Photoshop</p>
        <i class="devicon-photoshop-plain colored"></i>
      </div>
      <div class="w3-third">
        <p>Premiere Pro</p>
        <i class="devicon-premierepro-plain colored"></i>
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">SKILLS</h2>
      <p class="w3-opacity w3-center"><i>WORKFLOW
        Graphic Design: Expert in Adobe Photoshop, skilled in creating logos, posters, social media graphics, and more.
        Video Editing: Proficient in Adobe After Effects, specializing in motion graphics, visual effects, and video post-production.</i></p><br>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">INTEREST</h2>
    <p class="w3-opacity w3-center"><i>Graphic Design Graphic design is at the heart of what I do. I love experimenting with different styles, color palettes, and typography to create visually appealing and impactful designs. Whether it's creating logos, posters, or social media graphics, I find joy in every aspect of the design process. <br><br>

        Video Editing Video editing allows me to combine my passion for storytelling with my technical skills. I enjoy crafting engaging narratives through seamless transitions, dynamic effects, and creative animations. Working with Adobe After Effects and Premiere Pro, I strive to produce videos that not only look great but also convey a compelling story. <br><br>
        
        Motion Graphics I have a keen interest in motion graphics, where I can blend my graphic design skills with animation. Creating animated explainer videos, promotional content, and visually captivating intros gives me an opportunity to push the boundaries of creativity. <br><br>
        
        Thank you for visiting my portfolio! I look forward to the opportunity to collaborate and create something amazing together.</i></p>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-pinterest w3-hover-opacity"></i>
  <p class="w3-medium">Jewell Estillore</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
