<?php

session_start(); //sirve para guardar datos dentro de una sesion y poder traerlos

$conn = mysqli_connect(
    'localhost', //servidor
    'root', //usuario
    '', //contraseña app
    'tasks', //db
);

// if (isset($conn)) {
//     echo 'db connected';
// }

?>