<?php

    $image_file = $_FILES['media'];
    $image = $image_file['name'];
    $tmp_name = $image_file['tmp_name'];
    $error = $image_file['error'];
    
    $t = time();
    $new_img_name = "IMG-" . $t;
    
    $img_upload_path = '../../assets/images/Products/'. $new_img_name . '.jpg';
    
    if(move_uploaded_file($tmp_name, $img_upload_path)) {
        echo json_encode(["status" => "success", "image_name" => $new_img_name]);
    }
    
            

?>