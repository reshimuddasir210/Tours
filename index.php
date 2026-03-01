<?php
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = htmlspecialchars($_POST['name']);
    $phone    = htmlspecialchars($_POST['phone']);
    $email    = htmlspecialchars($_POST['email']);
    $package  = htmlspecialchars($_POST['package']);
    $dates    = htmlspecialchars($_POST['dates']);
    $persons  = htmlspecialchars($_POST['persons']);
    $message  = htmlspecialchars($_POST['message']);

    $to = "kashtrackholidays786@gmail.com";
    $subject = "New Booking Request - Kash Track Holidays";

    $body = "
    New Booking Request Details:

    Name: $name
    Phone: $phone
    Email: $email
    Package: $package
    Travel Dates: $dates
    Number of Persons: $persons
    Message: $message
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        $success = "Booking request sent successfully!";
    } else {
        $error = "Something went wrong. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Kash Track Holidays - Kashmir & Ladakh Tours</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<style>
/* ===== KEEPING YOUR FULL ORIGINAL CSS EXACTLY SAME ===== */
:root {
  --primary:#1e3a8a;
  --accent:#ea580c;
  --light-bg:#f9fafb;
  --whatsapp:#25D366;
  --footer-green:#2e7d32;
  --fb-blue:#1877f2;
  --ig-pink:#e1306c;
}
*{box-sizing:border-box;margin:0;padding:0;}
body{font-family:'Poppins',sans-serif;background:var(--light-bg);color:#333;}
/* ---- TRIMMED COMMENT ---- */
/*  (Keep your full CSS from original file here without changes)  */
</style>
</head>

<body>

<?php if($success): ?>
<script>alert("<?php echo $success; ?>");</script>
<?php endif; ?>

<?php if($error): ?>
<script>alert("<?php echo $error; ?>");</script>
<?php endif; ?>

<!-- ===== YOUR FULL WEBSITE HTML STARTS HERE (UNCHANGED) ===== -->

<!-- TOP BAR -->
<div class="top-bar">
  <div class="phones-line">
    <div class="phones">
      <i class="fas fa-phone-alt"></i> +91 7051711732 | +91 7006807423
    </div>
    <div class="social-icons">
      <a href="https://www.instagram.com/kashtrackholidays" target="_blank" class="instagram">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.facebook.com/kashtrackholiday" target="_blank" class="facebook">
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
    <a href="index.php">Home</a>
    <a href="destinations.php">Destinations</a>
    <a href="packages.php">Packages</a>
    <a href="contact.php">Contact</a>
    <a href="#" class="btn book-now-trigger">Book Now</a>
  </nav>
</header>

<!-- KEEP ALL YOUR SECTIONS EXACTLY SAME HERE -->
<!-- HERO, SERVICES, ACTIVITIES, DESTINATIONS, PACKAGES ETC -->
<!-- (No changes needed — just paste your full HTML content here) -->

<!-- BOOKING MODAL -->
<div id="bookingModal" class="modal">
  <div class="modal-content">
    <button class="close-btn" onclick="document.getElementById('bookingModal').style.display='none'">×</button>
    <h2>Book Your Kashmir Tour</h2>

    <form method="POST">
      <label>Full Name *</label>
      <input type="text" name="name" required>

      <label>Phone / WhatsApp *</label>
      <input type="tel" name="phone" required>

      <label>Email Address</label>
      <input type="email" name="email">

      <label>Select Package</label>
      <select name="package" required>
        <option value="">Select Package</option>
        <option>5 Nights 6 Days – ₹16,499</option>
        <option>4 Nights 5 Days – ₹13,999</option>
        <option>2 Nights 3 Days – ₹8,350</option>
        <option>Custom Tour</option>
      </select>

      <label>Travel Dates *</label>
      <input type="text" id="travelDates" name="dates" required>

      <label>Number of Persons *</label>
      <input type="number" name="persons" min="1" required>

      <label>Message</label>
      <textarea name="message"></textarea>

      <button type="submit">Submit Booking Request</button>
    </form>
  </div>
</div>

<script>
document.querySelectorAll('.book-now-trigger').forEach(btn=>{
  btn.addEventListener('click',e=>{
    e.preventDefault();
    document.getElementById('bookingModal').style.display='flex';
  });
});

flatpickr("#travelDates",{
  mode:"range",
  dateFormat:"d-m-Y",
  minDate:"today",
  altInput:true,
  altFormat:"F j, Y",
  conjunction:" → ",
  showMonths:2
});
</script>

</body>
</html>