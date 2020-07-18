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
  <header class="text-gray-700 body-font bgcolornav sticky">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center padd ">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0 bgcolornav">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
          viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <a href="#" class="ml-3 text-xl text">Find YOur Tutors</a>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center text">
        <a href="./home.php" class=" mr-5 hover:text-gray-900">About Us</a>
        <a href="./mission.php" class=" mr-5 hover:text-gray-900"> Our Mission</a>
        <a href="./instructor.php" class=" mr-5 hover:text-gray-900">Become an Instructor</a>
        <a href="./contact.php" class=" mr-5 hover:text-gray-900">Contact Us</a>
      </nav>
      <input type="text" placeholder="search here" class="search" id="textbox">
      <button
        class="navmar btn inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0 size">Search
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>
  </header>


</body>
</html>