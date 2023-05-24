<?php
// Specify the directory containing the image files
$directory = "public/";

// Function to recursively find image files in subdirectories
function findImageFiles($directory) {
    $imageFiles = array();

    // Open the directory
    $handle = opendir($directory);

    // Iterate over each item in the directory
    while (($file = readdir($handle)) !== false) {
        if ($file !== '.' && $file !== '..') {
            $path = $directory . '/' . $file;

            // Check if the item is a directory
            if (is_dir($path)) {
                // Recursively search for image files in the subdirectory
                $subdirectoryFiles = findImageFiles($path);

                // Merge the image files found in the subdirectory
                $imageFiles = array_merge($imageFiles, $subdirectoryFiles);
            } else {
                // Check if the item is an image file
                if (preg_match('/\.(jpg|jpeg|png)$/i', $file)) {
                    $imageFiles[] = $path;
                }
            }
        }
    }

    // Close the directory
    closedir($handle);

    return $imageFiles;
}

// Find all image files in the directory (including subdirectories)
$imageFiles = findImageFiles($directory);

// Iterate over each image file
foreach ($imageFiles as $imageFile) {
    // Open the image
    $image = imagecreatefromstring(file_get_contents($imageFile));

    // Convert the image to WebP format
    $webpPath = pathinfo($imageFile, PATHINFO_DIRNAME) . '/' . pathinfo($imageFile, PATHINFO_FILENAME) . '.webp';
    imagewebp($image, $webpPath);

    // Free up memory
    imagedestroy($image);

    // Optional: Delete the original image file
    // unlink($imageFile);
}
?>