<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&display=swap" rel="stylesheet">
  <link href="test.css" rel="stylesheet">
  <title>Website</title>
  <link rel="icon" href="https://img.icons8.com/color/48/000000/apple-app-store--v1.png/">
</head>

<body>
<?php require "nav.php" ?>
<div class="container dis">
  <form action="c-handle.php">

    <label for="fname">First Name</label>
    <input type="name" id="fname" name="firstname" placeholder="Your name..">

    <label for="email">Your Email</label>
    <input type="email" id="email" name="youremail" placeholder="Your email..">
  
    <label for="subject">Subject</label>
    <textarea type="text" id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
  <?php require "footer.php" ?>
</body>
</html>