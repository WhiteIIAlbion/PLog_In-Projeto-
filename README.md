# PLog_In-Projeto-

Banco de dados:

CREATE DATABASE bdlog_in;
USE bdlog_in;

CREATE TABLE `users` (
  `user_cod` int(11) NOT NULL AUTO INCREMENT  ,
  `user_name` varchar(20) NOT NULL,
  `user_pass` text NOT NULL,
  `user_photo` text DEFAULT NULL,
  `user_birth` date DEFAULT NULL,
  `user_complete_name` varchar(100) DEFAULT NULL,
  `user_biography` text DEFAULT NULL,
  `user_address` varchar(40) DEFAULT NULL,
  `user_number` varchar(6) DEFAULT NULL,
  `user_complement` varchar(20) DEFAULT NULL,
  `user_neighborhood` varchar(30) DEFAULT NULL,
  `user_city` varchar(30) DEFAULT NULL,
  `user_state` varchar(3) DEFAULT NULL,
  `user_phone` varchar(16) DEFAULT NULL,
  `user_notify` tinyint(1) DEFAULT NULL,
  `user_new_pass` text DEFAULT NULL,
  `user_status` tinyint(1) DEFAULT NULL,
  `user_profile` int(11) DEFAULT NULL
);

INSERT INTO `users` (`user_cod`, `user_name`, `user_pass`, `user_photo`, `user_birth`, `user_complete_name`, `user_biography`, `user_address`, `user_number`, `user_complement`, `user_neighborhood`, `user_city`, `user_state`, `user_phone`, `user_new_pass`, `user_status`, `user_profile`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);
