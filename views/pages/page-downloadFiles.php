<?php
$id = $_GET["id"];
$zip = new ZipArchive();

$filename = "proveedor$id.zip";


if ($zip->open($filename, ZIPARCHIVE::CREATE) === true) {
    // Get real path for our folder
    $rootPath = "assets/upload/Proveedor-ID$id";

    // Initialize archive object
    $zip = new ZipArchive();
    $zip->open($filename, ZipArchive::CREATE | ZipArchive::OVERWRITE);

    // Create recursive directory iterator
    /** @var SplFileInfo[] $files */
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($rootPath, RecursiveDirectoryIterator::SKIP_DOTS), // skip . and ..
        RecursiveIteratorIterator::SELF_FIRST,
        RecursiveIteratorIterator::CATCH_GET_CHILD // Ignore "Permission denied"
    );

    foreach ($files as $name => $file) {
        // Skip directories (they would be added automatically)
        if (!$file->isDir()) {
            // Get real and relative path for current file
            $filePath = $file->getRealPath();
            $relativePath = substr($filePath, strlen($rootPath) + 1);

            // Add current file to archive
            $zip->addFile($filePath, $relativePath);
        }
    }

    // Zip archive will be created only after closing object
    $zip->close();

    if (file_exists($filename)) {
        // Give the file to download
        header('Content-type: application/zip', 'charset=utf-8');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        ob_end_flush(); //Buffering since without it nothing will work
        readfile($filename); //Read the file

        unlink($filename); //Delete the variable
    }
}
