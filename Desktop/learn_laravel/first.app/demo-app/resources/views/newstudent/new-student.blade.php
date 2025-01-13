<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Responsive banner height */
    #categories-4 {
      padding: 6vh;
      font-size: 1.2rem;
      background: linear-gradient(to right, #f0f2f5, #e6e9ed); /* Professional gradient */
      color: #333333;
      min-height: 80vh; /* Ensures banner has a minimum height */
      overflow: hidden; /* Added to prevent overflow and unwanted scroll bar */
    }

    /* Adjust the image to be fully responsive */
    .right-img {
      max-width: 100%; /* Ensures the image does not exceed its container */
      height: auto;
      padding-right: 10px;
      margin-top: 20px; /* Added space below the image */
      margin-right: -20px; /* Moved the image left */
      max-height: 100%; /* Prevents the image from becoming larger than its container */
    }

    /* Style for the section title text */
    .section-title p {
      color: #555555;
      font-size: 1.1rem;
    }

    /* Dropdown button style for responsiveness */
    .dropdown-toggle {
      font-size: 1rem;
      color: #007bff;
      text-transform: capitalize;
      font-weight: bold;
      margin-top: 20px; /* Added space below the dropdown */
      white-space: nowrap; /* Prevents text from wrapping and reduces overflow */
    }

    .dropdown-menu {
      background-color: #ffffff;
      border: 1px solid #dddddd;
      max-width: 100%; /* Ensures the dropdown doesn't overflow the container */
    }

    .dropdown-item {
      font-size: 0.9rem;
      color: #333333;
    }

    /* Center and style the "Offer" text for visibility */
    .dropdown-toggle span {
      font-weight: bold;
      color: #ffc107; /* Highlighted color */
    }

    /* Style for the "Switch Our Internship" button */
    .btn-outline-success {
      padding: 9px 20px;
      font-size: 1rem;
      margin-top: 20px; /* Added space below the button */
    }

   
    .text-center h4 {    /* change text our company title */
      font-size: 2rem;
      color: rgba(0, 0, 0, 0.564);
    }

    .text-center p {
      font-size: 1rem;
    }

    
    .dropdown-menu {  /* Dropdown menu hidden */
      display: none;
    }

    .dropdown:hover .dropdown-menu {     /* Dropdown menu show hover karne per */
      display: block;
    }
  </style>
</head>
<body>
  <section id="categories-4" class="wide-60 categories-section">
    <div class="digital_course">
      <h4 class="text-center text-success">&bigstar; Connect to Our Pedestal Techno Ltd Pvt Company &bigstar;</h4>
    </div>
    <div class="container">
      <div class="row h-100">
        <div class="col-md-12 d-flex flex-column justify-content-center align-items-center text-center">
          <div class="section-title">
            <h4 class="h3-sm text-color">Our Company Title</h4>
            <p>
              <p style="font-size:1.10rem;"> <span class="text-dark">Unlock your potential with Pedestal Techno Pvt Ltd!</span> 
            Our company offers comprehensive training programs across various courses,
             including Full Stack Development, Graphic Design, UI/UX Design, Cybersecurity,
             ,Digital Marketing and more. We provide internship opportunities in three categories: Free Internship, Paid Internship,
             Traning & Internship, Choose the path that suits you best and take the first 
               step toward building your dream career with hands-on learning and guaranteed placement
                support.</p>
          </div>
          <div class="row w-100">
            <div class="col-md-6 text-start">
              <div class="dropdown">
                <button class="btn dropdown-toggle mt-5 mt-md-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Our Internship Categories <span class="text-info">Offer</span>
                </button>
                <ul class="dropdown-menu w-50">
                  <li><a class="dropdown-item" href="https://htmlcolorcodes.com">Free Internship</a></li>
                  <li><a class="dropdown-item" href="https://facebook.com">Paid Internship</a></li>
                  <li><a class="dropdown-item" href="https://www.example.com">Traning & Internship </a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-5 text-end">
              <img src="image/shopping.jpg" alt="Shopping" class="right-img img-fluid" width="200">
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12 text-center">
          <a href="#">
            <button type="button" class="btn btn-outline-success rounded-pill">Switch Our Internship</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Connect bootstrap with JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
