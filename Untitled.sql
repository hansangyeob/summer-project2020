drop table if exists user_app;
drop table if exists mood;
drop table if exists hashtag;
drop table if exists post;


CREATE TABLE `user_app` (
  `num` int AUTO_INCREMENT,
  `nick_name` varchar(10) PRIMARY KEY,
  `email` varchar(100),
  `password` varchar(20),
  `password_repeat` varchar(20),
  `start_date` timestamp
);
ALTER TABLE `user_app` ADD FOREIGN KEY (`num`) REFERENCES `user_app` (`nick_name`);

CREATE TABLE `mood` (
  `m_id` int PRIMARY KEY AUTO_INCREMENT,
  `degree_of_mood` int,
  `m_date` timestamp,
  `m_type` varchar(10)
);

CREATE TABLE `hashtag` (
  `h_id` varchar(255) PRIMARY KEY,
  `nick_name` varchar(10),
  `h_content` text,
  `h_date` timestamp
);
ALTER TABLE `hashtag` ADD FOREIGN KEY (`nick_name`) REFERENCES `user_app` (`nick_name`);


CREATE TABLE `post` (
  `p_id` varchar(255) PRIMARY KEY,
  `p_date` timestamp,
  `h_content` text,
  `m_id` int,
  `audio_url` varchar(255),
  `img_url` varchar(255)
);

ALTER TABLE `post` ADD FOREIGN KEY (`h_content`) REFERENCES `hashtag` (`h_content`);
ALTER TABLE `post` ADD FOREIGN KEY (`m_id`) REFERENCES `mood` (`m_id`);
