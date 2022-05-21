
<?php
if (isset($_POST['submit'])) {

    $new_message = array(
        "Titre de la vidéo" => $_POST['Nb_video'],
        "Vidéo" => $_POST['url'],
        
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
}
?>