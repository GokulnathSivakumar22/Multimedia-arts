<?php
include 'db.php'; // Include database connection

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST["title"];
    $description = $_POST["description"];

    // Insert data into the database
    $sql = "INSERT INTO artworks (title, description) VALUES ('$title', '$description')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO your_table_name (name, email, message) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $message]);

    // Respond with a success message (you can customize this)
    echo json_encode(['status' => 'success', 'message' => 'Data inserted successfully']);
} else {
    // Respond with an error message for unsupported request methods
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
}
}

// Close the database connection
$conn->close();
?>
