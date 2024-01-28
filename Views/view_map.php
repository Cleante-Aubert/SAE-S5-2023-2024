<?php require "view_begin.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        .custom-popup {
            max-width: 300px;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .cinema-icon {
            width: 24px;
            height: 24px;
            margin-right: 8px;}
        .popup-title {
            font-size: 1.2em;
            margin-bottom: 8px;
            color: #044266;
        }

        .popup-info {
            margin-bottom: 6px;
            color: #333;
        }


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinémas en Île-de-France</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>
<div class="container">
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Recherchez par code postal ou nom de ville">
        <button onclick="searchCinemas()">Rechercher</button>
    </div>
    <div id="map" style="height: 500px; width: 100%;"></div>
</div>
<script src="../Content/js/main.js"></script>
</body>
</html>


<?php require "view_end.php";?>


