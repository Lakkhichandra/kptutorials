<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
include('header.php');



// Fetch all images from 'category_image' column in 'categories' table
$imagesQuery = "SELECT category_image FROM categories"; 
$imagesStmt = $pdo->query($imagesQuery);
$category_images = $imagesStmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if (!empty($category_images)): ?>
    <!-- Carousel HTML -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        
        <!-- Indicators -->
        <div class="carousel-indicators">
            <?php foreach ($category_images as $index => $image): ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>" aria-label="Slide <?= $index + 1 ?>"></button>
            <?php endforeach; ?>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <?php foreach ($category_images as $index => $image): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <img src="img/<?= htmlspecialchars($image['category_image']) ?>" class="d-block w-100" alt="Slide <?= $index + 1 ?>">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php else: ?>
    <p class="text-center text-danger">No images found in the database.</p>
<?php endif; ?>


  <section class="container-fluid my-5">
    <div class="row justify-content-center">
      <div class="col-md-10 text-center">
        <h2 class="mb-4">Welcome to Swiss Decor: Your Home's Perfect Makeover Partner</h2>
        <p>
          At Swiss Decor, we don’t just create products; we craft experiences. Our passion lies in transforming spaces with the finest materials and exceptional craftsmanship. 
          Whether it's a home renovation, a new commercial setup, or a design overhaul, we are committed to providing elegant and practical interior solutions that elevate your living and working spaces.
    
          Specializing in premium PVC wall panels, our offerings are designed to enhance both aesthetics and functionality. When you choose Swiss Decor, you're choosing unmatched quality, innovation, and a trusted partner in interior design.
        </p>
      </div>
    </div>
  </section>
  

  <section class="py-5 bg-light">
    <div class="container-fluid" style="background-image: url('img/wall_about.png'); height: 400px;">
      <div class="row">
        <!-- Heading Section -->
        <div class="col-md-12 text-center bg-image" style=" background-size: cover; background-position: center; background-repeat: no-repeat; color: white;">
          <h1 class="mb-4">Tailored Solutions for Every Space</h1>
        </div>
        <!-- Content Section -->
        <div class="col-md-12">
          <ul class="list-unstyled text-light">
            <li class="mb-4">
              <strong>At Swiss Decor</strong>, we understand that no two spaces are alike. This is why we offer customizable solutions that can be tailored to your specific preferences and needs. Whether you’re seeking panels that mimic the look of natural wood, stone, or something more futuristic, we provide endless options to meet your design aspirations.
            </li>
            <li class="mb-4">
              Our team is dedicated to helping you personalize your interiors—from selecting the right textures and patterns to creating custom sizes for a perfect fit. We believe that every wall tells a story, and with Swiss Decor, your walls will speak of luxury, comfort, and taste.
            </li>
            <li>
              Whether you need a contemporary statement piece for your living room or something more subtle for your office, our wide variety of PVC wall panels ensures you’ll find the perfect match for your space. Let us help you create an atmosphere that reflects your style, without compromising on practicality.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
<div class="card-container">
  <div class="card">
      <img src="img/card1.jpg" alt="Image 1">
      <h3>Aluminium composite panel(ACP)</h3>
  </div>
  <div class="card">
      <img src="img/card2.jpg" alt="Image 2">
      <h3> Charcoal louvers</h3>
  </div>
  <div class="card">
    <img src="img/card3.jpg" alt="Image 3">
      <h3> Gypsum board</h3>
  </div>
  <div class="card">
    <img src="img/card4.jpg" alt="Image 4">
      <h3>PVC Wall Panels</h3>
  </div>
  <div class="card">
    <img src="img/card5.jpg" alt="Image 5">
      <h3>UV Sheets</h3>
  </div>
  <div class="card">
    <img src="img/card6.jpg" alt="Image 6">
      <h3>WPC Louvers</h3>
  </div>
