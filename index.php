<!DOCTYPE html>
<html lang="id">
<head>
<style>
    .card {
        display: flex;
        flex-direction: column;
        height: 100%; 
    }
    
    .card-body {
        flex-grow: 1; 
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-img-top {
        height: 300px;
        object-fit: cover;
        width: 100%;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Tugas 1 dan 2 EAI Mochamad Tegar Abdillah 120221048</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="GetApi.php">Sample data API</a></li>
            </ul>
        </div>
    </div>
</nav>



<div class="container mt-5">
    <h1 class="text-center mb-4">Koleksi Buku</h1>
    <div class="row">

        <?php
        $coverImages = [
            "Botchan" => "images/botchan.jpg",
            "Norwegian Wood" => "images/x-121481vd.jpg",
            "Convenience Store Woman" => "images/convenience_store_woman.jpg",
            "Before the Coffee Gets Cold" => "images/before_coffee.jpg",
            "I Want to Eat Your Pancreas" => "images/eat_your_pancreas.jpg",
            "Crazy Rich Asians" => "images/crazy_rich_asians.jpg",
            "The war of the worlds" => "images/war_of_the_worlds.jpg",
            "Rich people problems" => "images/rich_people_problems.jpg",
            "The Death Cure" => "images/the_death_cure.jpg",
            "Pandora Box" => "images/pandora_box.jpg",
            "Kafka on the shore" => "images/Kafka on the shore.jpg"
        ];

        $url = "http://localhost/Tugas%201%20dan%202%20eai/GetAPi.php"; 
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if (!empty($data['data'])) {
            foreach ($data['data'] as $item) {
                $cover = isset($coverImages[$item['Judul']]) ? $coverImages[$item['Judul']] : "images/default.jpg";

                echo '
                <div class="col-3 mt-3">
                    <div class="card shadow-lg">
                        <img src="'.$cover.'" class="card-img-top" alt="Cover Buku">
                        <div class="card-body">
                            <h10 class="card-title">'.$item['Judul'].'</h10>
                            <p class="card-text"><strong>Penulis:</strong> '.$item['Penulis'].'</p>
                            <p class="card-text"><strong>Genre:</strong> '.$item['Genre'].'</p>
                            <p class="card-text"><strong>Tahun:</strong> '.$item['Tahun Terbit'].'</p>
                            <p class="card-text"><strong>Harga:</strong> Rp '.number_format($item['Harga'], 0, ',', '.').'</p>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo '<p class="text-center">Tidak ada data tersedia</p>';
        }
        ?>

    </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-4">
    &copy; <?php echo date("Y"); ?> Tugas 1 dan 2 Mochamad Tegar Abdillah. All Rights Reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
