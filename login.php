<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Phase</title>
    <link rel="stylesheet" href="stylelog.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="home.php" method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
      </form>
    </div>
  </body>
</html>
