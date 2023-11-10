<?php
$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'user@example.com' && $password === 'password') {
    echo "success"; // Authentication succeeded
} else {
    echo "error"; // Authentication failed
}
?>