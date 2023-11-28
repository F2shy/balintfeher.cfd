<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoTech Solutions</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./resources/css/style.css">
  <script src="./resources/js/jquery-sls.js"></script>

</head>
<style>
  body {
    font-family: Open Sans, sans-serif;
  }
  .hero{
    position: relative;
    overflow: hidden;
    height: 500px;
  }
  .hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }

  .hero-video video {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }
  .navbar {
      background-color: white;
      transition: box-shadow 0.3s;
    }

    .navbar.scrolled {
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Adjust spacing and alignment as needed */
    .navbar-nav {
      font-size: 16px;
      text-transform: uppercase;
      font-weight: 600;
    }
    video {
      object-fit: fill;
    }
    .navbar-nav .nav-item .nav-link:hover {
    color: #198754; /* Replace with your desired hover color */
  }
</style>
<body lang="en">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="./resources/img/logo1.png" alt="Logo" width="80">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
          <p lang="en">Select language:</p>
			<select id="lang-switcher" class="form-control" onchange="selectLanguage(this);">
			  <option value="tr">tr</option>
			  <option value="de">de</option>
			  <option value="en">en</option>
			</select>
          </li>
         
        </ul>
      </div>
<!-- Add search icon and search box -->
<div class="nav-item ml-auto" style="      padding-left: 10px;">
      <form class="form-inline my-2 my-lg-0">
        <div class="input-group">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
      </div>
    </div>
    </div>
  </nav>

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="display-4" lang="en">Innovating Technology for a Greener Tomorrow</h1>
        <p class="lead" lang="en">Explore our range of eco-friendly tech products.</p>
        <a href="#" class="btn btn-primary" lang="en">Shop Now</a>
      </div>
    </div>
  </div>
  <div class="hero-video">
    <video autoplay muted loop>
      <source src="https://www.ecoproducts.sk/media/videos/2018/03/23/header-video_23.3.18.mp4" type="video/mp4">
      <!-- Include additional source elements for different video formats -->
    </video>
  </div>
</section>
<br>
<section class="about">
<div class="container">
    <div class="row">
      <div class="col-md-4">
      <i class="fa fa-leaf" aria-hidden="true" style="font-size: 64px;"></i>
      <h1>Ekologické riešenie</h1>
      <h5>Vďaka špecifickým fyzikálno-chemickým vlastnostiam je zeolit ekologickým prostriedkom. Je bezpečný pre ľudí, pôdu, rastliny a zvieratá.</h5>
        </div>
        <div class="col-md-4">
      <i class="fa fa-leaf" aria-hidden="true" style="font-size: 64px;"></i>
      <h1>Ekologické riešenie</h1>
      <h5>Vďaka špecifickým fyzikálno-chemickým vlastnostiam je zeolit ekologickým prostriedkom. Je bezpečný pre ľudí, pôdu, rastliny a zvieratá.</h5>
        </div>
        <div class="col-md-4">
      <i class="fa fa-leaf" aria-hidden="true" style="font-size: 64px;"></i>
      <h1>Ekologické riešenie</h1>
      <h5>Vďaka špecifickým fyzikálno-chemickým vlastnostiam je zeolit ekologickým prostriedkom. Je bezpečný pre ľudí, pôdu, rastliny a zvieratá.</h5>
        </div>
    </div>
  </div>
</section>
<br>
<!-- Products Section -->
<section class="products">
  <div class="container">
    <h2 class="text-center mb-5">Featured Products</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="./resources/img/product1.jpeg" alt="Product 1" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">SolarCharge 5000</h5>
            <p class="card-text">Harness the power of the sun with our SolarCharge 5000 power bank.</p>
            <p class="card-text">$49.99</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- Add more product cards here -->
      </div>
      <div class="col-md-4">
        <!-- Add more product cards here -->
      </div>
    </div>
  </div>
</section>

<!-- Add more sections here (About Us, Blog, Testimonials, Contact) -->
<!-- Contact Form Section -->
<section class="contact">
    <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            // Send email
            $to = "contact@ecotechsolutions.com";
            $subject = "New Inquiry from EcoTech Solutions Website";
            $headers = "From: $email";

            mail($to, $subject, $message, $headers);

            echo '<div class="alert alert-success" role="alert">Thank you for contacting us! We will get back to you soon.</div>';
        }
        ?>
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container text-center">
    <p>&copy; 2023 EcoTech Solutions. All rights reserved.</p>
  </div>
</footer>
<script>
    $(document).ready(function () {
		// Initialization
		$.sls.init({
			defaultLang: "en",
			path: "./languages/",
			persistent: true,
			clean: true,
			attributes: ["title", "data-my-custom-attribute"],
			observe: document
		});

		// Event hook example
		$(document).on("jquery-sls-language-switched", function(event){
			// Make select element reflect current language if language loaded from persistence
			if ( $('#lang-switcher').val != $.sls.getLang() ) {
				$('#lang-switcher').val($.sls.getLang());
			}
			console.log( "Language switched: " + event.message );
		});

		// Dynamic text example
		setTimeout(function(){
			//$('#dynamic').text('This is a dynamic text');
			//$('#dynamic').html('This is a dynamic text');
			//$('#dynamic').html('<p>This is a dynamic text</p>');
			$('#dynamic').html('<p lang="en">This is a dynamic text</p>');
		}, 3000);

		// Manually set language
		//$.sls.setLang("tr");

	});

	function selectLanguage(select) {
		$.sls.setLang(select.value);
	}
</script>
<!-- Scripts -->
<script src="https://kit.fontawesome.com/797cc076e5.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./resources/js/scripts.js"></script>
</body>
</html>
