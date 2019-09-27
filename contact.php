<?php
include 'header.php'; ?>
    <body>
    <?php include 'navbar.php'; ?>
    <?php

    $arrayForm = [
        'Nom', "Prénom", 'Email', 'Télephone'
    ]

    ?>

    <div class="container d-flex flex-column flex-md-column-reverse">
        <section id="form" class="col -6">
            <h2 id="Contact">Contact</h2>
            <form action="" method="POST">
                <div class="row">
                    <?php foreach ($arrayForm as $users) {
                        if (!isset($_POST['$user'])) {
                            $error = "Attention ! Veuillez rentrer vos informations";
                        }
                        echo "<div class= col-12>";
                        echo " <label for= name> $users: </label>";
                        echo "<input type=text name=$users[0]  class=form-control>";
                        echo "</div>";
                        echo "<span class=error>";
                        echo $error; echo"</span>";
                    } ?>



                    <div class="col-12">
                        <label for="message">Message : </label>
                        <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="col-2 offset-10">
                        <input type="submit" class="btn btn-green float-right" name="valider" value="Envoyer">
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
<?php
unset($_SESSION['errors']);
?>