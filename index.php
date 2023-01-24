
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Contact Us</title>
</head>

<body>

  <div class="container">
    <h1>Contact Us Here</h1>

    <form action="submit.php" method="POST" class="main-form">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" class="gt-input">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="gt-input">
      </div>

      <div class="form-group">
        <label for="int">Phone Number</label>
        <input type="tel" name="number" max="" id="number" class="gt-input">
      </div>

      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea name="message" id="message" cols="30" rows="10"
          class="gt-input gt-text"></textarea>
      </div>

      <input type="submit" class="gt-button" name="submit" value="Submit">
      <div class="form-status">
        <?php //echo $status ?>
      </div>
    </form>
  </div>

  <script src="main.js"></script>

</body>

</html>
