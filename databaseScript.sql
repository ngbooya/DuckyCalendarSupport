-- COMMAND TO CREATE A NON ROOT USER
GRANT ALL PRIVLEGES ON *.* TO 'kevinnguyen'@'localhost' IDENTIFIED BY 'kevinnguyen';

-- DATABASE AND ALL TABLES ARE CREATED IN THE "createDB.php"

-- DATABASE DUMP COMMAND
-- /Applications/MAMP/Library/bin/mysqldump -u kevinnguyen -p --opt duckySupport > dump.sql

-- RESTORE DATABASE FROM DUMP FILE
-- /Applications/MAMP/Library/bin/mysql --host=localhost -ukevinnguyen -pkevinnguyen duckySupport < /Applications/MAMP/htdocs/DuckyCalendarSupport/dump.sql
