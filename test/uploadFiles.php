<?php
// Receive the uploaded image file
$uploadedFile = $_FILES['image'];

// Process the uploaded file and move it to the desired folder
$targetFolder = 'uploads/';
$targetPath = $targetFolder . basename($uploadedFile['name']);

if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
  // Image uploaded successfully
  // You can store the image URL or other information in your database here
  $imageUrl = 'http://whynot1.atwebpages.com/' . $targetPath;

  // Return a response or perform any additional actions
  echo "Image uploaded successfully. Image URL: " . $imageUrl;
} else {
  // Image upload failed
  echo "Image upload failed.";
}
?>
