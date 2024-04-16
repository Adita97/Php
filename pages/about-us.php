<?php 
session_start();
include "navbar.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
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
    <title>CelestialCapture</title>
  </head>
    <div class="about-us">
      <h1>About Us</h1>
      <p>
        Welcome to our world, where passion meets pixels and dreams find their
        visual wings. At <i>CelestialCapture Studios</i>, we are more than just
        a team of photographers; we are dreamweavers armed with cameras and
        fueled by boundless imagination. Our journey began with a shared love
        for storytelling through the art of photography. Each member of our team
        brings a unique perspective, skill set, and a relentless commitment to
        transforming moments into everlasting memories. We don't just capture
        images; we orchestrate visual symphonies that resonate with the essence
        of your dreams. In the realm of creativity, we thrive. Our lenses become
        portals to alternate realities, where the ordinary transforms into the
        extraordinary. From the gentle click of the shutter to the meticulous
        post-production, every step is a dance between technical precision and
        artistic intuition. What sets us apart is our unwavering belief that
        every client's story is unique and deserves to be told in a way that
        reflects their individuality. We collaborate closely with you, blending
        your dreams with our technical expertise to craft images that go beyond
        the visual – they evoke emotions, tell tales, and freeze moments in
        time. We are not just a photography team; we are dream architects ready
        to turn your aspirations into visual poetry. Whether it's a wedding, a
        special event, or a personal portrait session, we approach each project
        with enthusiasm, dedication, and the shared goal of making your dreams
        come true through the lens of our cameras. Join us on this visual
        odyssey, and let's create magic together. Welcome to
        <i>CelestialCapture Studios</i>, where your dreams find a home in every
        frame.
      </p>
    </div>
    <div class="row mx-auto justify-content-center">
      <div class="col-md-3" style="width: auto;">
        <div class="card" style="width: 18rem;">
          <img src="../images/editor.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    
      <div class="col-md-3" style="width: auto;">
        <div class="card" style="width: 18rem;">
          <img src="../images/photographer.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title 2</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    
      <div class="col-md-3" style="width: auto;">
        <div class="card" style="width: 18rem;">
          <img src="../images/videographer.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title 3</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    
      <div class="col-md-3" style="width: auto;">
        <div class="card" style="width: 18rem;">
          <img src="../images/assistant.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title 4</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
    
      <!-- <div class="card col-xl-2 m-1" style="height: 30rem;">
        <img src="../images/assistant.jpg" class="card-img-top" style="height: 15rem; object-fit: cover; object-position: top;" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Assitant</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est dolor rerum consectetur cum dignissimos asperiores ad itaque sunt et. Tenetur.</p>
        </div>
      </div> -->
    </div>
    </div>
    <!------FOOTER------->
    <div id="socialMedia">
      <?php include 'social-media.php' ?>
    </div>
    <div id="footer">
      <?php include 'footer.php' ?>
    </div>
  </body>
</html>
