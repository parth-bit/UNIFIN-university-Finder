<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="login.css" />
  <link rel="website icon" type="png"
    href="https://lh3.googleusercontent.com/uXmBzx5DIc3i4pWyoDAEIYVe9fNKzFSVdHLcnziVYio_ItGDYA8P60jFZ0c2kpSWCe-cI_LvxbvUugnG2n_Snbh9Jnq4N39kYs-eAZE" />

  <title>Unifin Login Page</title>
  <style>
    #GFG {
      text-decoration: none;
    }
  </style>
</head>

<body background="https://th.bing.com/th/id/OIP.yIup-PXuXpfbr1b6Pojf5gHaE8?pid=ImgDet&rs=1">
  <header>
    <button data-text="Awesome" class="button">
      <span class="actual-text">&nbsp;Unifin&nbsp;</span>
      <span class="hover-text" aria-hidden="true">&nbsp;Unifin&nbsp;</span>
    </button><br>
    <br>
    <h4> University Finder</h4>
  </header>
  <main>
    <form method="post">
      <h2>Login</h2>
      <input type="text" placeholder="Username" name="username" />

      <input type="password" placeholder="Password" name="password" />
      <button>
        <a id="GFG" href="home.html"><span class="button_top" onclick="formlog();"> Submit
          </span></a>
      </button>
      <p align="center"> Don't have an account? <a href="signup.php"> Sign Up</a></p>
    </form>
  </main>

  <footer>
    <p>&copy; Unifin 2023</p>
  </footer>
  <script src="./log.js"></script>
</body>

</html>


<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "contact_us";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM signup WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);


  if (mysqli_num_rows($result) == 1) {

    $_SESSION["username"] = $username;
    header("Location: home.php");
  } else {

    echo "Invalid username or password!";
  }
}
?>