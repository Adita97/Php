<?php
session_start();
include './navbar.php';
require_once 'pdo.php';

if( isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) &&isset($_POST['subject']) && isset($_POST['message']))
{
  $sql ="INSERT INTO contact_form (first_name, last_name, email, subject, message)
  VALUES (:first_name, :last_name, :email, :subject, :message)";
  $stmt = $conn->prepare($sql);
  $stmt->execute(array(
    ':first_name' => $_POST['first_name'],
    ':last_name' => $_POST['last_name'],
    ':email' => $_POST['email'],
    ':subject' => $_POST['subject'],
    ':message' => $_POST['message']

  ));
}

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
    <script src="../scripts/formValidation.js" defer></script>
    <title>CelestialCapture</title>
  </head>
  <body>
    <div class="contact-section">
      <h1 class="section-title">Contact Us</h1>
      <div class="contact-container">

        <div class="container">
          <div class="row justify-content-center mt-5">
            <div class="col-md-8">
              <div class="form-container">
                <form
                  class="contact-form"
                  method ='POST'
                >
                  <div class="form-row">
                    <div class="col">
                      <span id="firstNameError" class="error"></span>
                      <input
                        type="text"
                        id="first-name"
                        class="form-control contact-input mb-3"
                        placeholder="First Name*"
                        name="first_name"
                      />
                    </div>
                    <div class="col">
                      <span id="lastNameError" class="error"></span>
                      <input
                        type="text"
                        id="last-name"
                        class="form-control contact-input mb-3"
                        placeholder="Last Name*"
                        name="last_name"
                      />
                    </div>
                  </div>
                  <span id="emailError" class="error"></span>
                  <input
                    class="form-control contact-input mb-3"
                    id="contact-email"
                    type="text"
                    placeholder="Email Address*"
                    name = "email"
                  />
                  <span id="subjectError" class="error"></span>
                  <input
                    id="subject"
                    class="form-control contact-input mb-3"
                    type="text"
                    placeholder="Subject"
                    name ="subject"
                  />
                  <span id="messageError" class="error"></span>
                  <textarea
                    id="message"
                    placeholder="Your message goes here..."
                    name="message"
                    class="form-control contact-input mb-3"
                    rows="5"
                  ></textarea>
                  <div class="submit-container">
                    <button class="btn contact-btn btn-primary" type="submit">
                      Submit
                    </button>
                    <h1 id="submitCount"></h1>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- <button class="form-button" type="submit">Submit</button> -->
        <div class="map footer-section">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.664838406176!2d-80.10497081275241!3d26.75506960689072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d92a0ac5758947%3A0x3ba6792a1334284a!2s141%20Heritage%20Way%2C%20West%20Palm%20Beach%2C%20FL%2033407%2C%20USA!5e0!3m2!1sen!2sro!4v1706527816552!5m2!1sen!2sro"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
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
