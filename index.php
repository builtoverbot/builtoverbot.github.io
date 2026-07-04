<?php
/**
 * index.php
 * This script loads and outputs the contents of index.html.
 * It uses readfile() for efficiency and includes error handling.
 */

// Path to the HTML file
$htmlFile = __DIR__ . '/index.html';

// Check if the file exists and is readable
if (is_readable($htmlFile)) {
    // Output the HTML file contents directly
    readfile($htmlFile);
} else {
    // Send a 404 header and show an error message
    http_response_code(404);
    echo "<h1>404 Not Found</h1>";
    echo "<p>The requested page could not be found.</p>";
}
?>
