DROP DATABASE IF EXISTS `webhacktest`;
CREATE DATABASE `webhacktest`;
USE `webhacktest`;

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member`(
  `no` INT NOT NULL AUTO_INCREMENT COMMENT '회원번호',
  `id` CHAR(12) NOT NULL UNIQUE COMMENT '회원아이디',
  `name` CHAR(18) NOT NULL COMMENT '이름',
  `pw` CHAR(20) NOT NULL COMMENT '비밀번호',
  `age` TINYINT COMMENT '나이',
  `nickname` CHAR(30) UNIQUE COMMENT '닉네임',
  `email` VARCHAR(255) UNIQUE COMMENT '이메일',
  `reg_date` DATETIME COMMENT '가입일',
  PRIMARY KEY (`no`)
) COMMENT '회원정보 테이블';

DROP TABLE IF EXISTS `board`;
CREATE TABLE `board`(
  `board_no` INT NOT NULL AUTO_INCREMENT,
  `board_writer` CHAR(30) NOT NULL,
  `board_pass` CHAR(20) NOT NULL,
  `board_email` VARCHAR(255),
  `board_subject` VARCHAR(100) NOT NULL,
  `board_contents` TEXT NOT NULL,
  `htmlTag` ENUM('T', 'F') NOT NULL COMMENT 'HTML인코딩',
  `view_count` INT NOT NULL DEFAULT 0,
  `file_name` VARCHAR(255),
  `file_size` INT,
  `write_date` DATETIME,
  PRIMARY KEY (`board_no`)
) COMMENT '게시글 테이블';
