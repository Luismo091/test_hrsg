<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // connect to the database
    $db = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');

    // prepare and execute the SQL query
    $stmt = $db->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
    $stmt->execute([$email, $password]);

    // check the result
    if ($stmt->rowCount() > 0) {
        // start the session and send a positive response
        session_start();
        $_SESSION['email'] = $email;
        echo 'Login successful';
    } else {
        // send a negative response
        echo 'Invalid credentials';
    }
}
?>