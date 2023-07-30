#CREATE DATABASE softeng;
use softeng;
drop table dog;
CREATE TABLE dog(d_userid varchar(50) NOT NULL PRIMARY KEY,d_name varchar(50),u_agency varchar(50), d_photo LONGBLOB NOT NULL,photo_ext varchar(50),d_age int(10),d_breed varchar(50),d_color varchar(50),d_healthcondition varchar(100),d_vaccination varchar(100))ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
CREATE TABLE available_dogs(d_userid varchar(50) NOT NULL);
CREATE TABLE adopted_dogs(d_userid varchar(50) NOT NULL,u_userid varchar(50));
CREATE TABLE booked_dogs(d_userid varchar(50),u_userid varchar(50));
CREATE TABLE requested_dogs(d_userid varchar(50),u_userid varchar(50));
CREATE TABLE subscriber(u_userid varchar(50),a_userid varchar(50));
CREATE TABLE admin(ad_userid varchar(50),ad_password varchar(50));#prob
CREATE TABLE pickup_request(u_userid varchar(50),a_userid varchar(50),no_of_dogs int(10),location varchar(100),special_comment varchar(100));
CREATE TABLE appointment(u_userid varchar(50),a_userid varchar(50),appointment_date date, varchar(50));#prob
CREATE TABLE agency(a_userid varchar(50) NOT NULL PRIMARY KEY,a_name varchar(50),a_password varchar(50),a_address varchar(100),a_phone int(10),a_email varchar(50));
CREATE TABLE customer(u_userid varchar(50) NOT NULL PRIMARY KEY,u_name varchar(50),u_password varchar(50),u_address varchar(100),u_phone int(10),u_email varchar(50));

CREATE TABLE appointment(u_userid varchar(50),a_userid varchar(50),appointment_date varchar(50), varchar(50));#prob
