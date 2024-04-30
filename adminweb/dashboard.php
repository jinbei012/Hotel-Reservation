<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      transition: margin-left 0.5s;
      background-color: #ccd4ac;
    }

    header {
      background-color: #f9b67d;
      color: #056c35;
      padding: 20px;
      display: flex;
      align-items: center;
    }

    .header-btn {
      font-size: 20px;
      cursor: pointer;
      margin-right: 20px;
    }

    h2 {
      margin: 0;
    }

    .sidenav {
      height: 100%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: -250px;
      background-color: #056c35;
      overflow-x: hidden;
      padding-top: 20px;
      transition: left 0.5s;
    }

    .sidenav.active {
      left: 0;
    }

    .sidenav a {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #fff;
      display: block;
    }

    .sidenav a:hover {
      background-color: #f56815;
    }

    .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
      color: #fff;
    }

    .profile {
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .profile h3 {
      margin-top: 0;
      color: #fff;
    }

    .profile button {
      background-color: #f02a1f;
      border: none;
      color: #fff;
      cursor: pointer;
      font-size: 16px;
      padding: 10px 20px;
      border-radius: 5px;
    }

    .profile button:hover {
      background-color: #f5453b;
    }

    .menu-item {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #fff;
      display: block;
    }

    .menu-item:hover {
      background-color: #056c35;
    }

    .special-background {
      background-color: #f56815;
    }

    .content {
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-left: 0;
    }

    .data-container {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .data-item {
      width: 30%;
      padding: 20px;
      background-color: #64ac80;
      color: #fff;
      text-align: center;
      border-radius: 5px;
    }

    .data-item p {
      font-size: 24px; /* Increase number size */
    }
	
	#reservationTypesChart {
      max-width: 300px;
      max-height: 300px;
    }
	
	#profitPerDayChart {
      max-width: 300px;
      max-height: 300px;
    }
	
	.charts-container {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
}

#reservationTypesChart,
#profitPerDayChart {
  max-width: 45%;
  max-height: 400px;
}


  </style>
</head>
<body>
<header>
  <span class="header-btn" onclick="toggleNav()">&#9776;</span>
  <img src="dcsa.png" alt="Hotel Logo">
  <h2>Hotel name Reservation</h2>
</header>
<div id="mySidenav" class="sidenav">
  <div class="profile">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">&times;</a>
    <h3>Admin</h3>
    <button onclick="location.href='index.php'">Logout</button>
    <h3>__________________________</h3>
  </div>
	<a href="admin.html" class="menu-item special-background">Dashboard</a>
	<a href="reservation.php" class="menu-item">Reservation List</a>
  <a href="rooms.php" class="menu-item">Rooms</a>
  <a href="staffmanagement.php" class="menu-item">Staff Management</a>
  <a href="cancelledreason.php" class="menu-item">Cancelled Reason</a>
</div>

<div class="content">
  <h1>Welcome to Admin Dashboard</h1>
  <div class="data-container">
    <div class="data-item">
      <h2>Total Booked Room</h2>
      <p>50</p>
    </div>
    <div class="data-item" style="background-color: #f56815;">
      <h2>Staff</h2>
      <p>20</p>
    </div>
    <div class="data-item" style="background-color: #056c35;">
      <h2>Profit</h2>
      <p>$5000</p>
    </div>
  </div>
</div>

<div class="charts-container">
    <!-- Reservation Pie Chart -->
    <canvas id="reservationTypesChart" width="300" height="300"></canvas>

    <!-- Profit per Day Line Chart -->
    <canvas id="profitPerDayChart" width="400" height="200"></canvas>
  </div>

<script>
function toggleNav() {
  var sidenav = document.getElementById("mySidenav");
  if (sidenav.classList.contains('active')) {
    sidenav.classList.remove('active');
    document.body.style.marginLeft = "0";
  } else {
    sidenav.classList.add('active');
    document.body.style.marginLeft = "250px";
  }
}

// Reservation Pie Chart Data
var reservationTypesData = {
  labels: ['VIP', 'Supreme', 'Deluxe'],
  datasets: [{
    label: 'Reservation Types',
    data: [20, 15, 15], // Example data, replace with your actual data
    backgroundColor: [
      '#f56815',
      '#056c35',
      '#64ac80'
    ],
    borderWidth: 1
  }]
};

// Render Reservation Pie Chart
var reservationTypesChartCtx = document.getElementById('reservationTypesChart').getContext('2d');
var reservationTypesChart = new Chart(reservationTypesChartCtx, {
  type: 'pie',
  data: reservationTypesData
});

// Function to generate labels for current month's dates
function generateDateLabels() {
  const currentDate = new Date();
  const daysInMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();
  const labels = [];
  for (let i = 1; i <= daysInMonth; i++) {
    labels.push(`Day ${i}`);
  }
  return labels;
}

// Function to generate sample profit data for current month's dates
function generateProfitData() {
  const daysInMonth = new Date(new Date().getFullYear(), new Date().getMonth() + 1, 0).getDate();
  const data = [];
  for (let i = 1; i <= daysInMonth; i++) {
    data.push(Math.floor(Math.random() * 1000) + 500); // Generating random profit data
  }
  return data;
}

// Profit per Day Line Chart Data
var profitPerDayData = {
  labels: generateDateLabels(), // Dynamically generate labels for current month's dates
  datasets: [{
    label: 'Profit per Day',
    data: generateProfitData(), // Dynamically generate profit data for current month's dates
    backgroundColor: '#f9b67d',
    borderColor: '#056c35',
    borderWidth: 2,
    fill: false
  }]
};

// Render Profit per Day Line Chart
var profitPerDayChartCtx = document.getElementById('profitPerDayChart').getContext('2d');
var profitPerDayChart = new Chart(profitPerDayChartCtx, {
  type: 'line',
  data: profitPerDayData,
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
</script>
</body>
</html>
