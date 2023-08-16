-- Drop existing tables if they exist
DROP TABLE IF EXISTS `tasks`;
DROP TABLE IF EXISTS `submissions`;
DROP TABLE IF EXISTS `prerequisites`;
DROP TABLE IF EXISTS `users`;
DROP TABLE IF EXISTS `meeting`;
DROP TABLE IF EXISTS `projects`;

-- Create the `projects` Table
CREATE TABLE `projects` (
  `project_id` int NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_description` text,
  `project_leader` int DEFAULT NULL,
  `project_creation_date` date DEFAULT NULL,
  `project_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Create the `meeting` Table
CREATE TABLE `meeting` (
  `meeting_id` int NOT NULL,
  `meeting_title` varchar(255) NOT NULL,
  `meeting_link` varchar(255) DEFAULT NULL,
  `meeting_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `is_cancelled` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`meeting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Create the `users` Table
CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(45) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `tech_stack` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `project_id` (`project_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Create the `prerequisites` Table
CREATE TABLE `prerequisites` (
  `prerequisite_id` int NOT NULL,
  `technology_stack` varchar(255) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` text,
  PRIMARY KEY (`prerequisite_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Create the `tasks` Table
CREATE TABLE `tasks` (
  `task_id` int NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `project_id` int DEFAULT NULL,
  `completion_status` varchar(50) DEFAULT NULL,
  `task_description` text,
  `start_date` date DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`task_id`),
  KEY `project_id` (`project_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`),
  CONSTRAINT `tasks_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Create the `submissions` Table
CREATE TABLE `submissions` (
  `submission_id` int NOT NULL,
  `user_id` int NOT NULL,
  `task_id` int NOT NULL,
  `submission_date` datetime NOT NULL,
  `submission_comments` text,
  `submission_links` text,
  `approval_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`submission_id`),
  KEY `user_id` (`user_id`),
  KEY `task_id` (`task_id`),
  CONSTRAINT `submissions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `submissions_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

