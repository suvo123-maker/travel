<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Community | Wish Trip</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #fff8f0;
      color: #333;
    }

  header {
  background: url('https://www.waldenu.edu/media/5462/seo-2279-bs-group-of-raised-hands-holding-417699019-1200x675') center/cover no-repeat;
  color:#333;
  padding: 60px 20px;
  text-align: center;
  position: relative;
}


    header h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1.1rem;
    }

    .section {
      padding: 60px 20px;
      max-width: 1100px;
      margin: auto;
    }

    .section h2 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 40px;
      color: #e4572e;
    }

    .testimonials {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
    }

    .testimonial {
      background: white;
      border-radius: 12px;
      padding: 20px;
      width: 300px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .testimonial img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .testimonial h4 {
      margin: 10px 0 5px;
      font-size: 16px;
      color: #ff7f50;
    }

    .testimonial p {
      font-size: 14px;
      color: #555;
    }

    .gallery {
      display: flex;
      overflow-x: auto;
      gap: 20px;
      padding-bottom: 10px;
    }

    .gallery img {
      height: 200px;
      border-radius: 10px;
      object-fit: cover;
    }

    .team {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .member {
      background: white;
      border-radius: 12px;
      width: 240px;
      text-align: center;
      padding: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .member img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .member h4 {
      color: #e4572e;
      margin-bottom: 5px;
    }

    .member p {
      font-size: 13px;
      color: #555;
    }

    .footer {
      background: #2a2a2a;
      color: white;
      padding: 40px 20px;
      margin-top: 60px;
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
      .testimonials, .team {
        flex-direction: column;
        align-items: center;
      }

      .gallery img {
        height: 160px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Welcome to the Wish Trip Community</h1>
    <p>Connect. Share. Inspire. Join fellow travelers from around the world.</p>
  </header>

  <section class="section">
    <h2>Traveler Spotlights</h2>
    <div class="testimonials">
      <div class="testimonial">
        <img src="data:image/jpeg;base64,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" alt="Traveler">
        <h4>Priya Sharma</h4>
        <p>“Kerala was magical! The houseboat experience was unforgettable. Thanks Mr. Travel!”</p>
      </div>
      <div class="testimonial">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Traveler">
        <h4>Ravi Mehta</h4>
        <p>“I met amazing people on my Thailand trip. The itinerary was perfect!”</p>
      </div>
      <div class="testimonial">
        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Traveler">
        <h4>Anjali Das</h4>
        <p>“North East India was breathtaking. I’m already planning my next trip!”</p>
      </div>
      <div class="testimonials">
      <div class="testimonial">
        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Traveler">
        <h4>Debdutta Mukharjee</h4>
        <p>“Visiting the Maldives was a once-in-a-lifetime experience — from the breathtaking overwater villas and turquoise lagoons to the warm hospitality and stunning sunsets, every moment felt like living inside a postcard!”</p>
      </div>
    </div>
  </section>

  <section class="section">
    <h2>Shared Moments</h2>
    <div class="gallery">
      <img src="https://www.travelingblog.co.uk/wp-content/uploads/India-Travel.jpg" alt="">
      <img src="https://static.toiimg.com/photo/msid-68848475,width-96,height-65.cms" alt="">
      <img src="https://www.travellersofindia.com/wp-content/uploads/2021/02/Kedarkantha_Trek_Peak_TravellersofIndia_2-1024x684.jpg" alt="">
      <img src="https://travelntrails.com/wp-content/uploads/2020/03/Travel-Destination-in-India-15.jpg" alt="">
      <img src="https://imgstaticcontent.lbb.in/lbbnew/wp-content/uploads/sites/2/2016/07/F5Escapes-i.jpg" alt="">
    </div>
  </section>

  <section class="section">
    <h2>Meet the Team</h2>
    <div class="team">
      <div class="member">
        <img src="https://media.licdn.com/dms/image/v2/D5603AQG6b8JhkKIk7g/profile-displayphoto-scale_400_400/B56ZejN04_HEAk-/0/1750790000829?e=1756339200&v=beta&t=I6-Kv8LWsFW7pOkG0C0Gc6Yp3AyrByZfMtk6IZI3APw" alt="Founder">
        <h4>Suvo Mondal</h4>
        <p>Founder & CEO<br>“Turning dreams into destinations.”</p>
      </div>
      <div class="member">
        <img src="data:image/jpeg;base64,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" alt="Founder">
        <h4>Diya Ghosh</h4>
        <p>Creative Director<br>“Designing journeys with heart.”</p>
      </div>
      <div class="member">
        <img src="https://media.licdn.com/dms/image/v2/D4D03AQFCOaWERwFxMA/profile-displayphoto-scale_400_400/B4DZejRxNSH4Ak-/0/1750791034448?e=1756339200&v=beta&t=nJ5EkGNkNVA7ie-plDBbeIYceCy78zGexvmFbAEkBuE" alt="Founder">
        <h4>Soumyadip Manna</h4>
        <p>Tech Lead<br>“Building seamless travel experiences.”</p>
      </div>
      <div class="member">
        <img src="https://media.licdn.com/dms/image/v2/D4D03AQFZIJBc6HjUPQ/profile-displayphoto-scale_400_400/B4DZejPZMZHkAg-/0/1750790414525?e=1756339200&v=beta&t=tGCglorsLmE0JfJwv1Jbktje62qWVR7AeeOgf04zApo" alt="Founder">
        <h4>Parambratta Roy</h4>
        <p>Community Manager<br>“Connecting travelers worldwide.”</p>
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
          <li><a href="#">Packages</a></li>
          <li><a href="#">Book</a></li>
        </ul>
      </div>
      <div class="footer-box">
        <h3>Extra Links</h3>
        <ul>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Use</a></li>
        </ul>
      </div>
      <div class="footer-box">
        <h3>Contact Info</h3>
        <ul>
          <li>+91-123-456-7890</li>
          <li>info@WishTrip.com</li>
          <li>Kolkata, India</li>
        </ul>
      </div>
      <div class="footer-box">
        <h3>Follow Us</h3>
        <ul>
            <li>Instagram</li>
            <li>Tweeter</li>
            <li>Facebook</li>
        </ul>