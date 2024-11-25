<?php

// Database connection details
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_NAME = "glamaura";

// Output file for the backup
$OUTPUT_FILE = "backup.sql";

// Construct the mysqldump command
$command = "mysqldump -h $DB_HOST -u $DB_USER $DB_NAME > $OUTPUT_FILE 2>&1";

// Execute the command
exec($command, $output, $returnCode);

// Check if the command was successful
if ($returnCode === 0) {
    echo "Backup completed successfully. The backup file is: $OUTPUT_FILE";
} else {
    echo "Backup failed. Please check your database connection details and try again.";
    echo "<pre>" . implode("\n", $output) . "</pre>";
}
?>
