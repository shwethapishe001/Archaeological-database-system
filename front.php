<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<link rel = "stylesheet" href="fro.css">

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.bg-img {
  /* The image used */
  background-image: url("gett.jpg");

  min-height: 1000px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   background-size: 100% 100%;

  /* Needed to position the navbar */
  position: relative;
}


/* Position the navbar container inside the image */
.container {
  position: absolute;
  margin: 20px;
  width: auto;
}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.h2 {
  font-size: 50px
  color:blue;
}
</style>
</head>
<body>




<h2  >ARCHEOLOGICAL DATABASE MANAGEMENT SYSTEM</h2>
<div class="bg-img">
  <div class="container">



    <div class="topnav">
      <a href="Material.php">Material</a>
      <a href="Department.php">Department</a>
        <a href="Details.php">Details</a>
      <a href="Cost.php">Cost</a>
  <a href="Discoverers.php">Discoverers</a>

    </div>
  </div>
</div>

</body>
</html>
