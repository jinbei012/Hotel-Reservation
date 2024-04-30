<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ccd4ac;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }
        .login-container {
            background-color: #f9b67d;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 90%;
            position: relative;
        }
        h2 {
            color: #056c35;
            padding-bottom: 20px;
        }
        input {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            border: 1px solid #4f5440;
            border-radius: 5px;
            box-sizing: border-box; 
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #4f5440;
        }
        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #4f5440;
            border-radius: 5px;
        }
        .form-group input[type="submit"] {
            background-color: #f56815;
            color: #fff;
            border: none;
            padding: 10px 40px;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #e55910;
        }
        .avatar {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 50px;
        }
        .avatar img {
            width: 150%;
            max-width: 150px;
            height: auto;
            border-radius: 50%;
        }

        @media screen and (max-width: 600px) {
            .login-container {
                padding: 20px;
            }
            h2 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <div class="avatar">
        <img src="https://via.placeholder.com/150" alt="Avatar">
    </div>
    <div class="login-container">
        <div>
            <h2>Admin Login</h2>
        </div>
        <form action="dashboard.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="LOGIN">
            </div>
        </form>
    </div>
</body>
</html>

