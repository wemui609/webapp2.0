
<!DOCTYPE html>
<html>
<title>Recipe Me</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<body>

<!-- Sidenav (hidden by default) -->
<nav class="w3-sidenav w3-card-2 w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px;background-color:#20A4F3;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-closenav">Close Menu</a>
  <a href="index.html" onclick="w3_close()">Recipe Me</a>
  <a href="login.html" onclick="w3_close()">Login</a>
  <a href="signup.html" onclick="w3_close()">Sign Up</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-#C1CFDA w3-xlarge w3-padding-xlarge" style="max-width:1200px;margin:auto;background-color:#C1CFDA;">
    <div class="w3-opennav w3-left w3-hover-text-grey" onclick="w3_open()">&#9776;</div>
    <div class="w3-right">
      
      <div class="wrapper">
    <input type="text" />
    <button>Search</button>
</div>

    </div>
    <div class="w3-center"><a href="index.html"><img src="logo.png" width="150" height="150"></a></div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter" id="food">
    <a href="dessert.html">
     <img src="http://therawchef.com/wp-content/themes/Anatta-Theme/images/sales-page/desert.jpg" alt="Sandwich" style="width:100%">
    </a>
       <h3>The Perfect Dessert, A Real NYC Classic</h3>
      <p>These decadent Chocolate mousse squares are to die for!</p>
    </div>
    <div class="w3-quarter">
    <a href="steak.html">
      <img src="http://esq.h-cdn.co/assets/cm/15/05/54cd9252ec3a9_-_esq-steak-pan-sauce-020513-19tcti-xlg.jpg" alt="Steak" style="width:100%">
    </a>
      <h3>Let Me Tell You About This Steak</h3>
      <p>Succulent medium rare beef cooked in a tangy steak sauce. This dish screams Delish!</p>
    </div>
    <div class="w3-quarter">
    <a href="drink.html">
      <img src="https://s-media-cache-ak0.pinimg.com/236x/24/cd/50/24cd505978ce4a2bac3cfa767b1f6d6e.jpg" alt="Cherries" style="width:80%">
    </a>
      <h3>Raspberries, interrupted</h3>
      <p>This drink will knock you off your feet with a sour raspberry juice and a splash of vodka!</p>
    </div>
    <div class="w3-quarter">
    <a href="spaghetti.html">
      <img src="https://i.ytimg.com/vi/x4P5hFK5QZA/maxresdefault.jpg" alt="Pasta and Wine" style="width:100%">
    </a>
      <h3>Spaghetti Muffins</h3>
      <p>The name says it all and your friends will fall-- into jealousy that is when they taste these puppies.</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  

  <!-- Pagination -->
  <!--<div class="w3-center w3-padding-32">
    <ul class="w3-pagination">
      <li><a class="w3-black" href="#">1</a></li>
      <li><a class="w3-hover-black" href="#">2</a></li>
      <li><a class="w3-hover-black" href="#">3</a></li>
      <li><a class="w3-hover-black" href="#">4</a></li>
      <li><a class="w3-hover-black" href="#">&raquo;</a></li>
    </ul>
  </div>
  
  <hr id="about">
  <!-- About Section -->
  <hr>
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About Us, The Munchketeers!</h3><br>
    <img src="download.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="300" height="250">
    <div class="w3-padding-32">
      <h4><b>We are the Munchketeers!</b></h4>
      <h6><i>With Passion For Real, Good Food</i></h6>
      <p>We explore the universe of unknownment. We have a passion for real good food, and we like to share our recipes. Here you can find recipes for some rare interesting dishes, desserts, appetizers and drinks. You can even rate our recipes and keep a log of your favourite ones!</p>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="overlay">
<div class="pop-up">
  <a href="signup.html">
  <h3>Subscribe to be Awesome</h3>
  </a>
  <span class="nope">Don't be awesome</span>

</div>
</div>

  <!-- Footer -->
  <footer class="w3-center w3-#C1CFDA w3-padding-64" style="background-color:#C1CFDA;">
  <div class="w3-xlarge" style="background-color:#C1CFDA;">
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
    <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
    <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
    <a href="#home" class="w3-hover-text-red" title="Go to top"><i class="fa fa-arrow-up"></i></a>
  </div>
  
</footer>


<!-- End page content -->
</div>

<script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}

window.onload=func1();

function func1(){
$('.pop-up').fadeIn();
}

$('.nope').click(function(){
$('.pop-up').fadeOut();
$('.overlay').fadeOut();
});

</script>


</body>
</html>