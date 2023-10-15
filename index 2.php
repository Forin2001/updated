<?php
include('C:\xampp\htdocs\log\config.php');


if (isset($_POST["enter"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = "INSERT INTO `users` (`UserName`, `Password`) VALUES ('$username', '$password')";
  $result = mysqli_query($conn, $query);

  if ($result) {
      header("Location: welcome.php");
      exit();
  } else {
      $loginError = "Error inserting record: " . mysqli_error($conn);
  }

  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
    <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
  }

  .login-container h2 {
    margin-bottom: 20px;
  }

  .login-form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .login-button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .login-button:hover {
    background-color: #0056b3;
  }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($loginError)) { ?>
            <p style="color: red;"><?php echo $loginError; ?></p>
        <?php } ?>
        <form method="POST">
            <h3>Login Here</h3>

            <label for="username">Username</label>
            <input required type="text" name="username" placeholder="Email or Phone" id="username">

            <label for="password">Password</label>
            <input required type="password" name="password" placeholder="Password" id="password">

            <button class="login-button" type="submit" name="enter">Login</button>
       
        </form>
    </div>
</body>
</html>
