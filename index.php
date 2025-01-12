<?php
include('controller/db.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css" />
    <title>Web Design | Urban Hotel</title>
  </head>
  <body>
    <header class="header">
      <nav>
        <div class="nav__bar">
          <div class="logo">
            <a href="#"><img src="assets/Logo.jpg" alt="logo" /></a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="view/rooms.php">Rooms</a></li>
          <li><a href="view/facilities.php">Facilities</a></li>
          <li><a href="view/about.php">About</a></li>
          <li><a href="models/register.php">Register</a></li>
          <li><a href="models/login.php">Login</a></li>
        </ul>
        <button class="btn nav__btn" onclick="location.href='view/info.php'">Book Now</button>
      </nav>
      <div class="section__container header__container" id="home">
        <p>Simple - Unique - Friendly</p>
        <h1>Make Yourself At Home<br />In Our <span>Hotel</span>.</h1>
      </div>
    </header>

    <section class="section__container booking__container">
      <form action="/" class="booking__form">
        <div class="input__group">
          <span><i class="ri-calendar-2-fill"></i></span>
          <div>
            <label for="checkin">Check In</label>
            <input type="date" id="checkin" name="checkin">
          </div>
        </div>
        <div class="input__group">
          <span><i class="ri-calendar-2-fill"></i></span>
          <div>
            <label for="checkout">Check Out</label>
                <input type="date" id="checkout" name="checkout">
          </div>
        </div>
        <div class="input__group">
          <span><i class="ri-user-fill"></i></span>
          <div>
            <label for="person">Person</label>
            <input type="text" placeholder="person" />
          </div>
        </div>
        <div class="input__group input__btn">
          <button class="btn"><a href="models/register.php">CHECK OUT</a></button>
        </div>
      </form>
    </section>

    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="assets/about.jpg" alt="about" />
      </div>
      <div class="about__content">
        <p class="section__subheader">ABOUT US</p>
        <h2 class="section__header">The Best Holidays Start Here!</h2>
        <p class="section__description">
        Dengan fokus pada akomodasi berkualitas, pengalaman yang dipersonalisasi, 
        dan pemesanan yang lancar, platform kami didedikasikan untuk memastikan bahwa setiap wisatawan 
        memulai liburan impian mereka dengan percaya diri dan kegembiraan.
        </p>
        <div class="about__btn">
          <button class="btn">Read More</button>
        </div>
      </div>
    </section>

    <section class="section__container room__container">
      <p class="section__subheader">OUR LIVING ROOM</p>
      <h2 class="section__header">The Most Memorable Rest Time Starts Here.</h2>
      <div class="room__grid">
        <div class="room__card">
          <div class="room__card__image">
            <img src="assets/deluxe-room.jpg" alt="room" />
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-paint-fill"></i></span>
              <span><i class="ri-shield-star-line"></i></span>
            </div>
          </div>
          <div class="room__card__details">
            <h4>Deluxe Room View</h4>
            <p>
              Bask in luxury with breathtaking ocean views from your private
              suite.
            </p>
            <h5>Starting from <span>Rp1.200.000/night</span></h5>
            
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="assets/standard-room.jpg" alt="room" />
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-paint-fill"></i></span>
              <span><i class="ri-shield-star-line"></i></span>
            </div>
          </div>
          <div class="room__card__details">
            <h4>Standard Cityscape Room</h4>
            <p>
              Experience urban elegance and modern comfort in the heart of the
              city.
            </p>
            <h5>Starting from <span>Rp400.000/night</span></h5>
            
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="assets/family-room.jpg" alt="room" />
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-paint-fill"></i></span>
              <span><i class="ri-shield-star-line"></i></span>
            </div>
          </div>
          <div class="room__card__details">
            <h4>Family Garden Retreat</h4>
            <p>
              Spacious and inviting, perfect for creating cherished memories
              with loved ones.
            </p>
            <h5>Starting from <span>Rp2.000.000/night</span></h5>
       
          </div>
        </div>
      </div>
    </section>

    <section class="service" id="service">
      <div class="section__container service__container">
        <div class="service__content">
          <p class="section__subheader">SERVICES</p>
          <h2 class="section__header">Strive Only For The Best.</h2>
          <ul class="service__list">
            <li>
              <span><i class="ri-shield-star-line"></i></span>
              High Class Security
            </li>
            <li>
              <span><i class="ri-24-hours-line"></i></span>
              24 Hours Room Service
            </li>
            <li>
              <span><i class="ri-headphone-line"></i></span>
              Conference Room
            </li>
            <li>
              <span><i class="ri-map-2-line"></i></span>
              Tourist Guide Support
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="section__container banner__container">
      <div class="banner__content">
        <div class="banner__card">
          <h4>25+</h4>
          <p>Properties Available</p>
        </div>
        <div class="banner__card">
          <h4>350+</h4>
          <p>Bookings Completed</p>
        </div>
        <div class="banner__card">
          <h4>600+</h4>
          <p>Happy Customers</p>
        </div>
      </div>
    </section>

    <div class="testimonials">
        <h1>TESTIMONIALS</h1>
        <div class="cards">
            <div class="card">
                <div class="user">
                    <img src="assets/asri.jpg" alt="User">
                    <span class="name">Asri Sabilla</span>
                </div>
                <p class="comment">Kamarnya bagus, memiliki interior yang sangat unik jadi nyaman mau menginap dihotel ini. memiliki harga yang terjangkau
                  dan ramah dikantong, cocok untuk yang mau liburan ataupun sekedar menginap saja
                </p>
                <div class="stars">&#9733; &#9733; &#9733;</div>
            </div>
            <div class="card">
                <div class="user">
                    <img src="assets/ibrah.jpg" alt="User">
                    <span class="name">Ibrah Adzzikra</span>
                </div>
                <p class="comment">Tempat yang bersih dan nyaman banget, tempat menginap yang bagus dan rekomend buat yang mau meeting di daerah cilandak simatupang,
                  dapat rekomend hotel ini dari teman saya yaitu si kamal anak healing
                </p>
                <div class="stars">&#9733; &#9733; &#9733;</div>
            </div>
            <div class="card">
                <div class="user">
                    <img src="assets/alisha.jpg" alt="User">
                    <span class="name">Alisha Zaharani</span>
                </div>
                <p class="comment">Bagus tempatnya, disekitarnya ada pemandangan kolam yang indah, tempat gym nya lengkap, suka banget kalau kesini bareng keluarga,
                  calon suami juga suka kesini bareng keluarga nya karena rekomend saya
                </p>
                <div class="stars">&#9733; &#9733;</div>
            </div>
        </div>
        <div class="pagination">
            <span class="active"></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
   
  <center><h1>REACH US</h1></center>
  <div class="container">
    <div class="map-wrapper">
      <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126917.8817383604!2d106.77888133503905!3d-6.214620584795245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x3733b211993995f2!2sJakarta%2C+Indonesia!5e0!3m2!1sid!2sid!4v1703609778262!5m2!1sid!2sid&z=11" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="map-details">
        <h3>Popular Hotel Locations in Indonesia</h3>
        <p>Urban Hotel Jakarta</p>
        <a href="https://maps.app.goo.gl/V6yyLSysst5iBhvG9" class="view-map-link">Lihat Peta Hotel lebih lengkap</a>
      </div>
    </div>
    <div class="contact-wrapper">
      <div class="contact-section">
        <h2>Call Us</h2>
        <div class="contact-info">
          <div class="contact-item">
            <img src="assets/phone.png" alt="Phone Icon" class="contact-icon">
            <p>+6283809917868</p>
          </div>
        </div>

        <h2>Follow Us</h2>
        <div class="social-links">
          <a href="#" class="social-link"><img src="assets/twitter.png" alt="Twitter"></a>
          <a href="#" class="social-link"><img src="assets/facebook.png" alt="Facebook"></a>
          <a href="#" class="social-link"><img src="assets/instagram.png" alt="Instagram"></a>
        </div>
      </div>
    </div>
  </div>
    
    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo">
            <a href="#home"><img src="assets/Logo.jpg" alt="logo" /></a>
          </div>
          <p class="section__description">
          Temukan kenyamanan, kemewahan, dan keistimewaan saat Anda menjelajahi pilihan hotel pilihan kami, 
          yang menjadikan setiap momen liburan Anda benar-benar luar biasa.
          </p>
        </div>
        <div class="footer__col">
          <h4>QUICK LINKS</h4>
          <ul class="footer__links">
            <li><a href="#">Browse Destinations</a></li>
            <li><a href="#">Special Offers & Packages</a></li>
            <li><a href="#">Room Types & Amenities</a></li>
            <li><a href="#">Customer Reviews & Ratings</a></li>
            <li><a href="#">Travel Tips & Guides</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>OUR SERVICES</h4>
          <ul class="footer__links">
            <li><a href="#">Concierge Assistance</a></li>
            <li><a href="#">Flexible Booking Options</a></li>
            <li><a href="#">Airport Transfers</a></li>
            <li><a href="#">Wellness & Recreation</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>CONTACT US</h4>
          <ul class="footer__links">
            <li><a href="#">urban_hotel@info.com</a></li>
          </ul>
          <div class="footer__socials">
            <a href="#"><img src="assets/facebook.png" alt="facebook" /></a>
            <a href="#"><img src="assets/instagram.png" alt="instagram" /></a>
            <a href="#"><img src="assets/youtube.png" alt="youtube" /></a>
            <a href="#"><img src="assets/twitter.png" alt="twitter" /></a>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2023 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="css/main.js"></script>
  </body>
</html>