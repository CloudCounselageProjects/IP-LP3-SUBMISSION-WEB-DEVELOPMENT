SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";


--

-- Database`foodtag`

--
CREATE DATABASE foodtag;

--

-- Table structure for table `farmerlogin`

--
CREATE TABLE IF NOT EXISTS `farmerlogin` (
`id` int(11)  NOT NULL AUTO_INCREMENT,
name varchar(50) NOT NULL ,
username varchar(50) NOT NULL,
password varchar(100) NOT NULL,
address varchar(100) NOT NULL,
phoneno int(10) NOT NULL,
Primary Key(id)
);

--
-- Table structure for table `farmer`

--
CREATE TABLE IF NOT EXISTS  'farmer' (
id int(11) NOT NULL AUTO_INCREMENT,
name varchar(20) NOT NULL,
phone int(10) NOT NULL,
address varchar(100) NOT NULL,
product varchar(50) NOT NULL,
quantity int(10) NOT NULL,
price int(10) NOT NULL,
association varchar(50) NOT NULL,
retailer_id int(10) NOT NULL,
PRIMARY KEY(id)
);


--
-- Table structure for table `retailerlogin`

--
CREATE TABLE IF NOT EXISTS 'retailerlogin'(
name varchar(50) NOT NULL,
email varchar(50) NOT NULL,
phoneno int(10) NOT NULL,
address varchar(100) NOT NULL,
username varchar(50) NOT NULL,
password varchar(50) NOT NULL,
id int(11) 
);