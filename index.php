

<?php
require('connection.php');
$conn = new mysqli($servername, $username, $password, $dbname);

// Jos yheteys epäonnistuu printtaa \n Yhteyttä
if ($conn->connect_error) {
    die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
} ?>
 

<!DOCTYPE html>
<html>
<!--2021 Kristian Töllikkö, Kaverlista 0.1-->
<head>
<title>Kaverilista</title>
<link rel="stylesheet" href="css/main.css"> 
<link rel="stylesheet" href="css/animate.css">


<meta charset="utf-8">

</head>

<body>
    <br>
    <br>
    <br>
  <div class="container wow pulse">
    <div class="teksti">
      <p class="kav-teksti">Kaverilista, tehtävä 1</p>
      <hr style="">
      <div class="js-boksi">
        <h1 style="text-align: left;">Lisää nimi</h1>
        <form id="myForm" action="kukkuuhei.php" method="post">
        <span id="result"></span>        
        <input type="text" name="nimi" id="tekstin-lisays" placeholder="Nimi... Kiitos!">
        <button id="sub" onclick="lisaa_nimi()" class="Btn" pattern="[a-zA-Z0-9]*">Lähetä</button>
        </form> <!-- name="nimi" lähettää viestin/tallentaa arvon -->

      </div> 
      <ul id="kaverit">
        <li>Kristian Töllikkö</li>
      <!--  SELECT * FROM valitsee taulun mitä näyttää-->
              <?php $sql = "SELECT * FROM user";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li>". $row["nimi"]. "". "" . "</li>";
                    } 
                }  // $row["nimi"] on MySql Taulu
                $conn->close(); ?>
      </ul>
    </div>
  </div>
    <br>
  <div class="container">
    <div class="teksti">
      <p class="kav-teksti">Kaverilista, tehtävä 2</p>
      <hr style="">
      <div class="js-boksi">
        <h1 style="text-align: left;">Tulossa</h1>

        </form>
      </div>
      </ul>
    </div>
  </div>
</body>
<!-- Lähettää käyttäjän tekstin hetkeksi enennkuin php vastaanottaa viestin ja siirtyy toiselle php sivulle -->
<script src="js/kaverilista.js"></script>
<!-- Koska työ on julkinen, latasin nopeasti "WOW" animaation-->
<script src="js/wow.min.js"></script>
<script> new WOW().init(); 
// Jälkimmäinen päivättää sivun == 2 on arvo selaimessa joka tunnistaa palaavan käyttäjän
if(performance.navigation.type == 2){ location.reload(true);}</script>


</html>