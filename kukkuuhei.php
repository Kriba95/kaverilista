<!DOCTYPE html>
<html>
<!--2021 Kristian Töllikkö, Kaverlista 0.1-->
<head>
<title>Kaverilista</title>
<link rel="stylesheet" href="css/main.css"> 
<link rel="stylesheet" href="css/animate.css">


 


</head>
<body>
  <div class="container wow pulse">
    <div class="teksti">
    <hr>
      <div class="js-boksi">
        <h1 style="text-align: left;"><?php 
//Vastaanottaa input arvon sivusta /index.php
// $ Arkistoi arvon/tekstin
$nimi = $_POST['nimi'];

// Yhdistää databaseen 
require('connection.php');
$con = new mysqli($servername, $username, $password, $dbname);

// Jos yheteys epäonnistuu printtaa \n Yhteyttä
if (mysqli_connect_errno()) {
  printf("Yhteys epäonnistui, tarkista: \n", mysqli_connect_error());
  exit();
}
// Taulut
$query = "INSERT INTO `user`(`nimi`) VALUES ('$nimi')";
$result = mysqli_query($con, $query);

// Jos yheteys epäonnistuu printtaa \n Yhteyttä
if ($con->connect_error) {
  die("Yhteys epäonnistui, tarkista: \n" . $con->connect_error);
}

// Jos yheteys onnistuu printtaa teksti;
else {
  echo "Kiitos! Juttusi on lisätty :D";
}
?></h1>
        <hr>
      </div>
    </div>
  </div>
</body>
<!-- Custom.js estää  "WOW" animaation lataamista mobiililaitteelle-->

<script src="js/kaverilista.js"></script>
<!-- Koska työ on julkinen, latasin nopeasti "WOW" animaation-->
<script src="js/wow.min.js"></script>
<script> new WOW().init(); </script>
</html>
