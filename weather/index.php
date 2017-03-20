<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/main.css" rel="stylesheet">
      <!-- Angular -->
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
       <!-- GSAP TEXT AND CSS PLUGIn -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/TextPlugin.min.js"></script>
 </head>
    <body>

      <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>

      <div class="banner" style="text-align:center">
            <h2 style="padding-top:30px">Search Today's Weather</h2>
      </div>

      <div class="searchbody" id="content">
          <div class="navbar-form">
            <input id="search" class="form-control input-md" type="text" name="" value="New York" placeholder="Enter a city....">
            <input id="searchsubmit" class="btn btn-primary btn-md" type="submit" name="" value="Search">
          </div>

        <p id="error" style="color:red"></p>
        <p id="place">Place:</p>
        <p id="temperature">Temperature:</p>
        <p id="high">High:</p>
        <p id="low">Low:</p>
        <p id="weather">Weather:</p>
        <p id="weatherdes">Weather Description:</p>
        <p id="pressure">Pressure:</p>
        <p id="humidity">Humidity:</p>
      </div>

      <footer class="copyright" style="text-align: center">
        <p>Copyright &copy; webportfolio5803.com</p>

      </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--CDN link for  TweenMax-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
      <!-- indidvidual files -->
      <script src="javascript/main.js"></script>


  </body>
</html>