</div>
<section class="container py-5">
  <!-- Title Section -->
  <p class="m-5 text-center display-6">Why Choose Swiss Decor?</p>
  <p class="mb-5 text-center">
    Swiss Decor has earned its reputation through a blend of design expertise, superior materials, and an unwavering commitment to customer satisfaction. Here’s what makes us the preferred choice for thousands of clients:
  </p>
  
  <!-- Accordion Section -->
  <div class="why_choose_us">
    <div class="accordion" id="accordionExample">
      <!-- Accordion Item 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <strong>Innovative Design Solutions</strong>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Our team of designers continuously explores global trends and cutting-edge technology to create <strong>stylish and modern PVC panels</strong>. With a range of <strong>textures, patterns, and colors</strong>, our panels add depth and character to your space, no matter the style—be it <strong>minimalist, contemporary, or traditional</strong>.
          </div>
        </div>
      </div>
      <!-- Accordion Item 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <strong>Unmatched Durability</strong>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Our PVC panels are not only visually appealing but also engineered to withstand time and wear. Resistant to moisture, termites, and impact, they offer <strong>long-lasting beauty</strong> while being low maintenance. Whether it’s your living room, bedroom, or a high-traffic area like an office, our panels are built to handle it all.
          </div>
        </div>
      </div>
      <!-- Accordion Item 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <strong>Eco-Friendly Approach</strong>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Sustainability is at the heart of everything we do. Our panels are crafted using <strong>eco-friendly materials</strong> that reduce environmental impact without compromising on quality or durability. At Swiss Decor, we care about your home and the planet—our products are <strong>safe, non-toxic, and recyclable</strong>.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="row">
    <!-- Contact Info Section -->
    <div class="col-md-6 d-flex flex-column justify-content-center">
      <ul class="list-unstyled">
        <li><strong>Phone:</strong> +1 234 567 890</li>
        <li><strong>Email:</strong> info@example.com</li>
        <li><strong>Address:</strong> 1234 Street Name, City, Country</li>
      </ul>
    </div>

    <!-- Contact Form Section -->
    <div class="col-md-6">
      <h2 class="mb-4">Get in Touch</h2>
      <form method="post" id="contact-form" action="">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="full-name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
        </div>
        <div class="mb-3">
          <label for="tel" class="form-label">Contact Number</label>
          <input type="tel" name="phone-number" class="form-control" id="tel" placeholder="Your Contact Number">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" name="message" id="message" rows="4" placeholder="Your Message"></textarea>
        </div>
        <button type="submit" name="contact-submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</section>


</div>
<footer class="footer container-fluid bg-dark text-white py-4">
  <div class="row">
    <!-- Column 1: Copyright -->
    <div class="col-lg-4 col-xl-4 mb-3 mb-lg-0">
      <div class="d-flex justify-content-center">
        <p class="mb-0">© 2024 Swiss Decor. All rights reserved.</p>
      </div>
    </div>

    <!-- Column 2: Navigation Links -->
    <div class="col-lg-4 col-xl-4 mb-3 mb-lg-0">
      <nav class="d-flex justify-content-center">
        <a href="#" class="text-white me-3 text-decoration-none">Download</a>
        <a href="#" class="text-white me-3 text-decoration-none">Terms &amp; Conditions</a>
        <a href="#" class="text-white text-decoration-none">Policy</a>
      </nav>
    </div>

    <!-- Column 3: Website Credit -->
    <div class="col-lg-4 col-xl-4 mb-3 mb-lg-0">
      <div class="d-flex justify-content-center">
        <p class="mb-0">
          Website by 
          <a href="https://myumid.com/" class="text-decoration-none" style="color: blue;">UMID Infotech</a>
        </p>
      </div>
    </div>
  </div>

  <!-- Social Media Icons -->
<ul class="social_media">
  <!-- Facebook Icon -->
  <li>
    <a href="https://www.facebook.com/swissdecormau/" target="_blank">
      <img src="img/fb.jpg" alt="Facebook" class="social_icon">
    </a>
  </li>
  <!-- WhatsApp Icon -->
  <li>
    <a href="https://wa.me/919839610090" target="_blank">
      <img src="img/wap.jpg" alt="WhatsApp" class="social_icon">
    </a>
  </li>
</ul>

</footer>

  
</body>
</html>

<!-- form -->
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone-number'];
    $message = $_POST['message'];

    try {
      // Prepare the SQL query using placeholders
      $stmt = $pdo->prepare("INSERT INTO contact_form_details (fullname, email, phone, message) VALUES (:fullname, :email, :phone, :message)");

      // Bind the parameters to the prepared statement
      $stmt->bindParam(':fullname', $name, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
      $stmt->bindParam(':message', $message, PDO::PARAM_STR);

      // Execute the query
      if ($stmt->execute()) {
         
      } else {
          echo "Error: Unable to insert data.";
      }
  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
}

// Close the connection (optional in PDO, but good practice)
$pdo = null;
?>