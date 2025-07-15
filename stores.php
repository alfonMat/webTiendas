<?php
// index.php
include 'bbdd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Web Tiendas</title>
</head>
<body>
    <header>
        <h1>Web Tiendas - Stores</h1>
    </header>
    <nav>
        <ul class="nav nav-underline justify-content-center d-flex" >
            <li class="nav-item"><a class="nav-link " href="index.php">HOME</a></li>
            <li class="nav-item"><a class="nav-link active" href="stores.php">STORES</a></li>
            <li class="nav-item"><a class="nav-link" href="more.php">MORE</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <h2>Our Stores</h2>
            combobox que coge de la base de datos las tiendas
            <p>Here you can find a list of our stores.</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db = new bbdd();
                    $result = $db->consulta("SELECT * FROM tiendas");
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['location'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Web Tiendas. All rights reserved.</p>
    </footer>
</body>

</html>