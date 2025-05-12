<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tentang Kami</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="src/output.css" />
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- About Section -->
  <section class="pt-24 pb-16 px-6 sm:px-10">
    <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-md overflow-hidden md:flex">
      <div class="md:w-1/2">
        <img src="uploads/img/deazaki.jpg" alt="Tentang Kami" class="object-cover w-full h-64 md:h-full">
      </div>
      <div class="p-8 md:w-1/2 flex flex-col justify-center">
        <h2 class="text-3xl font-bold text-blue-700 mb-4">Tentang Kami</h2>
        <p class="text-gray-700 text-lg leading-relaxed font-semibold">
         DEA RIZKIANA PUTRI & MUH. DZAKY LUTHFI
        </p>
        <br>
        <p class="text-gray-700 text-lg leading-relaxed">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aspernatur iste quos, 
          doloribus illum animi. Repudiandae, quas. Esse, molestias assumenda?
        </p>
      </div>
    </div>
  </section>
<?php include "footer.php"; ?>
</body>
</html>
