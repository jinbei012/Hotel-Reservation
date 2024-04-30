<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

:root {
  --primary-color: #2c3855;
  --primary-color-dark: #435681;
  --text-dark: #333333;
  --text-light: #767268;
  --extra-light: #f3f4f6;
  --white: #ffffff;
  --max-width: 1200px;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}

.section__header {
  font-size: 2rem;
  font-weight: 600;
  color: var(--text-dark);
  text-align: center;
}

a {
  text-decoration: none;
}

img {
  width: 100%;
  display: flex;
}

body {
  font-family: "Poppins", sans-serif;
  background-color: #d2d2d2;
}

nav {
  max-width: var(--max-width);
  margin: auto;
  padding: 2rem 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.nav__logo {
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--text-dark);
}

.nav__links {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 2rem;
}

.link a {
  font-weight: 500;
  color: var(--text-light);
  transition: 0.3s;
}

.link a:hover {
  color: var(--primary-color);
}

.header__container {
  padding: 1rem 1rem 5rem 1rem;
}
    /* Add CSS styles for centering and border */
    .reservation__container {
  margin: 0 auto; /* Center the container */
  width: 80%; /* Adjust width as needed */
  
}

.reservation__table {
  border-collapse: collapse; /* Collapse borders */
  width: 100%;
  border-color: black; /* Set border color */
}

.reservation__table th,
.reservation__table td {
  border: 3px solid #ddd; /* Add border */
  padding: 8px; /* Add padding */
  text-align: center; /* Align text left */
}

.reservation__table th {
  background-color: white; /* Add background color to header */
}
/* Button Style */
.reservation__table button {
  background-color: black; /* Green background */
  border: none; /* Remove border */
  color: white; /* White text */
  padding: 10px 20px; /* Padding */
  text-align: center; /* Center text */
  text-decoration: none; /* Remove underline */
  display: inline-block; /* Make inline block */
  font-size: 16px; /* Font size */
  cursor: pointer; /* Add cursor pointer */
  border-radius: 5px; /* Add border radius */
}

/* Hover effect */
.reservation__table button:hover {
  background-color: #45a049; /* Darker green */
}

.footers {
  position: center;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #f8f8f8; /* Optional: Add background color */
  padding: 20px 0; /* Optional: Add padding */
  text-align: center;
  color: #666;
  font-size: 14px;
}
#Reasonform {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: grey;
  padding: 20px;
  border-radius: 5px;
}

#Reasonform form {
  max-width: 400px;
}

#Reasonform label {
  font-weight: bold;
}

#Reasonform textarea {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

#Reasonform input[type="submit"] {
  background-color: #4c72af;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

#Reasonform input[type="submit"]:hover {
  background-color: #45a049;
}


/* You can add more styles as needed */


  </style>
  <title>Web Design Mastery | WDM&Co</title>
</head>
<body>
  <nav>
    <div class="nav__logo">Ember Glow</div>
    <ul class="nav__links">
      <li><a href="index.php">Home</a></li>
      <li><a href="#Book">Book</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <section id="reservation">
  <div class="reservation__container">
    <h2>Reservation Details</h2>
    <table class="reservation__table">
      <thead>
        <tr>
          <th>Room</th>
          <th>Date</th>
          <th>Change Date</th>
          <th>Cancel Reservation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>VIP ROOM</td>
          <td>CHECK DATE</td>
          <td>/</td>
          <td><button type="button" onclick="showReasonForm()">Cancel</button></td>
        </tr>
        <?php 
        ?>
      </tbody>
    </table>
  </div>
</section>

<div id="Reasonform" style="display: none;">
  <form action="index2.php" method="post">
    <label for="reason">Enter a reason:</label><br>
    <textarea id="reason" name="reason" rows="4" cols="50">Found another cheaper</textarea>
    <br>
    <input type="submit" value="Submit">
    <input type="submit" value="Back" onclick="closeReasonForm()">
  </form>
</div>




  <section id="contact">
    <footer class="footers">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>WDM&Co</h3>
          <p>
            WDM&Co is a premier hotel booking website that offers a seamless and
            convenient way to find and book accommodations worldwide.
          </p>
          <p>
            With a user-friendly interface and a vast selection of hotels,
            WDM&Co aims to provide a stress-free experience for travelers
            seeking the perfect stay.
          </p>
        </div>
        <div class="footer__bar">
          Copyright © 2023 Web Design Mastery. All rights reserved.
        </div>
      </div>
    </footer>
  </section>

  <script>
  function showReasonForm() {
    var reasonForm = document.getElementById("Reasonform");
    reasonForm.style.display = "block";
  }


  function closeReasonForm() {
  document.getElementById("Reasonform").style.display = "none";
}
</script>

</body>
</html>
