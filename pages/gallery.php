<?php
session_start();
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="../styles/style.css" />
    <script src="../scripts/pixabayAPI.js" defer></script>
    <link rel="stylesheet" href="../styles/style.css" />
  </head>
  <body>
    <div class="search-container">
      <form id="searchForm">
        <input type="text" id="searchInput" value="Photosession" />
        <button class="search-button" type="submit">Search</button>
      </form>
    </div>

    <div id="gallery"></div>
    <!------FOOTER------->
    <div id="socialMedia">
      <?php include 'social-media.php' ?>
    </div>
    <div id="footer">
      <?php include 'footer.php' ?>
    </div>
  </body>
</html>
