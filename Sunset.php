<!DOCTYPE html>
<html>

<head>
    <title>Helio Photography</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #f2f2f2;
        padding: 20px;
    }

    h2 {
        text-align: center;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
        margin-top: 30px;
    }

    .gallery img {
        width: 300px;
        height: 200px;
        object-fit: cover;
        border: 4px solid #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        transition: 0.3s ease;
    }

    .gallery img:hover {
        transform: scale(1.05);
    }
    </style>
</head>

<body>

    <h2>Helio Photography Gallery</h2>

    <div class="gallery">
        <?php
    // 1.jpg to 23.jpg laai load garna
    for ($i = 1; $i <= 23; $i++) {
        $filename = "Helio_photos/" . $i . ".jpg";
        if (file_exists($filename)) {
            echo '<img src="' . $filename . '" alt="Helio Photos ' . $i . '">';
        }
    }
    ?>
    </div>

</body>

</html>