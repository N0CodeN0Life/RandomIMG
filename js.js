function loadNextImage() {
    var widthInput = document.getElementById('width-input');
    var heightInput = document.getElementById('height-input');
    var image = document.getElementById('image');
    var loadingIndicator = document.getElementById('loading-indicator');

    var width = parseInt(widthInput.value);
    var height = parseInt(heightInput.value);

    image.style.display = 'none';
    loadingIndicator.style.display = 'block';

    var img = new Image();
    img.onload = function() {
        image.src = img.src;
        image.style.display = 'block';
        loadingIndicator.style.display = 'none';
    };
    img.src = 'https://unsplash.it/' + width + '/' + height + '?random=' + new Date().getTime();
}

  // Перенаправление на index.php
  window.location.replace("index.php");
