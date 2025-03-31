
<?php
try {
    $conn = new PDO('mysql:host=localhost; dbname=db',  'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("Connection failed: " . $e->getMessage());
}
?>
