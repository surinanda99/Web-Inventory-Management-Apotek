<?php 
    function upload_foto($ft){ 
        $target_dir = "img1/"; 
        $target_file = $target_dir . basename($ft["name"]); 
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); 
        //cek jika filenya sudah ada 
        if(file_exists($target_file)){ 
            echo "Sorry, file already exist"; 
            $uploadOk = 0; } 
            //cek ukuran file 
        if($ft["size"]>500000){ 
            echo "Sorry, your file is too large"; 
            $uploadOk = 0; 
        } 
        //cek tipe file sesuai atau tidak 
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){ 
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed"; 
            $uploadOk = 0; 
        } 
        //cek jika $uploadOk merupakan 0 karena suatu error 
        if($uploadOk == 0){ 
            echo "Sorry, your file was not uploaded"; 
        } 
        //jika sudah ok semua maka upload file 
        else{ 
            if(move_uploaded_file($ft["tmp_name"], $target_file)){ 
                return true; 
            }else{ 
                return false; 
            } 
        } 
    } 
?>