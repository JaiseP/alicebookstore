<?php

// Function for uploading image
// Credits: Elias Abdurrahman,  https://github.com/codingWithElias/image-upload-php-and-mysql
function uploadImage($image_file) {
    $image = $image_file['name'];
    $img_size = $image_file['size'];
    $tmp_name = $image_file['tmp_name'];
    $error = $image_file['error'];
    if ($error === 0) {
        if ($img_size > 125000) {
            $status = "Sorry, your file is too large.";
            return $status;
        } else {
            $img_ex = pathinfo($image, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png"); 

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = '../assets/images/Products/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                return "success";
            } else {
                $status = "You can't upload files of this type";
                return $status;
            }
        }
    } else {
            $status = "unknown error occurred!";
            return $status;
    }
}

?>