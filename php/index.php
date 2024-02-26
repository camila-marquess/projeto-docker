<?php
$servername = "mysql";
$username = "root";
$password = "example";
$dbname = "messages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO messages (message) VALUES (?)");
    $stmt->bind_param("s", $message);

    // Execute
    $stmt->execute();

    // Close statement
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL Message App</title>
</head>
<body>
    <h2>Enviar Mensagem</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <textarea name="message"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>