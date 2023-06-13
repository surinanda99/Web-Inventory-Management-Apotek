<?php
function upload_foto($ft) {
    $target_dir = "img/";
    $target_file = $target_dir . basename($ft["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek jika file sudah ada
    if (file_exists($target_file)) {
        echo "Sorry, file already exists";
        $uploadOk = 0;
    }

    // Cek ukuran file
    if ($ft["size"] > 500000) {
        echo "Sorry, your file is too large";
        $uploadOk = 0;
    }

    // Cek tipe file yang diperbolehkan
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed";
        $uploadOk = 0;
    }

    // Cek jika $uploadOk adalah 0 karena terjadi kesalahan
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded";
    } else {
        // Jika semua syarat terpenuhi, unggah file
        if (move_uploaded_file($ft["tmp_name"], $target_file)) {
            return true;
        } else {
            return false;
        }
    }
}
?>
