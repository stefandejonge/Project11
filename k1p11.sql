CREATE TABLE `fix_question`(
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(50),
  `question` TEXT
);
CREATE TABLE `fix_answer`(
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT UNSIGNED,
  `answer` TEXT
);