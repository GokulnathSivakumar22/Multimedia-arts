<?php
include 'db.php'; // Include database connection

// Retrieve data from the database
$result = $conn->query("SELECT * FROM artworks");

// Display data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li><strong>Title:</strong> " . $row["title"] . " - <strong>Description:</strong> " . $row["description"] . "</li>";
    }
} else {
    echo "No records found";
}

// Close the database connection
$conn->close();
?>
