<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="dist/components/grid.min.css">
    <link rel="stylesheet" type="text/css" href="dist/semantic.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  </head>
  <body>
    <div class="ui middle aligned center aligned grid">
      <div class="four wide computer eight wide tablet column">
        <div class="ui segment pl-25 pr-25 pt-15 pb-15">
          <h1 class="ui header">
            <div class="content">
              Login
              <div class="sub header">
                and see happiness
              </div>
            </div>
          </h1>

          <form action="login.php" method="post">
            <div class="group">
              <input type="text" name="username" required>
              <span class="bar"></span>
              <label>Username</label>
            </div>
            <div class="group" style="margin-bottom: 10px">
              <input type="password" name="password" required>
              <span class="bar"></span>
              <label>Password</label>
            </div>
            <br>
            <div class="ui grid" style="float:right;">
              <div class="column">
                <button type="submit" name="button" class="ui fluid button ripple pink-custom-button">To infinity and beyond</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
