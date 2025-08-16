<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Us | Wish Trip</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #fff8f0;
    }

    .hero-banner {
      background-image: url('https://images.unsplash.com/photo-1599484233778-5bdc6b69bbe3?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YmFyY2Vsb25hJTIwYmVhY2h8ZW58MHx8MHx8fDA%3D');
      background-size: cover;
      background-position: center;
      height: 40vh;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
    }

    

    .hero-banner h1 {
      font-size: 3rem;
      z-index: 2;
    }

    nav {
      position: absolute;
      top: 15px;
      right: 30px;
      z-index: 3;
    }

    nav a {
      text-decoration: none;
      background-color: white;
      color: #222;
      padding: 8px 16px;
      border-radius: 5px;
      font-weight: bold;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    nav a:hover {
      background-color: #ff7f50;
      color: white;
    }

    .about-section {
      padding: 60px 20px;
      text-align: center;
      background-color: #fff1e6;
    }

    .about-text h2 {
      font-size: 26px;
      margin-bottom: 20px;
    }

    .about-text p {
      max-width: 700px;
      margin: auto;
      font-size: 16px;
      color: #333;
      line-height: 1.6;
    }

    .features {
      display: flex;
      justify-content: center;
      align-items: stretch;
      gap: 40px;
      margin-top: 40px;
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
      flex-wrap: nowrap;
    }

    .features div {
      flex: 1;
      text-align: center;
      padding: 24px;
      background: #ffffff;
      border-radius: 16px;
      min-width: 220px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      transition: transform 0.4s, background 0.4s;
    }

    .features div:hover {
      transform: translateY(-8px);
      background: #fff6f1;
    }

    .features i {
      font-size: 36px;
      color: #ff7f50;
      margin-bottom: 12px;
    }

    .features p {
      font-size: 16px;
      font-weight: 600;
      color: #222;
    }

    .footer {
      background: #2a2a2a;
      color: white;
      padding: 40px 20px;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      max-width: 1100px;
      margin: auto;
    }

    .footer-box {
      flex: 1;
      margin: 10px;
    }

    .footer-box h3 {
      margin-bottom: 15px;
    }

    .footer-box ul {
      list-style: none;
    }

    .footer-box ul li {
      margin-bottom: 10px;
    }

    .footer-box ul li a {
      color: #ccc;
      text-decoration: none;
    }

    .footer p {
      text-align: center;
      margin-top: 20px;
    }

    @media (max-width: 768px) {
      .features {
        flex-direction: column;
        gap: 30px;
        padding: 0 20px;
      }
    }
  </style>
</head>
<body>

  <section class="hero-banner">
    <nav>
      <a href="index.php">Home</a>
    </nav>
    <h1>ABOUT US</h1>
  </section>

  <section class="about-section">
    <div class="about-text">
      <h2>Why Choose Us?</h2>
      <p>
       At Wish Trip, your journey is our passion. 
       We offer expertly crafted packages, exclusive deals, and a seamless booking experience.
       Our dedicated travel consultants provide 24/7 support, ensuring your trip runs smoothly from start to finish. 
       Safety, comfort, and customer satisfaction are our top priorities. With a network of trusted partners worldwide, we bring you the best in travel—memorable experiences, tailored adventures, and unbeatable value. 
       Choose us for a journey you’ll cherish forever.
      </p>

      <div class="features">
        <div>
          <i class="fa-solid fa-map-location-dot"></i>
          <p>Easy Navigation</p>
        </div>
        <div>
          <i class="fa-solid fa-headset"></i>
          <p>24/7 Support</p>
        </div>
        <div>
          <i class="fa-solid fa-globe"></i>
          <p>Global Reach</p>
        </div>
      </div>
    </div>
  </section>

  <section class="footer">
    <div class="footer-content">
      <div class="footer-box">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Package</a></li>
          <li><a href="#">Book</a></li>
        </ul>
      </div>
      <div class="footer-box">
        <h3>Extra Links</h3>
        <ul>
          <li><a href="#">Ask Questions</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Use</a></li>
        </ul>
      </div>
      <div class="footer-box">
        <h3>Contact Info</h3>
        <ul>
          <li>+91-123-456-7890</li>
          <li>info@mrtravel.com</li>
          <li>Kolkata, India</li>
        </ul>
      </div>
      <div class="footer-box">
        <h3>Follow Us</h3>
        <ul>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
        </ul>
      </div>
    </div>
    <p>Created by <span style="color: #1e90ff;">Mr. Travel Team</span> | © All Rights Reserved</p>
  </section>

</body>
</html>