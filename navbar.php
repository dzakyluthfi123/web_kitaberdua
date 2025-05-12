<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow-md fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <div class="flex items-center">
          <span class="text-xl font-bold text-blue-600">MyWebsite</span>
        </div>
        <!-- Hamburger menu button -->
        <div class="md:hidden">
          <button id="menu-toggle" class="text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
        <!-- Menu items (desktop) -->
        <div class="hidden md:flex space-x-4">
          <a href="index.php" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Home</a>
          <a href="about.php" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">About</a>
          <a href="tentangkami.php" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Tentang Kami</a>
          <a href="kontak.php" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
          <a href="admin_upload.php" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-semibold transition">
  Upload
</a>

        </div>
      </div>
    </div>
    <!-- Mobile menu (hidden by default) -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
      <a href="index.php" class="block text-gray-700 hover:text-blue-600 py-2">Home</a>
      <a href="about.php" class="block text-gray-700 hover:text-blue-600 py-2">About</a>
      <a href="tentangkami.php" class="block text-gray-700 hover:text-blue-600 py-2">Tentang Kami</a>
      <a href="kontak.php" class="block text-gray-700 hover:text-blue-600 py-2">Kontak</a>
      <a href="admin_upload.php" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-semibold transition">
  Upload
</a>

    </div>
  </nav>
  
 


  <script src="src/script.js"></script>
</body>
</html>
