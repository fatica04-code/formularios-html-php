<?php
print_r($_GET);
print_r($_POST);
print_r($_FILES);

if (isset($_FILES["documento"])&& $_FILES["documento"]["error"]===UPLOAD_ERR_OK) {
move_uploaded_file(
    $_FILES["documento"]["tmp_name"], $_FILES["documento"]["name"]
);
}

error_log(
    "\n".json_encode([
        'FILES' => $_FILES,
        'GET' => $_GET,
        'POST' => $_POST
    ]),
    3,
    "datos_recibido.txt"
);