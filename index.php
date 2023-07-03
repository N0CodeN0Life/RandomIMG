<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css.css" rel="stylesheet">
    <title>Генератор картинок</title>
</head>
<body>
    
    <div class="controls">

        <div class="input-container">
            <label for="width-input">Width:</label>
            <input id="width-input" type="number" min="1" step="1" value="1920">
        </div>

        <div class="input-container">
            <label for="height-input">Height:</label>
            <input id="height-input" type="number" min="1" step="1" value="1080">
        </div>

        <button class="next-button" onclick="loadNextImage()">Next Image</button>
    </div>

    <div class="image-container">
        <?php
        $width = $_POST['width'] ?? 1920;
        $height = $_POST['height'] ?? 1080;
        $imageURL = 'https://unsplash.it/' . $width . '/' . $height;
        echo '<img id="image" src="' . $imageURL . '" alt="Image">';
        ?>
        <progress id="loading-indicator" class="loading-indicator" style="display: none;"></progress>
    </div>




<script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
<script src="js.js"></script>
</body>
