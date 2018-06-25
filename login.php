<?php
  require_once('php_action/connectvars.php');

  // Start the session
  session_start();
  
  // Clear the error message
  $error_msg = "";
  
  $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/profile_proto.php'; //dirname — Returns a parent directory's path === /MisMatchDateSite folder
  
  function test_input($database, $data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($database, $data);
    
    return $data;
}

  // If the user isn't logged in, try to log them in
  if (!isset($_SESSION['userId'])) {
    if (isset($_POST['submit'])) {

      // Connect to the database
      $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);  

      if (!empty($_POST['username']) && !empty($_POST['password'])) {
          
        $user_username = test_input($dbc, $_POST['username']);
        $user_password = test_input($dbc, $_POST['password']);
          
        echo var_dump($user_username);
        echo var_dump($user_password);
        
        // Look up the username and password in the database
        $query = "SELECT userId, username FROM account_info WHERE username = '$user_username' AND password = SHA('$user_password')";
        $data = mysqli_query($dbc, $query);

        if (mysqli_num_rows($data) == 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
          $row = mysqli_fetch_array($data);
          $_SESSION['userId'] = $row['userId']; 
          setcookie('userId', $row['userId'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
          
          mysqli_close($dbc);
          
          header('Location: ' . $home_url);
        }else {
          // The username/password are incorrect so set an error message
          $error_msg = ' Invalid username or password.';
        }
      }else {
        // The username/password weren't entered so set an error message
        $error_msg = 'Sorry, you must enter your username and password to log in.';
      }
    }
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log In</title>
  <link rel="stylesheet" type="text/css" href="style_login.css" />
  <style>
      .container{
        width: 20%;
        margin: auto;
        padding: 0 50px;
        margin-top: 6px;
      }
  </style>
</head>
<body>
  <h2>Log In</h2>

<?php
  // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
  if (empty($_SESSION['userId']) && empty($_COOKIE['userId'])) {
?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="imgcontainer">
          <img src="img_logo/img_avatar2.png" alt="Avatar" class="avatar"/>
        </div>

        <div class="container">
          <span class="error"><?php echo $error_msg;?></span><br>
          <label for="username">Username:</label>
          <input type="text" name="username" placeholder="Enter Username" value="<?php if (!empty($user_username)) echo $user_username; ?>" />
          <label for="password">Password:</label>
          <input type="password" name="password" placeholder="Enter Password" />

          <button type="submit" value="Log In" name="submit">Log In</button>
        </div>
  </form>

<?php
  }else {
    header('Location: ' . $home_url);
  }
?>

</body>
</html>
