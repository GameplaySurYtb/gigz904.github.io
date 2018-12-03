<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Infos Pratiques - Appartement Biscarosse Plage </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/perso.css" />
    <script src="main.js"></script>
    <?php include 'components/imports.php' ?>
</head>
<body>
    <header>
    <?php include 'components/header.php' ?>
    </header>
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Informations pratiques</h1>
    <br>
    
  </div>
</div>

<div class="container marketing">


<h1 id="loc"><strong>Localisation :</strong></h1>

<p><strong>Adresse :</strong></p>
<p class="adresse">Résidence Les Balcons de l'Océan <br>Appartement G213 <br>178 Boulevard Des Sables <br>40600 Biscarosse</p>

<p><strong>Plan :</strong></p>
<div id="map" style="width:100%;height:700px"></div>
<br>
</div>


<script>

function myMap()
{
var myCenter=new google.maps.LatLng(44.448707, -1.253685);
var mapOptions = {
  center: myCenter,
  zoom:18,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("map"),mapOptions);

var marker = new google.maps.Marker({
  position: myCenter,
  });

marker.setMap(map);
}

</script>
<footer>
<div class="footer">
      <p class="p-footer">Holding Bertrand Jacques - Tous droits réservés.</p>
  </div>
  </footer>


<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>