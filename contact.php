<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Greenness</title>

    <link rel="icon" href="images/favicon-96x96.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- Maps -->
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.css' rel='stylesheet'/>

    <!-- Fonts & icons -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include 'navbar.php'; ?>
<?php
$arrayForm = [
    'Nom' => ['Name'],
    'Prénom' => ['lastName'],
    'Email' => ['mail'],
    'Téléphone' => ['phone'],
    
];

?>


<div class="container d-flex flex-column flex-md-column-reverse">
    <section id="form" class="mt-5">
        <h2 id="Contact">Contact</h2>
        <form>
            <div class="row">
                <?php foreach ($arrayForm as $users => $key) {
                    echo "<div class=col-6>";
                    echo " <label for= name> $users: </label>";
                    echo "<input type=text name=$users[0] id=$key[0] class=form-control required>";


                    echo "</div>";
                } ?>
                <div class="col-12">
                    <label for="message">Message : </label>
                    <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                </div>
                <div class="col-2 offset-10">
                    <input type="submit" class="btn btn-green float-right" value="Envoyer">
                </div>
            </div>
</div>
</div>
</form>
</section>
<section class="mt-5">
    <h2>Nos points de vente</h2>
    <div id='map'></div>
</section>
</div>
<?php include 'footer.php';
include 'age_check.php'; ?>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibWFydGlucml2aWVyZSIsImEiOiJjazBubXBvczQwMWRpM2hwcGV4c3pubHJ1In0.qtYexkvHKigcd_hgl4Q9jA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/martinriviere/ck0nkniw001wt1crx8wpias1s', // replace this with your style URL
        center: [2.3922962, 46.7737294],
        zoom: 4
    });
    // code from the next step will go here
    map.on('click', function (e) {
        var features = map.queryRenderedFeatures(e.point, {
            layers: ['greenness'] // replace this with the name of the layer
        });

        if (!features.length) {
            return;
        }

        var feature = features[0];

        var popup = new mapboxgl.Popup({offset: [0, -15]})
            .setLngLat(feature.geometry.coordinates)
            .setHTML('<h3>' + feature.properties.description + '</h3><p>' + feature.properties.address + '</p>')
            .addTo(map);
    });
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>