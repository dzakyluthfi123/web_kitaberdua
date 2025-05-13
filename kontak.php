<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kontak</title>
  <link rel="stylesheet" href="src/output.css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-white min-h-screen text-gray-800">

  <?php include "navbar.php"; ?>

  <section class="pt-28 pb-16 px-6 sm:px-10">
    <div class="max-w-6xl mx-auto bg-white p-10 rounded-3xl shadow-2xl">
      <h1 class="text-4xl font-bold text-blue-700 mb-10 text-center">Kontak Kami</h1>

      <div class="flex flex-col md:flex-row gap-10">
        
        <!-- Formulir: Muncul dari kiri -->
        <form id="whatsappForm" class="w-full md:w-1/2 space-y-6 opacity-0 -translate-x-10 transition-all duration-1000" >
          <div>
            <label class="block mb-1 font-medium" for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nama lengkap Anda">
          </div>

          <div>
            <label class="block mb-1 font-medium" for="hp">No HP</label>
            <input type="text" id="hp" name="hp" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="08xxxxxxxxxx">
          </div>

          <div>
            <label class="block mb-1 font-medium" for="saran">Saran / Pesan</label>
            <textarea id="saran" name="saran" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tulis pesan Anda..."></textarea>
          </div>

          <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-md shadow-md transition duration-300 w-full">
            Kirim
          </button>
        </form>

        <!-- Info Kontak: Muncul dari kanan -->
        <div id="contactInfo" class="w-full md:w-1/2 flex flex-col justify-center space-y-6 opacity-0 translate-x-10 transition-all duration-1000 delay-200">
          <div class="bg-blue-50 p-6 rounded-xl shadow flex items-center gap-4">
            <div class="text-3xl text-blue-600">📞</div>
            <div>
              <p class="text-sm text-gray-500">DZAKY</p>
              <p class="text-lg font-semibold">0812-2680-4248</p>
            </div>
          </div>

          <div class="bg-blue-50 p-6 rounded-xl shadow flex items-center gap-4">
            <div class="text-3xl text-green-500">📞</div>
            <div>
              <p class="text-sm text-gray-500">DEA</p>
              <p class="text-lg font-semibold">0882-0075-91202</p>
            </div>
          </div>

          <a href="https://wa.me/6281226804248" target="_blank"
            class="inline-flex items-center justify-center bg-green-500 hover:bg-green-600 text-white text-lg font-semibold px-6 py-3 rounded-lg shadow transition duration-300 w-full">
            <span class="mr-2">💬</span> Hubungi via WhatsApp
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php include "footer.php"; ?>

  <script>
    // WhatsApp kirim otomatis
    document.getElementById('whatsappForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const nama = document.getElementById('nama').value;
      const hp = document.getElementById('hp').value;
      const saran = document.getElementById('saran').value;

      const nomorTujuan = "6281226804248";
      const pesan = `Haiii, Saya ${nama}%0AHP: ${hp}%0AMau menyampaikan:%0A${saran}`;
      const url = `https://wa.me/${nomorTujuan}?text=${pesan}`;

      window.open(url, '_blank');
    });

    // Animasi muncul saat halaman diload
    window.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('whatsappForm');
      const info = document.getElementById('contactInfo');

      form.classList.remove('opacity-0', '-translate-x-10');
      form.classList.add('opacity-100', 'translate-x-0');

      info.classList.remove('opacity-0', 'translate-x-10');
      info.classList.add('opacity-100', 'translate-x-0');
    });
  </script>

</body>
</html>
