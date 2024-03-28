<?php
include 'pages/navbar.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CelestialCapture Studios</title>
    <!--Bootastrap-->
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
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />

    <script src="scripts/slideshow.js" defer></script>
    <!-- <script src="/My-first-website/scripts/navbar.js" defer></script> -->
  </head>

  <body>
    
    <!--Introduction -->
    <div class="introduction">
      <img control src="images/warm-portrait.jpg" alt="" />
      <div class="introduction-text">
        <h1>
          Through the Lens: <br />Capturing Moments, <br />Creating Memories
        </h1>
        <h4>
          Seize the extraordinary through the lens of unforgettable moments.
          Immerse yourself in experiences that etch memories into the fabric of
          time. We invite you to capture the magic, the laughter, and the joy so
          that you never forget the stories written in the language of moments.
          Your indelible memories start here, framed in the beauty of each
          captured instant.
        </h4>
        <a id="book-now-button" class="button" href="#">Book now</a>
      </div>
    </div>
    <!--End of introduction-->

    <!--Why Us Section-->
    <div class="why-us">
      <h1 class="section-title">Why us?</h1>
      <div class="why-us-container">
        <div class="row">

          <div class="col-xl-6">
            <img src="images/photography-gear.jpg" alt="" width="500px" />
          </div>
          <div class="col-xl-6 text-start justify-content-center m-auto pt-2">
            <h2>Cutting-Edge Technology for Captivating Imagery</h2>
            <p>
              Showcase your commitment to staying at the forefront of
              photographic technology. Highlight the use of the latest camera
              equipment, innovative editing software, and any emerging
              technologies that contribute to creating stunning and
              contemporary images.
            </p>
          </div>
        </div>
      </div>
        <hr />
        <div class="why-us-card-reverse">
          <img
            src="images/Adelina-+-Moon.jpg"
            alt=""
            height="500px"
            class="image"
          />
          <div>
            <h2>Exceptional Portfolio Across Diverse Genres</h2>
            <p>
              Display a diverse and exceptional portfolio that spans various
              photography genres. From breathtaking landscapes to intimate
              portraits and dynamic event coverage, your portfolio should
              reflect a wide range of skills and styles.
            </p>
          </div>
        </div>
        <hr />
        <div class="why-us-card">
          <img src="images/before-after.jpg" alt="" width="500px" />
          <div>
            <h2>Meticulous Editing for Polished Perfection</h2>
            <p>
              Highlight your commitment to meticulous post-processing and
              editing. Showcase before-and-after examples in your portfolio to
              illustrate the transformative impact of your editing skills.
              Communicate that each photograph undergoes a detailed editing
              process to enhance its visual appeal while maintaining
              authenticity.
            </p>
          </div>
        </div>
      </div>
    </div>
    <hr />
    <!-- End of Why Us Section -->

    <!-- SlideShow -->
    <div class="slideshow-container">
      <!-- Slides -->
      <div class="mySlides">
        <img src="images/wedding.jpg" alt="Slide 1" />
        <div>
          <h1>Wedding Photography</h1>
        </div>
      </div>

      <div class="mySlides">
        <img src="images/product.jpg" alt="Slide 2" />
        <div>
          <h1>Product Photography</h1>
        </div>
      </div>

      <div class="mySlides">
        <img src="images/baby.jpg" alt="Slide 3" />
        <div>
          <h1>Newborn Photography</h1>
        </div>
      </div>

      
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/My-first-website/images/wedding.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/My-first-website/images/product.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div id="socialMedia"></div>
    <div id="footer"></div>
    <script src="./scripts/footer.js"></script>
  </body>
</html>
