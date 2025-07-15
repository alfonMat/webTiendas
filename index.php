<?php
// index.php
include 'bbdd.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Tiendas</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <style>
        #map {
            height: 400px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header class="bg-light p-3">
        <h1>Web Tiendas</h1>
    </header>

    <nav>
        <ul class="nav nav-underline justify-content-center d-flex" >
            <li class="nav-item"><a class="nav-link active" href="index.php">INICIO</a></li>
            <li class="nav-item"><a class="nav-link" href="stores.php">TIENDAS</a></li>
            <li class="nav-item"><a class="nav-link" href="more.php">MAS</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">CONTACTO</a></li>
        </ul>
    </nav>

    <main class="container my-4">
        <h2>Bienvenido a Web Tiendas</h2>
        <p>Tu sitio para encontrar nuestras tiendas por ciudad.</p>

        <!-- ComboBox para seleccionar ciudad -->
        <div class="mb-3">
            <label for="citySelect" class="form-label">Selecciona una ciudad:</label>
            <select id="citySelect" class="form-select">
                <option value="">-- Elige una ciudad --</option>
                <option value="madrid">Madrid</option>
                <option value="barcelona">Barcelona</option>
                <option value="valencia">Valencia</option>
                <option value="malaga">Málaga</option>
            </select>
        </div>

        <!-- Mapa -->
        <div id="map"></div>
    </main>

    <footer class="text-center bg-light py-3">
        <p>&copy; 2025 Web Tiendas. Todos los derechos reservados.</p>
    </footer>

    <script src="mapa.js"></script>
</body>
</html>

</body>
</html>
