<?php
include_once 'config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = $_POST['email'];
    $pwd = $_POST['rpw'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT ID, Email, Password FROM register WHERE Email = ?");
    $stmt->bind_param("s", $mail);
    $stmt->execute();
    $stmt->bind_result($id, $email, $hashed_password);
    $stmt->fetch();
    $stmt->close();

    if (password_verify($pwd, $hashed_password)) {
        // Password matches
        $_SESSION['id'] = $id;
        $_SESSION['mail'] = $email;
        header("Location: ../../IT20252090/html/home.html");
        exit();
    } else {
        // Password does not match
        header("Location: ../html/login.html");
        exit();
    }
}

$conn->close(); // Close the connection at the end of your script.
?>
