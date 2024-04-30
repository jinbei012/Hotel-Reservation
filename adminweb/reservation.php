<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      transition: margin-left 0.5s; /* Add transition effect for smoother movement */
    }

    header {
      background-color: #f9b67d; /* #f9b67d */
      color: #056c35; /* #056c35 */
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
      left: -250px; /* Start off screen */
      background-color: #056c35; /* #f56815 */
      overflow-x: hidden;
      padding-top: 20px;
      transition: left 0.5s; /* Add transition effect for smoother movement */
    }

    .sidenav.active {
      left: 0; /* Move into view */
    }

    .sidenav a {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #fff;
      display: block;
    }

    .sidenav a:hover {
      background-color: #f56815; /* #056c35 */
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
      align-items: center; /* Center items horizontally */
      justify-content: center; /* Center items vertically */
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
      padding: 10px 20px; /* Added padding */
      border-radius: 5px; /* Added border radius */
    }

    .profile button:hover {
      background-color: #f5453b /* Changed hover color to #ccd4ac */
    }

    .menu-item {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #fff;
      display: block;
    }

    .menu-item:hover {
      background-color: #056c35; /* #056c35 */
    }

    /* Add custom class for background color change */
    .special-background {
      background-color: #f56815; /* New background color for special menu items */
    }
  
  .content {
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-left: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .data-container {
      width: 100%;
      overflow-x: auto; /* Enable horizontal scrolling if needed */
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .button-cell {
      display: flex;
      justify-content: space-around;
    }

    .button-cell button {
      padding: 5px 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    /* Styles for the search form */
    .search-form {
      display: flex;
      align-items: center;
    }

    .search-input {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-right: 10px;
    }

    .search-btn {
      background-color: #0a8c27;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .add-btn {
      background-color: #353635;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .search-btn:hover {
      background-color: #37ad51;
    }

    .add-btn:hover {
      background-color: #9a9c9a;
    }

    /* Container for search and add buttons */
    .button-container {
      display: flex;
      align-items: center;
      margin-top: 20px;
    }

    /* Add margin to the add button */
    .add-btn {
      margin-left: 10px;
    }
  </style>
</head>
<body>
<header>
  <span class="header-btn" onclick="toggleNav()">&#9776;</span>
  <img src="dcsa.png" alt="Hotel Logo">
  <h2>Hotel name Reservation</h2>
  <h2></h2>
</header>
<div id="mySidenav" class="sidenav">
  <div class="profile">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">&times;</a>
    <h3>Admin</h3>
    <button onclick="location.href='index.php'">Logout</button>
    <h3>__________________________</h3>
  </div>
    <a href="dashboard.php" class="menu-item">Dashboard</a>
    <a href="reservation.php" class="menu-item special-background">Reservation List</a>
        <a href="rooms.php" class="menu-item">Rooms</a>
        <a href="staffmanagement.php" class="menu-item">Staff Management</a>
        <a href="cancelledreason.php" class="menu-item">Cancelled Reason</a>
</div>

<div class="content">
  <h1>Welcome to Admin Reservation</h1>
  <div class="button-container">
    <form class="search-form" action="/search" method="get">
      <input class="search-input" type="text" name="search" placeholder="SEARCH ID">
      <button class="search-btn" type="submit">Search</button>
    </form>
    <button class="add-btn" onclick="handleAdd()">Add</button>
  </div><br><br>
  
  <div class="data-container">
    <table>
      <tr>
        <th>ID</th>
        <th>CHECK IN</th>
        <th>CHECK OUT</th>
        <th>ROOM TYPE</th>
        <th>ROOM NUM</th>
        <th>NAME</th>
        <th>ROOM RENT</th>
        <th>RESCHEDULE FEE</th>
        <th>ACTION</th>
        <th>CHECK IN</th>
        <th>CHECK OUT</th>
      </tr>
      <tr>
        <td>1</td>
        <td>2024-04-05</td>
        <td>2024-04-07</td>
        <td>Single</td>
        <td>101</td>
        <td>John Doe</td>
        <td>$100</td>
        <td>$20</td>
        <td class="button-cell">
          <button>Print</button>
          <button>Edit</button>
        </td>
        <td><button>Yes</button></td>
        <td><button>Yes</button></td>
      </tr>
      <!-- Add more rows as needed -->
    </table>
  </div>
</div>

<script>
function toggleNav() {
  var sidenav = document.getElementById("mySidenav");
  if (sidenav.classList.contains('active')) {
    sidenav.classList.remove('active');
    document.body.style.marginLeft = "0";
  } else {
    sidenav.classList.add('active');
    document.body.style.marginLeft = "250px"; /* Adjust the margin to match the sidenav width */
  }
}
</script>
</body>
</html>
