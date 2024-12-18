<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Save data to a file (simulate database)
    $entry = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents('submissions.txt', $entry, FILE_APPEND);

    // Respond with the submitted data
    echo "<h3>Form Submitted Successfully!</h3>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "<p style='color: red;'>Invalid request method.</p>";
}
?>
