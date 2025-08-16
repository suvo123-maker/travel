<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Special Deals | Wish Trip</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #fff4e6;
      color: #333;
    }

    header {
      background-color: #ff7f50;
      color: white;
      padding: 30px;
      text-align: center;
      font-size: 2.2rem;
      font-weight: bold;
    }

    .carousel-container {
      overflow-x: auto;
      white-space: nowrap;
      padding: 40px 20px;
      scroll-behavior: smooth;
    }

    .carousel-container::-webkit-scrollbar {
      height: 10px;
    }

    .carousel-container::-webkit-scrollbar-thumb {
      background: #ff7f50;
      border-radius: 5px;
    }

    .deal-card {
      display: inline-block;
      background: white;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      width: 240px;
      margin-right: 20px;
      vertical-align: top;
      transition: transform 0.3s;
    }

    .deal-card:hover {
      transform: translateY(-6px);
    }

    .deal-header {
      background: #ffb284;
      padding: 10px;
      text-align: center;
      color: white;
      font-weight: bold;
      font-size: 16px;
    }

    .deal-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    .deal-card .details {
      padding: 14px;
    }

    .price {
      font-size: 15px;
      font-weight: bold;
      color: #2a9d8f;
      margin-bottom: 6px;
    }

    ul.inclusions {
      list-style: none;
      padding: 0;
      font-size: 13px;
      color: #444;
      line-height: 1.4;
    }

    ul.inclusions li::before {
      content: "✔";
      color: #ff7f50;
      margin-right: 6px;
    }

    .deal-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #f7f7f7;
      padding: 8px 12px;
      font-size: 12px;
      color: #666;
    }

    .deal-footer i {
      margin-right: 4px;
      color: #ff7f50;
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
      .deal-card {
        width: 80%;
      }

      .footer-content {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <header>SPECIAL DEALS</header>

  <div class="carousel-container">

    <div class="deal-card">
      <div class="deal-header">Thailand</div>
      <img src="https://wallpaperaccess.com/full/2751085.jpg" alt="Thailand">
      <div class="details">
        <div class="price">₹29,999 / person</div>
        <ul class="inclusions">
          <li>Air Tickets</li>
          <li>4 Star Hotel</li>
          <li>Local Tours</li>
        </ul>
      </div>
      <div class="deal-footer">
        <span><i class="fa-solid fa-heart"></i>120</span>
        <span><i class="fa-solid fa-comment"></i>30</span>
        <span><i class="fa-solid fa-clock"></i>5 Days</span>
      </div>
    </div>

    <div class="deal-card">
      <div class="deal-header">Kerala</div>
      <img src="https://wallpapercave.com/wp/wp2649841.jpg" alt="Kerala">
      <div class="details">
        <div class="price">₹19,499 / person</div>
        <ul class="inclusions">
          <li>Houseboat Stay</li>
          <li>All Meals</li>
          <li>Backwater Cruise</li>
        </ul>
      </div>
      <div class="deal-footer">
        <span><i class="fa-solid fa-heart"></i>89</span>
        <span><i class="fa-solid fa-comment"></i>17</span>
        <span><i class="fa-solid fa-clock"></i>4 Days</span>
      </div>
    </div>

    <div class="deal-card">
      <div class="deal-header">Maldives</div>
      <img src="https://static.vecteezy.com/system/resources/previews/008/009/822/non_2x/sunset-on-maldives-island-luxury-water-villas-resort-and-wooden-pier-beautiful-sky-and-clouds-and-beach-background-for-summer-vacation-holiday-and-travel-concept-photo.jpg" alt="Maldives">
      <div class="details">
        <div class="price">₹54,999 / person</div>
        <ul class="inclusions">
          <li>Beach Villa</li>
          <li>Snorkeling Tour</li>
          <li>Island Transfers</li>
        </ul>
      </div>
      <div class="deal-footer">
        <span><i class="fa-solid fa-heart"></i>210</span>
        <span><i class="fa-solid fa-comment"></i>56</span>
        <span><i class="fa-solid fa-clock"></i>6 Days</span>
      </div>
    </div>
<div class="deal-card">
      <div class="deal-header">Leh-Ladakh Adventure</div>
      <img src="https://wallpapercave.com/wp/wp7029202.jpg" alt="Maldives">
      <div class="details">
        <div class="price">₹34,999 / person</div>
        <ul class="inclusions">
          <li>Pangong Lake & Nubra Valley</li>

<li>Bike Ride Option</li>

<li>Oxygen Support & Permitss</li>
        </ul>
      </div>
      <div class="deal-footer">
        <span><i class="fa-solid fa-heart"></i>210</span>
        <span><i class="fa-solid fa-comment"></i>56</span>
        <span><i class="fa-solid fa-clock"></i>6 Days</span>
      </div>
    </div>

    <div class="deal-card">
      <div class="deal-header">Goa beach Escape</div>
      <img src="https://ik.imagekit.io/hydlcbl5qlg/public/misc/YtiZWUwszG0NPdEkqQsxfc9g5uEhqvHmDLQZj1fk.jpg?tr=h-0,w-800,pr-true,fo-auto" alt="Kerala">
      <div class="details">
        <div class="price">₹14,999 / person</div>
        <ul class="inclusions">
          <li>Beach Resort Stay</li>


          <li>Water Sports Package</li>
          <li>Sunset Cruise</li>
        </ul>
      </div>
      <div class="deal-footer">
        <span><i class="fa-solid fa-heart"></i>89</span>
        <span><i class="fa-solid fa-comment"></i>17</span>
        <span><i class="fa-solid fa-clock"></i>4 Days</span>
      </div>
    </div>
    <div class="deal-card">
      <div class="deal-header">Bali, Indonesia</div>
      <img src="https://cdn.getyourguide.com/img/location/58bfe50f4b46e.jpeg/88.jpg" alt="Kerala">
      <div class="details">
        <div class="price">₹39,999 / person</div>
        <ul class="inclusions">
          <li>Airfare & Airport Transfers</li>

<li>3 Nights in Ubud + 2 Nights in Seminyak</li>

<li>Temple & Waterfall Tours</li>
        </ul>
      </div>
      <div class="deal-footer">
        <span><i class="fa-solid fa-heart"></i>89</span>
        <span><i class="fa-solid fa-comment"></i>17</span>
        <span><i class="fa-solid fa-clock"></i>4 Days</span>
      </div>
    </div>
    <div class="deal-card">
      <div class="deal-header">Manali & Solang Valley</div>
      <img src="https://wallpaperaccess.com/full/3548820.jpg" alt="Kerala">
      <div class="details">
        <div class="price">₹18,499 / person</div>
        <ul class="inclusions">
          <li>Volvo Bus from Delhi</li>

<li>Snow Activities & Paragliding</li>

<li>3-Star Hotel with Breakfast</li>
          
        </ul>
      </div>
      <div class="deal-footer">
        <span><i class="fa-solid fa-heart"></i>89</span>
        <span><i class="fa-solid fa-comment"></i>17</span>
        <span><i class="fa-solid fa-clock"></i>4 Days</span>
      </div>
    </div>
    <div class="deal-card">
      <div class="deal-header">Dubai Explorer</div>
      <img src="https://lebensart-sh.de/wp-content/uploads/2022/05/Opener1.jpeg" alt="Kerala">
      <div class="details">
        <div class="price">₹100200 / person</div>
        <ul class="inclusions">
          <li>Flights & 4-Star Hotel</li>

<li>Desert Safari with BBQ Dinner</li>

<li>Burj Khalifa Entry & City Tou</li>
        </ul>
      </div>
      <div class="deal-footer">
        <span><i class="fa-solid fa-heart"></i>89</span>
        <span><i class="fa-solid fa-comment"></i>17</span>
        <span><i class="fa-solid fa-clock"></i>5 Days</span>
      </div>
    </div>
    <div class="deal-card">
      <div class="deal-header">Andaman Islands</div>
      <img src="https://www.indiantempletour.com/wp-content/uploads/2022/08/Andaman-and-Nicobar-Islands-Package-1.jpg" alt="Kerala">
      <div class="details">
        <div class="price">₹59000/ person</div>
        <ul class="inclusions">
          <li>Ferry Transfers & Beach Resort Stay</li>

<li>Scuba Diving & Snorkeling</li>

<li>Cellular Jail Light Show</li>
        </ul>
      </div>
      <div class="deal-footer">
        <span><i class="fa-solid fa-heart"></i>89</span>
        <span><i class="fa-solid fa-comment"></i>17</span>
        <span><i class="fa-solid fa-clock"></i>4 Days</span>
      </div>
    </div>


  </div>

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
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
        </ul>
      </div>
    </div>
    <p>Created by <span style="color: #1e90ff;">Wish Trip Team</span> | © All Rights Reserved</p>
  </section>

</body>
</html>