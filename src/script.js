const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

menuToggle.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});

  document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const nama = document.getElementById('nama').value;
    const hp = document.getElementById('hp').value;
    const saran = document.getElementById('saran').value;

    const nomorTujuan = "6281226804248"; // Ganti dengan nomor WhatsApp tujuan (tanpa +)

    const pesan = `Halo, saya ${nama}%0AHP: ${hp}%0ASaya ingin menyampaikan:%0A${saran}`;
    const url = `https://wa.me/${nomorTujuan}?text=${pesan}`;

    window.open(url, '_blank');
  });

