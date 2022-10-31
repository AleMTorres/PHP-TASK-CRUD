<?php

include("db.php");

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query failed");
    }
    echo "Saved into db";

    $_SESSION['message'] = 'Task Saved'; //Guarda el mensaje en session
    $_SESSION['message_type'] = 'success'; //Lo muestra con el color que aplica boostrap

    header("Location: index.php");
}

?>