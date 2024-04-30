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
      .search-form {
      display: flex;
      align-items: center;
    }

    .room-type, .pax-room, .room-num {
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
  
     .search-btn:hover {
      background-color: #37ad51;
    }

    .add-btn {
      background-color: #353635;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
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
  
    /* Room style */
.room-card {
  position: relative; /* Make the card position relative */
  width: 200px;
  padding: 20px;
  margin-right: 20px; /* Add margin between cards */
  margin-bottom: 20px; /* Add margin below each card */
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

  
    .delete-btn {
      position: absolute;
      top: 5px;
      right: 5px;
      background-color: #f02a1f;
      color: #fff;
      border: none;
      padding: 5px;
      border-radius: 50%;
      cursor: pointer;
    }
  
    .delete-btn:hover {
      background-color: #f5453b;
    }

    .room-card img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .room-card h3 {
      margin: 0;
      font-size: 18px;
    }

    /* Flexbox to display cards horizontally */
    .data-container {
      display: flex;
      flex-wrap: wrap; /* Wrap cards to the next line if needed */
      justify-content: center; /* Center cards horizontally */
    }

    /* Available button style */
    .available-btn {
      background-color: #0a8c27;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
  
    .available-btn:hover {
      background-color: #37ad51;
    }

    /* Responsive adjustments */
    @media only screen and (max-width: 600px) {
      .sidenav {
        width: 100%;
        left: -100%; /* Move off screen */
      }
      
      .content {
        padding: 10px;
      }
      
      .room-card {
        width: 100%;
        margin-right: 0;
        margin-bottom: 20px; /* Add space between cards */
      }
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
    <a href="reservation.php" class="menu-item">Reservation List</a>
        <a href="rooms.php" class="menu-item special-background">Rooms</a>
        <a href="staffmanagement.php" class="menu-item">Staff Management</a>
        <a href="cancelledreason.php" class="menu-item">Cancelled Reason</a>
</div>

<div class="content">
  <h1>Welcome to Admin Rooms</h1>
  <div class="button-container">
    <form class="search-form" method="get">
     <select class="room-type" name="search">
    <option value="" disabled selected>SELECT ROOM</option>
    <option value="VIP">VIP</option>
    <option value="Deluxe">DELUXE</option>
    <option value="Supreme">SUPREME</option>
  </select>
  <select class="pax-room" name="pax">
    <option value="" disabled selected>Number of Guest.</option>
    <option value="1 Guest">1 Guest</option>
    <option value="1-2 Guest">1-2 Guest</option>
    <option value="1-3 Guest">1-3 Guest</option>
    <option value="1-4 Guest">1-4 Guest</option>
    <option value="1-5 Guest">1-5 Guest</option>
    <option value="1-6 Guest">1-6 Guest</option>
  </select>
  <input class="room-num" type="text" name="search" placeholder="ROOM NO.">
    </form>
    <button class="add-btn" onclick="handleAdd()">ADD</button>
  </div><br><br><br><br>
  
  <form class="search-form" method="get">
    <input class="room-num" type="text" name="search" placeholder="ROOM NO.">
        <button class="search-btn" type="submit">Search</button>
  </form>
</div><br>

<div id="roomContainer" class="data-container"></div>

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

function handleAdd() {
  var roomType = document.querySelector('.room-type').value;
  var roomNumber = document.querySelector('.room-num').value;
  var numberOfGuests = document.querySelector('.pax-room').value;
  
  if (!roomType || !roomNumber || !numberOfGuests) {
    alert('Please select room type, enter room number, and select the number of guests.');
    return;
  }
  

  var roomContainer = document.getElementById('roomContainer');
  var roomCard = document.createElement('div');
  roomCard.className = 'room-card';
  
  // Set background image based on room type
  var roomImage = document.createElement('img');
  roomImage.src = roomType.toLowerCase() + '.jfif';
  roomImage.alt = roomType + ' Room';
  roomCard.appendChild(roomImage);
  
  // Set room details as title
  var roomTitle = document.createElement('h3');
  roomTitle.textContent = 'Room: ' + roomType + ' - ' + roomNumber + ', Guests: ' + numberOfGuests;
  roomCard.appendChild(roomTitle);
  
  // Add Available button
  var availableButton = document.createElement('button');
  availableButton.textContent = 'Available';
  availableButton.className = 'available-btn'; // Add CSS class to the button
  availableButton.addEventListener('click', function() {
    var confirmOccupied = confirm('Are you sure you want to mark this room as occupied?');
    if (confirmOccupied) {
      availableButton.textContent = 'Unavailable';
      availableButton.disabled = true;
      deleteButton.disabled = true; // Disable delete button when room is occupied
      availableButton.style.backgroundColor = '#f02a1f'; // Change background color to red
    }
  });
  roomCard.appendChild(availableButton);
  
  // Add delete button
  var deleteButton = document.createElement('button');
  deleteButton.className = 'delete-btn';
  deleteButton.textContent = 'X';
  deleteButton.addEventListener('click', function() {
    var confirmDelete = confirm('Are you sure you want to delete this room card?');
    if (confirmDelete) {
      roomContainer.removeChild(roomCard);
    }
  });
  roomCard.appendChild(deleteButton);
  
  roomContainer.appendChild(roomCard);
}
</script>
</body>
</html>
