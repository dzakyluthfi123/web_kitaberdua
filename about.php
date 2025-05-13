<?php
$img_folder = "uploads/img/";
$video_folder = "uploads/video/";

$img_files = array_filter(scandir($img_folder), fn($f) => $f !== '.' && $f !== '..');
$video_files = array_filter(scandir($video_folder), fn($f) => $f !== '.' && $f !== '..');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About</title>
  <link rel="stylesheet" href="src/output.css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-blue-100 min-h-screen font-sans text-gray-800">

  <?php include "navbar.php"; ?>

  <section id="galeri-section" class="opacity-0 translate-y-10 transition-all duration-1000 pt-24 pb-20 px-4 sm:px-10">
    <div class="max-w-7xl mx-auto">
      <div class="text-center mb-14">
        <h1 class="text-4xl font-bold text-blue-800 mb-2">Selamat Datang Di, <span class="text-black">Galeri Kami</span>
        </h1>
        <p class="text-gray-600">Dokumentasi Kami selama ini sampai detik ini</p>
      </div>

      <!-- FOTO -->
      <div class="mb-16">
        <h2 class="text-3xl font-semibold text-blue-700 mb-6 ">📸 Foto</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <?php foreach ($img_files as $file): ?>
            <div class=" rounded-xl shadow-md hover:shadow-lg transition p-2 group">
              <img src="<?= $img_folder . $file ?>" 
                   alt="<?= $file ?>" 
                   class="w-full max-h-72 mx-auto object-contain rounded-lg transform group-hover:scale-105 transition duration-300" />
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- VIDEO -->
      <div>
        <h2 class="text-3xl font-semibold text-blue-700 mb-6 ">🎥 Video</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
          <?php foreach ($video_files as $file): ?>
            <div class=" rounded-xl shadow-md hover:shadow-lg transition p-2 group">
              <video controls 
                     class="w-full max-h-72 mx-auto object-contain rounded-lg transform group-hover:scale-105 transition duration-300">
                <source src="<?= $video_folder . $file ?>" type="video/mp4">
                Browser Anda tidak mendukung pemutaran video.
              </video>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <?php include "footer.php"; ?>
  <script>
  window.addEventListener('DOMContentLoaded', () => {
    const galeri = document.getElementById('galeri-section');
    galeri.classList.remove('opacity-0', 'translate-y-10');
    galeri.classList.add('opacity-100', 'translate-y-0');
  });
</script>

</body>
</html>
