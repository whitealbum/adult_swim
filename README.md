# adult_swim

To restore the database:
mysql -u root -p adult_swim < adult_swim.sql

If that doesn't work, you may need to create the database before importing:
CREATE DATABASE IF NOT EXISTS `adult_swim` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `adult_swim`;

