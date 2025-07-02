<!DOCTYPE html>
<html>

<head>
    <title>Cloud Photography</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #f2f2f2;
        padding: 80px;
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
        width: 350px;
        height: 250px;
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

    <h2>Cloud Photography Gallery</h2>

    <div class="gallery">
        <?php
    // 1.jpg to 23.jpg laai load garna
    for ($i = 1; $i <= 23; $i++) {
        $filename = "Cloud/" . $i . ".jpg";
        if (file_exists($filename)) {
            echo '<img src="' . $filename . '" alt="Cloud Photos ' . $i . '">';
        }
    }
    ?>
    </div>

</body>

</html>