<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Upload Galeri</title>
  <link rel="stylesheet" href="src/output.css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <?php include "navbar.php"; ?>
<br>
  <section class="pt-24 pb-16 px-6 sm:px-10">
    <div id="uploadBox" class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-md opacity-0 translate-y-10 transition-all duration-1000">
      <h1 class="text-2xl font-bold text-center text-blue-700 mb-6">Upload Foto / Video</h1>

      <form action="proses_upload.php" method="POST" enctype="multipart/form-data" class="space-y-6">
        <div>
          <label for="judul" class="block mb-1 font-medium">Judul</label>
          <input type="text" name="judul" id="judul" class="w-full border px-4 py-2 rounded-md" required>
        </div>

        <div>
          <label for="kategori" class="block mb-1 font-medium">Jenis File</label>
          <select name="kategori" id="kategori" class="w-full border px-4 py-2 rounded-md" required>
            <option value="img">Foto</option>
            <option value="video">Video</option>
          </select>
        </div>

        <div>
          <label for="file" class="block mb-1 font-medium">Pilih File</label>
          <input type="file" name="file" id="file" class="w-full" required>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
          Upload
        </button>
      </form>
    </div>
  </section>

  <?php include "footer.php"; ?>

  <script>
    // Efek muncul dari bawah saat halaman selesai dimuat
    window.addEventListener('DOMContentLoaded', () => {
      const box = document.getElementById('uploadBox');
      box.classList.remove('opacity-0', 'translate-y-10');
      box.classList.add('opacity-100', 'translate-y-0');
    });
  </script>
</body>
</html>
