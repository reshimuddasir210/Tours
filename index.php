<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kash Track Holidays - Kashmir & Ladakh Tours</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Flatpickr -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <style>
    :root {
      --primary: #1e3a8a;
      --accent: #ea580c;
      --light-bg: #f9fafb;
      --whatsapp: #25D366;
      --footer-green: #2e7d32;
      --fb-blue: #1877f2;
      --ig-pink: #e1306c;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    html, body {
      width: 100%; height: 100%; overflow-x: hidden;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: var(--light-bg);
      color: #333;
    }

    .whatsapp-float {
      position: fixed; bottom: 25px; right: 25px;
      width: 65px; height: 65px;
      background: var(--whatsapp); color: white;
      border-radius: 50%; font-size: 38px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3); z-index: 9999;
      display: flex; align-items: center; justify-content: center;
      transition: all 0.3s ease;
    }

    .whatsapp-float:hover { transform: scale(1.15); }

    .top-bar {
      position: fixed; top: 0; left: 0; right: 0; width: 100%;
      background: rgba(17,24,39,0.7); color: white;
      padding: 0.5rem 5% 0.45rem; font-size: 0.9rem;
      display: flex; flex-direction: column; align-items: flex-start;
      z-index: 1200; backdrop-filter: blur(4px);
      gap: 0.35rem; line-height: 1.3;
    }

    .top-bar .phones-line {
      display: flex; align-items: center; justify-content: space-between;
      width: 100%; white-space: nowrap;
    }

    .top-bar .phones { display: flex; align-items: center; gap: 0.7rem; flex-shrink: 0; }

    .top-bar .social-icons {
      display: flex; align-items: center; gap: 1.1rem; flex-shrink: 0;
    }

    .top-bar .social-icons a {
      font-size: 1.35rem; transition: transform 0.3s ease;
    }

    .top-bar .social-icons a.instagram,
    .top-bar .social-icons a.instagram i {
      color: var(--ig-pink) !important;
    }

    .top-bar .social-icons a.facebook,
    .top-bar .social-icons a.facebook i {
      color: var(--fb-blue) !important;
    }

    .top-bar .social-icons a:hover { transform: scale(1.2); }

    .top-bar .email-line { font-size: 0.85rem; width: 100%; }

    /* Force email (and all links) in top bar to be WHITE in all states */
    .top-bar a,
    .top-bar a:link,
    .top-bar a:visited,
    .top-bar a:hover,
    .top-bar a:active,
    .top-bar a:focus {
      color: white !important;
      text-decoration: none !important;
    }

    /* Hover effect: yellow only on hover */
    .top-bar a:hover {
      color: #facc15 !important;
    }

    header {
      position: fixed; top: 62px; left: 0; right: 0; width: 100%;
      background: rgba(30,58,138,0.75); color: white; z-index: 1100;
      padding: 0.8rem 5%; display: flex; justify-content: space-between; align-items: center;
      backdrop-filter: blur(6px);
    }

    .logo { display: flex; align-items: center; font-size: 1.5rem; font-weight: 700; flex-shrink: 0; }

    .logo img { height: 45px; margin-right: 0.8rem; }

    nav {
      display: flex; align-items: center; flex-wrap: nowrap; gap: 0.6rem;
      overflow-x: auto; padding: 0.3rem 0; white-space: nowrap;
    }

    nav a { color: white; margin: 0 0.6rem; text-decoration: none; font-weight: 500; font-size: 0.95rem; flex-shrink: 0; }

    nav a:hover { color: #facc15; }

    .btn {
      background: var(--accent); color: white;
      padding: 0.65rem 1.3rem; border-radius: 50px;
      text-decoration: none; font-weight: 600; font-size: 0.95rem;
      min-width: 110px; text-align: center; flex-shrink: 0;
    }

    .btn:hover { background: #c2410c; }

    .hero {
      margin-top: calc(62px + 72px);
      background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                  url('images/hero-bg.jpg') center/cover no-repeat fixed;
      color: white; min-height: 620px; display: flex; align-items: center; justify-content: center;
      text-align: center; padding: 4rem 5% 6rem;
    }

    .hero h1 { font-size: 4.5rem; margin-bottom: 1.2rem; text-transform: uppercase; letter-spacing: 4px; text-shadow: 2px 2px 8px rgba(0,0,0,0.7); }

    .hero p { font-size: 1.4rem; max-width: 900px; margin: 0 auto 2.5rem; }

    .hero .btn-group { display: flex; flex-wrap: wrap; justify-content: center; gap: 1.5rem; }

    .hero .btn { padding: 0.9rem 2rem; font-size: 1.1rem; min-width: 160px; }

    .section { padding: 6rem 5% 4rem; max-width: 1400px; margin: 0 auto; position: relative; }

    .title { text-align: center; font-size: 2.8rem; color: var(--primary); margin-bottom: 1rem; }

    .subtitle { text-align: center; color: #4b5563; font-size: 1.3rem; margin-bottom: 3rem; }

    .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; }

    .card {
      background: white; border-radius: 12px; overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1); transition: 0.3s; text-align: center;
    }

    .card:hover { transform: translateY(-10px); }

    .card img { width: 100%; height: 220px; object-fit: cover; }

    .card-body { padding: 1.5rem; }

    .price { font-size: 1.8rem; color: var(--accent); font-weight: 700; margin: 0.8rem 0; }

    .services-list {
      list-style: none; padding: 0; margin: 1.5rem 0;
    }

    .services-list li {
      font-size: 1.1rem; margin-bottom: 0.8rem; padding-left: 1.8rem; position: relative;
    }

    .services-list li:before {
      content: "•"; color: var(--accent); position: absolute; left: 0; font-size: 1.4rem;
    }

    .why-choose-grid {
      display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.5rem; margin-top: 2rem;
    }

    .why-item {
      background: white; padding: 1.5rem; border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center;
    }

    .why-item i { font-size: 2.5rem; color: var(--accent); margin-bottom: 1rem; }

    .activities-section {
      background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)),
                  url('https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80') center/cover no-repeat fixed;
      color: white;
      position: relative;
    }

    .activities-section .container {
      position: relative;
      z-index: 2;
    }

    .activities-section .title,
    .activities-section .subtitle {
      color: white;
      text-shadow: 1px 1px 8px rgba(0,0,0,0.8);
    }

    .activities-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1.8rem;
      margin-top: 3rem;
    }

    .activity-item {
      background: rgba(255,255,255,0.94);
      border-radius: 16px;
      padding: 2.5rem 1.8rem;
      text-align: center;
      box-shadow: 0 12px 35px rgba(0,0,0,0.18);
      transition: all 0.4s ease;
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255,255,255,0.4);
    }

    .activity-item:hover {
      transform: translateY(-12px);
      box-shadow: 0 22px 55px rgba(0,0,0,0.28);
    }

    .activity-icon {
      font-size: 4.2rem;
      color: var(--accent);
      margin-bottom: 1.3rem;
      display: block;
    }

    .activity-item h4 {
      font-size: 1.5rem;
      margin-bottom: 0.6rem;
      color: var(--primary);
    }

    .activity-item .count {
      color: #444;
      font-size: 1.1rem;
      font-weight: 500;
      margin: 0;
    }

    footer {
      background: var(--footer-green); color: white;
      padding: 4rem 5% 2rem; text-align: center; width: 100%;
    }

    .footer-content p { margin: 0.8rem 0; font-size: 1.05rem; }

    .footer-address i,
    .footer-email i,
    .footer-phone i {
      margin-right: 0.6rem; font-size: 1.2rem; color: #fff;
    }

    .social {
      margin: 2rem 0; display: flex; justify-content: center; gap: 2.5rem;
    }

    .social a {
      font-size: 2.2rem; transition: transform 0.3s ease;
    }

    .social a.instagram { color: var(--ig-pink) !important; }

    .social a.facebook { color: var(--fb-blue) !important; }

    .social a:hover { transform: scale(1.2); }

    .modal {
      display: none; position: fixed; inset: 0;
      background: rgba(0,0,0,0.7); z-index: 1300;
      align-items: center; justify-content: center; padding: 1rem;
    }

    .modal[style*="display: flex"] { display: flex !important; }

    .modal-content {
      background: white; border-radius: 16px; width: 100%; max-width: 520px;
      padding: 2.5rem 2rem; position: relative; max-height: 92vh; overflow-y: auto;
      box-shadow: 0 20px 50px rgba(0,0,0,0.35);
    }

    .close-btn { position: absolute; top: 12px; right: 18px; font-size: 2.2rem; background: none; border: none; cursor: pointer; color: #555; }

    .modal-content h2 { text-align: center; color: var(--primary); margin-bottom: 1.8rem; font-size: 1.8rem; }

    .modal-content label { display: block; margin: 1.4rem 0 0.4rem; font-weight: 500; color: #333; }

    .modal-content input, .modal-content select, .modal-content textarea {
      width: 100%; padding: 1rem; margin: 0.6rem 0 1.6rem 0;
      border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; box-sizing: border-box;
    }

    .modal-content button[type="submit"] {
      width: 100%; background: var(--accent); color: white;
      padding: 1.1rem; border: none; border-radius: 50px; font-size: 1.1rem;
      cursor: pointer; margin-top: 1.8rem;
    }

    .modal-content button[type="submit"]:hover { background: #c2410c; }

    @media (max-width: 768px) {
      .top-bar { padding: 0.55rem 4% 0.5rem; font-size: 0.9rem; gap: 0.4rem; }

      .top-bar .phones-line { font-size: 0.9rem; gap: 0.7rem; }

      .top-bar .social-icons a { font-size: 1.3rem; }

      header { padding: 0.7rem 5%; flex-direction: column; gap: 0.5rem; }

      .hero { min-height: 500px; }

      .hero h1 { font-size: 3rem; }

      nav { width: 100%; gap: 0.5rem; overflow-x: auto; }

      nav a { margin: 0 0.5rem; font-size: 0.9rem; }

      .activities-grid { grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); }

      .activity-icon { font-size: 3.5rem; }

      .social { gap: 2rem; }

      .social a { font-size: 2rem; }
    }

    @media (max-width: 480px) {
      .top-bar { padding: 0.5rem 4% 0.45rem; font-size: 0.85rem; }

      .top-bar .social-icons a { font-size: 1.2rem; }

      .hero h1 { font-size: 2.4rem; }

      .activities-grid { grid-template-columns: 1fr; }

      .social { gap: 1.5rem; }

      .social a { font-size: 1.8rem; }
    }
  </style>
</head>
<body>

<div class="top-bar">
  <div class="phones-line">
    <div class="phones">
      <i class="fas fa-phone-alt"></i> +91 7051711732 | +91 7006807423
    </div>
    <div class="social-icons">
      <a href="https://www.instagram.com/kashtrackholidays" target="_blank" class="instagram" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.facebook.com/kashtrackholiday" target="_blank" class="facebook" aria-label="Facebook">
        <i class="fab fa-facebook-f"></i>
      </a>
    </div>
  </div>
  <div class="email-line">
    <a href="mailto:kashtrackholidays786@gmail.com">
      <i class="fas fa-envelope"></i> kashtrackholidays786@gmail.com
    </a>
  </div>
</div>

<header>
  <div class="logo">
    <img src="images/logo.jpg" alt="Kash Track Holidays">
    Kash Track Holidays
  </div>
  <nav>
    <a href="index.html">Home</a>
    <a href="destinations.html">Destinations</a>
    <a href="packages.html">Packages</a>
    <a href="contact.html">Contact</a>
    <a href="#" class="btn book-now-trigger">Book Now</a>
  </nav>
</header>

<main>
  <section class="hero">
    <div>
      <h1>JOURNEY TO PARADISE LAND</h1>
      <p>Discover the breathtaking beauty of Kashmir with our exclusive tour packages. Shikara rides on Dal Lake, snow-capped mountains of Gulmarg, valleys of Pahalgam — we craft your perfect Kashmir holiday.</p>
      <div class="btn-group">
        <a href="packages.html" class="btn">Explore Our Packages</a>
        <a href="#" class="btn book-now-trigger">INQUIRE NOW</a>
      </div>
    </div>
  </section>

  <section class="section">
    <h2 class="title">Our Services</h2>
    <p class="subtitle">Comprehensive Kashmir & Ladakh Travel Solutions</p>
    <ul class="services-list">
      <li>Complete Kashmir Tour Packages</li>
      <li>Honeymoon Special Packages</li>
      <li>Family Holiday Packages</li>
      <li>Hotel Booking (Budget to Luxury)</li>
      <li>Cab Services (Private & Group)</li>
      <li>Airport Pickup & Drop</li>
      <li>Adventure Activities (Skiing, Gondola, Trekking)</li>
    </ul>

    <h2 class="title" style="margin-top: 4rem;">Why Choose Kash Track Holidays?</h2>
    <p class="subtitle">Your Trusted Partner for Memorable Journeys</p>
    <div class="why-choose-grid">
      <div class="why-item">
        <i class="fas fa-check-circle"></i>
        <h3>Trusted Local Travel Experts</h3>
        <p>We know Kashmir & Ladakh like the back of our hand.</p>
      </div>
      <div class="why-item">
        <i class="fas fa-check-circle"></i>
        <h3>Best Price Guarantee</h3>
        <p>Lowest rates with no hidden charges.</p>
      </div>
      <div class="why-item">
        <i class="fas fa-check-circle"></i>
        <h3>Customized Tour Packages</h3>
        <p>Tailored exactly to your preferences and budget.</p>
      </div>
      <div class="why-item">
        <i class="fas fa-check-circle"></i>
        <h3>24/7 Customer Support</h3>
        <p>We're always available when you need us.</p>
      </div>
      <div class="why-item">
        <i class="fas fa-check-circle"></i>
        <h3>Premium Hotels & Comfortable Transport</h3>
        <p>Quality stays and safe, reliable vehicles.</p>
      </div>
      <div class="why-item">
        <i class="fas fa-check-circle"></i>
        <h3>Experienced Drivers & Guides</h3>
        <p>Professional, friendly, and local experts.</p>
      </div>
    </div>
    <p style="text-align:center; margin-top: 2rem; font-size: 1.1rem; font-weight: 500;">
      We ensure comfort, safety, and satisfaction from arrival to departure.
    </p>
  </section>

  <!-- ACTIVITIES SECTION WITH BACKGROUND IMAGE -->
  <section class="section activities-section">
    <div class="container text-center">
      <h2 class="title">CHOOSE OUR ACTIVITIES</h2>
      <p class="subtitle">TRAVEL ACTIVITIES</p>

      <div class="activities-grid">
        <div class="activity-item">
          <i class="fas fa-mountain activity-icon"></i>
          <h4>Adventure</h4>
          <p class="count">15 Destination</p>
        </div>

        <div class="activity-item">
          <i class="fas fa-hiking activity-icon"></i>
          <h4>Trekking</h4>
          <p class="count">12 Destination</p>
        </div>

        <div class="activity-item">
          <i class="fas fa-fire activity-icon"></i>
          <h4>Camp Fire</h4>
          <p class="count">7 Destination</p>
        </div>

        <div class="activity-item">
          <i class="fas fa-truck-pickup activity-icon"></i>
          <h4>Off Road</h4>
          <p class="count">15 Destination</p>
        </div>

        <div class="activity-item">
          <i class="fas fa-campground activity-icon"></i>
          <h4>Camping</h4>
          <p class="count">13 Destination</p>
        </div>

        <div class="activity-item">
          <i class="fas fa-binoculars activity-icon"></i>
          <h4>Exploring</h4>
          <p class="count">25 Destination</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <h2 class="title">POPULAR DESTINATION</h2>
    <p class="subtitle">TOP NOTCH DESTINATION IN KASHMIR</p>
    <div class="grid">
      <div class="card">
        <img src="images/dal-lake-destination.jpg" alt="Dal Lake">
        <div class="card-body">
          <h3>Dal Lake, Kashmir</h3>
          <p>The Jewel in the Crown of Kashmir is a 18 sq km urban lake in Srinagar known for its iconic houseboats Shikara boat rides and vibrant floating veg. market.</p>
          <p>★★★★★ (Rated 5/5)</p>
        </div>
      </div>
      <div class="card">
        <img src="images/Bangus valley.jpg" alt="Bangus valley">
        <div class="card-body">
          <h3>Bangus valley</h3>
          <p>Bangus valley is an offbeat place that offers you some mesmerizing beautiful landscapes, mountain peaks, meadows and water streams.</p>
          <p>★★★★★ (Rated 5/5)</p>
        </div>
      </div>
      <div class="card">
        <img src="images/aru-valley.jpg" alt="Aru Valley">
        <div class="card-body">
          <h3>Aru Valley</h3>
          <p>Aru Valley is famous for its stunning natural beauty, featuring lush meadows, snow-capped peaks, and pristine streams, making it a paradise for nature lovers & photography enthusiasts.</p>
          <p>★★★★★ (Rated 5/5)</p>
        </div>
      </div>
      <div class="card">
        <img src="images/BETAAB VALLEY.jpg" alt="BETAAB VALLEY">
        <div class="card-body">
          <h3>Pahalgam, Betaab Valley</h3>
          <p>Betaab Valley in Kashmir is famous for its breathtaking natural beauty, including lush green meadows, snow-capped mountains, and the Lidder River.</p>
          <p>★★★★★ (Rated 5/5)</p>
        </div>
      </div>
      <div class="card">
        <img src="images/Gandola.jpg" alt="Gandola">
        <div class="card-body">
          <h3>Gandola, Gulmarg, Kashmir</h3>
          <p>One of the main attractions in Gulmarg is the Gulmarg Gondola, the Highest Cable Car in the world. The 1st phase of the Gondola takes tourists to the height of 8030ft.</p>
          <p>★★★★★ (Rated 5/5)</p>
        </div>
      </div>
      <div class="card">
        <img src="images/Doodhpathri.jpg" alt="Doodhpathri">
        <div class="card-body">
          <h3>Doodhpathri</h3>
          <p>Doodhpathri, known as the Valley of Milk is a stunning lesser-known hill station in Jammu and Kashmir’s Budgam district, situated at 8,957 feet.</p>
          <p>★★★★★ (Rated 5/5)</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:#f8fafc;">
    <h2 class="title">INTRODUCTION ABOUT US</h2>
    <p class="subtitle">ULTIMATE GUIDE TO EPIC ADVENTURE</p>
    <p style="max-width:900px; margin:0 auto 2rem; text-align:center;">Discover the true paradise on earth with our tailored tour packages. We bring you the best of Kashmir’s landscapes, culture, and hospitality, ensuring a travel experience you will cherish forever.</p>
    <div class="grid">
      <div class="card"><div class="card-body"><h3>BEST PRICE GUARANTEED</h3><p>We offer the most competitive rates for all packages without compromising quality.</p></div></div>
      <div class="card"><div class="card-body"><h3>AMAZING DESTINATION</h3><p>Explore the stunning valleys, pristine lakes, and snow-capped mountains of Kashmir.</p></div></div>
      <div class="card"><div class="card-body"><h3>PERSONAL SERVICES</h3><p>We provide customized support to make your trip smooth, safe, and truly memorable.</p></div></div>
    </div>
  </section>

  <section class="section">
    <h2 class="title">POPULAR PACKAGES</h2>
    <div class="grid">
      <div class="card">
        <img src="images/amazing-kashmir-package.jpg" alt="Amazing Kashmir">
        <div class="card-body">
          <h3>Pahalgam, Gulmarg, Sonmarg, Srinagar – 5 Nights 6 Days</h3>
          <div class="price">₹16,499 <small>/ per person</small></div>
          <p>6D/5N • Kashmir • (25 reviews) - Rated 4 out of 5</p>
          <a href="#" class="btn book-now-trigger" style="margin-top:1rem; display:block;">Book Now</a>
        </div>
      </div>
      <div class="card">
        <img src="images/kashmir-special-package.jpg" alt="Kashmir Special">
        <div class="card-body">
          <h3>Kashmir Special Tour Package – 4 Nights 5 Days</h3>
          <div class="price">₹13,999 <small>/ per person</small></div>
          <p>5D/4N • Kashmir • (33 reviews) - Rated 5 out of 5</p>
          <a href="#" class="btn book-now-trigger" style="margin-top:1rem; display:block;">Book Now</a>
        </div>
      </div>
      <div class="card">
        <img src="images/srinagar-gulmarg-package.jpg" alt="Srinagar Gulmarg">
        <div class="card-body">
          <h3>SRINAGAR GULMARG Tour Package – 2 Nights 3 Days</h3>
          <div class="price">₹8,350 <small>/ per person</small></div>
          <p>3D/2N • Kashmir • (25 reviews) - Rated 4 out of 5</p>
          <a href="#" class="btn book-now-trigger" style="margin-top:1rem; display:block;">Book Now</a>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-content">
      <p style="margin-bottom:1rem; font-size:1.2rem; font-weight:600;">Kash Track Holidays</p>

      <p class="footer-address">
        <i class="fas fa-map-marker-alt"></i>
        2ND FLOOR KHAN COMPLEX, HMT SALTANGE NATIONAL HIGHWAY<br>
        SRINAGAR, JAMMU AND KASHMIR PIN CODE 190012
      </p>

      <p style="margin:1.5rem 0;">
        <i class="fas fa-envelope"></i>
        <a href="mailto:kashtrackholidays786@gmail.com" style="color:#fff;">kashtrackholidays786@gmail.com</a>
      </p>

      <p>
        <i class="fas fa-phone-alt"></i>
        +91 7051711732 | +91 7006807423
      </p>

      <div class="social">
        <a href="https://www.instagram.com/kashtrackholidays" target="_blank" class="instagram" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.facebook.com/kashtrackholiday" target="_blank" class="facebook" aria-label="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
      </div>

      <p style="margin-top:2rem; opacity:0.9;">© 2026 Kash Track Holidays. All Rights Reserved.</p>
    </div>
  </footer>
</main>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/917051711732?text=Hello%20Kash%20Track%20Holidays!%20I%20want%20to%20book%20a%20tour." class="whatsapp-float" target="_blank">
  <i class="fab fa-whatsapp"></i>
</a>

<!-- BOOKING MODAL -->
<div id="bookingModal" class="modal">
  <div class="modal-content">
    <button class="close-btn" onclick="document.getElementById('bookingModal').style.display='none'">×</button>

    <h2>Book Your Kashmir Tour</h2>

    <form action="https://formspree.io/f/mlgwrvla" method="POST">
      <label for="name">Full Name *</label>
      <input type="text" id="name" name="name" placeholder="Full Name *" required>

      <label for="phone">Phone / WhatsApp *</label>
      <input type="tel" id="phone" name="phone" placeholder="Phone / WhatsApp *" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Email Address">

      <label for="package">Select Package</label>
      <select id="package" name="package" required>
        <option value="" disabled selected>Select Package</option>
        <option value="5 Nights 6 Days">5 Nights 6 Days – ₹16,499</option>
        <option value="4 Nights 5 Days">4 Nights 5 Days – ₹13,999</option>
        <option value="2 Nights 3 Days">2 Nights 3 Days – ₹8,350</option>
        <option value="Custom Tour">Custom Tour</option>
      </select>

      <label for="travelDates">Travel Dates (From → To) *</label>
      <input type="text" id="travelDates" name="dates" placeholder="Click to select From → To dates *" required>

      <label for="persons">Number of Persons *</label>
      <input type="number" id="persons" name="persons" placeholder="Number of Persons *" min="1" required>

      <label for="message">Any special requests or questions...</label>
      <textarea id="message" name="message" placeholder="Any special requests or questions..." rows="4"></textarea>

      <button type="submit">Submit Booking Request</button>
    </form>
  </div>
</div>

<script>
  document.querySelectorAll('.book-now-trigger').forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      document.getElementById('bookingModal').style.display = 'flex';
    });
  });

  document.getElementById('bookingModal').addEventListener('click', function(e) {
    if (e.target === this) this.style.display = 'none';
  });

  flatpickr("#travelDates", {
    mode: "range",
    dateFormat: "d-m-Y",
    minDate: "today",
    altInput: true,
    altFormat: "F j, Y",
    conjunction: " → ",
    showMonths: 2,
    static: false,
    appendTo: document.body,
    position: "auto",
    onOpen: function(selectedDates, dateStr, instance) {
      const rect = this.input.getBoundingClientRect();
      if (rect.bottom > window.innerHeight - 320) {
        instance.calendarContainer.style.top = (rect.top - instance.calendarContainer.offsetHeight - 10) + "px";
      }
    }
  });
</script>

</body>
</html>
