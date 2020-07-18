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
  <section class="dim text-gray-700 body-font firstsecbg bg-img">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div
        class="pad align lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="text-1">Learn Online
          <br class="hidden lg:inline-block text-2">Platform for all E-Learners
        </h1>
        <div class="flex justify-center">
          <a href="register.php"><button
            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Register
            Now</button></a>
            <a href=""><button
            class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-blue-300 rounded text-lg"> Read
            More
          </button></a>
        </div>
      </div>
  </section>
  <?php require "footer.php" ?>
</body>
</html>