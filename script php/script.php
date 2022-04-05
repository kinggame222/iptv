



<?php
if (isset($_POST['submit'])) {

    $new_message = array(
        "numeros de la video" => $_POST['Nb_video'],
        "url" => $_POST['url'],
        "nom de la video" => $_POST['nom']
    );

    if (filesize("vyt.json") == 0) {
        $first_record = array($new_message);
        $data_to_save = $first_record;
    } else {
        $old_records = json_decode(file_get_contents("vyt.json"));
        array_push($old_records, $new_message);
        $data_to_save = $old_records;
    }

    $encoded_data = json_encode($data_to_save, JSON_PRETTY_PRINT);

    if (!file_put_contents("vyt.json", $encoded_data, LOCK_EX)) {
        $error = "Error storing message, please try again";
    } else {
        $success =  "Message is stored successfully";
    }
    $str = file_get_contents('vyt.json');
    $json = json_decode($str, true);
    echo '<pre>' . print_r($json, true) . '</pre>';
}

?>