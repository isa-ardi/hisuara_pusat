<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="<?= base_url()  ?>assets/leaflet/src/leaflet.fusesearch.css">

</head>
<style>
    #mapid {
        height: 600px;
    }
</style>

<body>
    <div id="mapid"></div>


    <!-- Make sure you put this AFTER Leaflet's CSS -->


    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="<?= base_url()  ?>assets/leaflet/src/leaflet.fusesearch.js"></script>



    <script src="<?= base_url()  ?>ui/leaflet.ajax.js"></script>
    <script>
        var map = L.map('mapid').setView([-6.6916191, 108.13634], 10);
        L.tileLayer('//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
        var searchCtrl = L.control.fuseSearch()
        searchCtrl.addTo(map);
        fetch("<?= base_url()  ?>assets/banten.json").then(response => response.json())
            .then(json => {
                console.log(json.features)
                L.geoJSON(json.features[7]).addTo(map);

                searchCtrl.indexFeatures(json.features, ['name', 'company', 'details']);

            });
    </script>
</body>

</html>