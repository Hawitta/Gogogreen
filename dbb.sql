CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project`;


DROP TABLE IF EXISTS `volunteers`;
CREATE TABLE IF NOT EXISTS `volunteers` (
  `username` varchar(19) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
   `password` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `dob` date NOT NULL '',
  `residence` varchar(10) NOT NULL DEFAULT,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
)

TRUNCATE TABLE `volunteers`;


INSERT INTO `volunteers` (`username`, `name`, `address`, `password`, `email`, `dob`, `residence`) VALUES
('Shelili', 'Sheila Nuandi', 'Nairobi, Donholm','$2y$10$sRw2QHh//fxT6tA.WHsM/u6eYZy.m8kvw3bSW96vuv3qKr.Z9qXs6', 'sheli@gmail.com','2002-08-09', 'Kenya'),
('Lisa_12', 'Lisa Kawera', 'Kisumu, Jogoo town','$2y$10$hhTeY.eDS5MOTUSerw6YIOcmdmaTHH.FB.ALFun05/qf5hFcu9b3C', 'lisahoott@gmail.com', '1990-06-09','Uganda'),
('Johnnyy', 'John Muigai', 'Nairobi, South C','$2y$10$bKrOV4PPs9JszOaV/emmWe/feMEUA1EjIJeAgPS7MHer/9gd4Bbjq', 'jmuigai@gmail.com' '1983-06-09','Kenya'),
