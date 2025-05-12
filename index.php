<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <?php include "navbar.php"; ?>
  <style>
    @keyframes wave {
      0% { transform: rotate(0deg); }
      10% { transform: rotate(14deg); }
      20% { transform: rotate(-8deg); }
      30% { transform: rotate(14deg); }
      40% { transform: rotate(-4deg); }
      50% { transform: rotate(10deg); }
      60% { transform: rotate(0deg); }
      100% { transform: rotate(0deg); }
    }

    .wave {
      display: inline-block;
      transform-origin: 70% 70%;
      animation: wave 2s infinite;
    }
  </style>
    <!-- Home Section -->
<section class="bg-blue-50 min-h-screen flex items-center justify-center px-6 py-16">
  <div class="text-center max-w-xl">
  <h1 class="text-4xl font-extrabold text-blue-700 mb-4 text-center">
    <span class="wave">👋</span> Selamat Datang di Website Kita
  </h1>
    <p class="text-gray-700 text-lg mb-6">
      Ini adalah tempat terbaik kami untuk menyimpan dan membagikan <strong>foto</strong> maupun <strong>video</strong> dengan aman dan mudah.
    </p>
    <a href="#"
       class="group inline-flex items-center justify-center bg-blue-600 text-white text-lg font-semibold px-6 py-3 rounded-full shadow hover:bg-blue-700 transition duration-300 relative overflow-hidden">
      <span class="mr-2">Let's Go</span>
      <span class="inline-block transform transition-transform duration-500 group-hover:-translate-y-8 group-hover:opacity-0">🚀</span>
    </a>
  </div>
</section>

<script src="src/script.js"></script>
<?php include "footer.php"; ?>
</body>
</html>