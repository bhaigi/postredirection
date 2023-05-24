<!DOCTYPE html>
<html>
<body>

<?php
// Get the value from the original URL
$value = $_SERVER['REQUEST_URI'];
// Remove the leading forward slash (/) from the value
$value = ltrim($value, '/');

// Build the new URL with the value included
$newUrl = 'https://3293.play.quizzop.com/get-started' . $value;

// Redirect the user to the new URL
header('Location: ' . $newUrl);
exit;
?>

</body>
</html>
