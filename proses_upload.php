<?php
if (isset($_POST['judul']) && isset($_POST['kategori']) && isset($_FILES['file'])) {
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];

    // Tentukan direktori tujuan
    $target_dir = $kategori == "img" ? "uploads/img/" : "uploads/video/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Cek apakah file berhasil di-upload
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        // Sukses upload, redirect atau tampilkan pesan
        echo "File telah di-upload dengan sukses.";
        header("Location: about.php"); // Redirect ke halaman About setelah upload sukses
        exit();
    } else {
        echo "Terjadi kesalahan saat meng-upload file.";
    }
}
?>
