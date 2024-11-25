@echo off

REM Database connection details
set DB_HOST=localhost
set DB_USER=root
set DB_PASSWORD=""
set DB_NAME=glamaura

REM Output file for the backup
set OUTPUT_FILE=backup.sql

REM Use mysqldump to create a backup
echo Running mysqldump...
"C:\xampp\mysql\bin\mysqldump.exe" -h %DB_HOST% -u %DB_USER% %DB_NAME% > %OUTPUT_FILE%
echo mysqldump completed with error level %ERRORLEVEL%

REM Check if the mysqldump command was successful
if %ERRORLEVEL% equ 0 (
    echo Backup completed successfully. The backup file is: %OUTPUT_FILE%
) else (
    echo Backup failed. Please check your database connection details and try again.
)
