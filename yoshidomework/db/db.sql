drop database if exists testdate;
create database testdate default character set utf8 collate utf8_general_ci;
grant all on testdate.* to 'staff'@'localhost' identified by 'password';
use testdate;

create table bosyu
(user_id varchar(256) not null,
 tema varchar(256) not null,
 naiyou varchar(1024) not null,
 start_time date,
 end_time date,
 keisai_time date not null,
 ninzu int(11),
 categoly_id varchar(256) not null,
 sns varchar(128) not null,
 PRIMARY KEY (user_id,tema));

create table categoly
(categoly_id int(11) not null AUTO_INCREMENT,
 categoly_mei varchar(256) not null,
 primary key (categoly_id)
);

create table keiziban
(keizi_id int(11) not null AUTO_INCREMENT,
 comment varchar(1024) not null,
 primary key (keizi_id)
 );

 create table korona_user
 (user_id varchar(256) not null,
  mail varchar(512) not null,
  password char(8) not null,
  primary key (user_id)
 );

 create table profile
 (user_name varchar(512) not null,
  icon mediumblob not null,
  birth date not null,
  syussin varchar(128) not null,
  job varchar(128) not null,
  hobby varchar(256) not null,
  tokugi varchar(256) not null,
  myboom varchar(256) not null,
  love_singer varchar(512) not null,
  now_get varchar(512) not null,
  comment varchar(512) not null,
  twitter_id varchar(256),
  insta_id varchar(256),
  face_id varchar(256),
  user_id varchar(256) primary key
 );

 create table sanka
 (bosyuuser_id varchar(256) not null,
  sankseser_id varchar(256) not null,
  categoly_id varchar(256) not null
 );