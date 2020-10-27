-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 03:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steppingintohistory`
--

-- --------------------------------------------------------

--
-- Table structure for table `billingaddress`
--

CREATE TABLE `billingaddress` (
  `BillingAddressID` int(100) NOT NULL,
  `CustomerID` int(100) NOT NULL,
  `CardIssuerID` int(100) NOT NULL,
  `CardNumber` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cardissuer`
--

CREATE TABLE `cardissuer` (
  `CardIssuerID` int(100) NOT NULL,
  `CardIssuer` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cardissuer`
--

INSERT INTO `cardissuer` (`CardIssuerID`, `CardIssuer`) VALUES
(1, 'Visa'),
(2, 'Standard Chartered'),
(3, 'Master Card');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CityID` int(100) NOT NULL,
  `City` char(100) NOT NULL,
  `Country` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityID`, `City`, `Country`) VALUES
(1, 'Sidney', 'Australia'),
(2, 'Washington', 'USA'),
(3, 'Berlin', 'Germany'),
(4, 'Rome', 'Italy'),
(5, 'Manchester', 'United Kingdoms');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(100) NOT NULL,
  `CFirstName` char(100) NOT NULL,
  `CLastName` char(100) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `GenderID` int(100) NOT NULL,
  `CEmail` varchar(100) NOT NULL,
  `CTelephone` int(10) NOT NULL,
  `UserID` int(100) NOT NULL,
  `CityID` int(100) NOT NULL,
  `StreetAddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `CFirstName`, `CLastName`, `DateOfBirth`, `GenderID`, `CEmail`, `CTelephone`, `UserID`, `CityID`, `StreetAddress`) VALUES
(123, 'Jane', 'Doe', '1980-01-04', 2, 'janedoe@ymail.com', 934567856, 9, 5, '123 Main'),
(251, 'Opeyemi', 'Opebiyi', '1982-05-11', 1, 'oopey@yahoo.com ', 756745534, 10, 1, '1209 Main'),
(332, 'Mitchelle', 'Brown', '1999-02-14', 2, 'mitchbrown@gmail.com', 299475874, 11, 1, '102 Raym'),
(431, 'Kelvin', 'Rawlings', '1994-08-08', 1, 'rawlingskelvin@gmail.com', 947678124, 12, 1, '049 Harper'),
(641, 'Michael', 'Anderson', '1980-05-08', 1, 'Michaelanderson1@gmail.com', 897876862, 13, 2, '477 - Harper'),
(698, 'Morgan', 'Glass', '2000-07-18', 1, 'Morgan01@gmail.com', 976789344, 13, 5, '8765 wales'),
(701, 'Elijah', 'Hath', '1998-12-29', 1, 'elijah@hotmail.com', 235678965, 15, 3, '3012 Amston'),
(707, 'Kevin', 'Muhaan', '1995-04-13', 1, 'muhaan@muhaan.com', 754676279, 16, 4, '0632 crown'),
(759, 'Sandra', 'Hether', '1994-11-24', 2, 'HSandra4@gmail.com', 835657555, 17, 5, '1043 lee'),
(764, 'Claus', 'Donarld', '1994-12-14', 1, 'Clous.donarld@gmail.com', 20045636, 18, 2, '976 Meei');

-- --------------------------------------------------------

--
-- Table structure for table `eventstatus`
--

CREATE TABLE `eventstatus` (
  `EventStatusID` int(100) NOT NULL,
  `EventStatus` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `GenderID` int(100) NOT NULL,
  `Gender` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`GenderID`, `Gender`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `jobpositions`
--

CREATE TABLE `jobpositions` (
  `JobPositionID` int(100) NOT NULL,
  `JobPosition` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobpositions`
--

INSERT INTO `jobpositions` (`JobPositionID`, `JobPosition`) VALUES
(1, 'Driver'),
(2, 'Driver'),
(3, 'Tour Guide'),
(4, 'Lecturer'),
(5, 'Crafter'),
(6, 'Accounts');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `ItemID` int(100) NOT NULL,
  `OrderID` int(100) NOT NULL,
  `ProductID` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `TotalCost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`ItemID`, `OrderID`, `ProductID`, `Quantity`, `TotalCost`) VALUES
(1050, 117, 6041, 3, 1800),
(1127, 322, 1012, 1, 300),
(2570, 117, 2432, 1, 450),
(3282, 324, 2531, 4, 600),
(3724, 324, 2514, 1, 180);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(100) NOT NULL,
  `CustomerID` int(100) NOT NULL,
  `OrderDate` date NOT NULL,
  `OrderStatusID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CustomerID`, `OrderDate`, `OrderStatusID`) VALUES
(102, 332, '2019-03-02', 3),
(112, 641, '2019-03-17', 3),
(117, 698, '2019-01-05', 1),
(322, 332, '2020-01-05', 2),
(324, 123, '2020-01-05', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `OrderStatusID` int(100) NOT NULL,
  `OrderStatus` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`OrderStatusID`, `OrderStatus`) VALUES
(1, 'Unpaid'),
(2, 'Packaging'),
(3, 'Delivered'),
(4, 'Returned');

-- --------------------------------------------------------

--
-- Table structure for table `portallogin`
--

CREATE TABLE `portallogin` (
  `UserID` int(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `UserTypeID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portallogin`
--

INSERT INTO `portallogin` (`UserID`, `UserName`, `Password`, `UserTypeID`) VALUES
(9, 'JaneD', 'J3i0F1L0beQlW7Sd', 2),
(10, 'Opebiyi', 'zE5xLk83pt9bxFH3', 2),
(11, 'MitchelleB', 'm8tWNOu5V5MGPd7O', 2),
(12, 'K.Rawlings', 'UqZ12wlolasfpEaV', 2),
(13, 'Michael', 'ASKlyu3g2Loh2Wpv', 2),
(14, 'MorganG', 'cWwxoAi5LcSJWPuY', 2),
(15, 'Hath', 'FSZddEZnS9zlpAOB', 2),
(16, 'Muhaan', 'rviMouP7UxolbqmJ', 2),
(17, 'SandraHether', 'l9XRTd4de88IltuV', 2),
(18, 'Don', 'iMzn9z2rSr3Rpowy', 2),
(19, 'John.Adams', 'XEuoUmvLfsSWlwLe', 1),
(20, 'Simon.Rodger', 'GYfUbzGjnMOcB3Jz', 1),
(21, 'Harrison.Alphons', 'BBLsBuK9YeTV1Qgw', 1),
(22, 'Janet.Hailey', 'JenBvg3AViysDFaW', 1),
(23, 'Nicole.Scott', '4MpkvzmpdZLlH1la', 1),
(24, 'Collins.Martin', 'RsBktxzpClk2c4d1', 1),
(25, 'Mathew.Akaid', 'rsysdzX25Fnh95bZ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(100) NOT NULL,
  `ProductName` char(100) NOT NULL,
  `ProductCode` varchar(100) NOT NULL,
  `ProductDescription` varchar(100) NOT NULL,
  `ProductTypeID` int(100) NOT NULL,
  `SupplierID` int(100) NOT NULL,
  `SellingPrice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductCode`, `ProductDescription`, `ProductTypeID`, `SupplierID`, `SellingPrice`) VALUES
(1012, 'GM', 'O-345', 'Golden Ornament', 1, 1, 300),
(2432, 'My Zimbabwe', 'J-002', 'Book written by Charlse Ichwe', 2, 3, 450),
(2514, 'Sound Whisperer', 'B-934', 'Book written by Roja Scort', 2, 3, 180),
(2531, 'Mug', 'U-206', 'Zebra stripped mug', 3, 4, 150),
(6041, 'Rwanda Chair', 'F-654', 'Wooden curved chair ', 4, 4, 600),
(6918, 'Chess Board', 'O-102', 'Glass Chess board', 5, 5, 500);

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `ProductTypeID` int(100) NOT NULL,
  `ProductType` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`ProductTypeID`, `ProductType`) VALUES
(1, 'Ornaments'),
(2, 'Historical Book'),
(3, 'Utensils'),
(4, 'Furniture'),
(5, 'Glass Product');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ServiceID` int(100) NOT NULL,
  `ServiceName` char(100) NOT NULL,
  `JobPositionID` int(100) NOT NULL,
  `NoOfParticipants` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServiceID`, `ServiceName`, `JobPositionID`, `NoOfParticipants`) VALUES
(1, 'Visit To Historical Sites', 2, 10),
(2, 'Custom Lectures', 3, 30),
(3, 'Crafting', 4, 10),
(4, 'Geographical research and family location service', 1, 30),
(5, 'Workshop and Training', 1, 50);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(100) NOT NULL,
  `FirstName` char(100) NOT NULL,
  `LastName` char(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `JobPositionID` int(100) NOT NULL,
  `UserID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `SupplierID` int(100) NOT NULL,
  `SupplierName` varchar(100) NOT NULL,
  `SEmail` varchar(100) NOT NULL,
  `STelephpone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`SupplierID`, `SupplierName`, `SEmail`, `STelephpone`) VALUES
(1, 'Classic Ornament', 'sales@classicornament,org  \r\n\r\n', 997700018),
(2, 'Roja Scort ', 'roja@gmail.com ', 549300002),
(3, 'Zimbabwe publishers', 'info@zimbabwe.go.zi ', 2078888),
(4, 'Cute Kitchen', 'sale@cutekitchen.com \r\n\r\n', 2000331),
(5, 'Glam home', 'info@glamhome.co.uk', 22220009);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `UserTypeID` int(100) NOT NULL,
  `UserType` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`UserTypeID`, `UserType`) VALUES
(1, 'Staff'),
(2, 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billingaddress`
--
ALTER TABLE `billingaddress`
  ADD PRIMARY KEY (`BillingAddressID`),
  ADD KEY `BillingAddressID` (`BillingAddressID`,`CustomerID`,`CardIssuerID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `CardIssuerID` (`CardIssuerID`);

--
-- Indexes for table `cardissuer`
--
ALTER TABLE `cardissuer`
  ADD PRIMARY KEY (`CardIssuerID`),
  ADD KEY `CardIssuerID` (`CardIssuerID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CityID`),
  ADD KEY `CityID` (`CityID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `CityID` (`CityID`),
  ADD KEY `GenderID` (`GenderID`,`UserID`,`CityID`);

--
-- Indexes for table `eventstatus`
--
ALTER TABLE `eventstatus`
  ADD PRIMARY KEY (`EventStatusID`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`GenderID`),
  ADD KEY `GenderID` (`GenderID`);

--
-- Indexes for table `jobpositions`
--
ALTER TABLE `jobpositions`
  ADD PRIMARY KEY (`JobPositionID`),
  ADD KEY `JobPositionID` (`JobPositionID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `OrderID` (`OrderID`,`CustomerID`,`OrderStatusID`),
  ADD KEY `OrderID_2` (`OrderID`),
  ADD KEY `OrderStatusID` (`OrderStatusID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`OrderStatusID`),
  ADD KEY `OrderStatusID` (`OrderStatusID`);

--
-- Indexes for table `portallogin`
--
ALTER TABLE `portallogin`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `UserID` (`UserID`,`UserTypeID`),
  ADD KEY `UserTypeID` (`UserTypeID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `ProductTypeID` (`ProductTypeID`,`SupplierID`),
  ADD KEY `SupplierID` (`SupplierID`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`ProductTypeID`),
  ADD KEY `ProductTypeID` (`ProductTypeID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ServiceID`),
  ADD KEY `ServiceID` (`ServiceID`,`JobPositionID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`SupplierID`),
  ADD KEY `SupplierID` (`SupplierID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`UserTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billingaddress`
--
ALTER TABLE `billingaddress`
  MODIFY `BillingAddressID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cardissuer`
--
ALTER TABLE `cardissuer`
  MODIFY `CardIssuerID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CityID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `eventstatus`
--
ALTER TABLE `eventstatus`
  MODIFY `EventStatusID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `GenderID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobpositions`
--
ALTER TABLE `jobpositions`
  MODIFY `JobPositionID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `OrderStatusID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portallogin`
--
ALTER TABLE `portallogin`
  MODIFY `UserID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `ProductTypeID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ServiceID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `SupplierID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `UserTypeID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billingaddress`
--
ALTER TABLE `billingaddress`
  ADD CONSTRAINT `billingaddress_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
  ADD CONSTRAINT `billingaddress_ibfk_2` FOREIGN KEY (`CardIssuerID`) REFERENCES `cardissuer` (`CardIssuerID`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`GenderID`) REFERENCES `gender` (`GenderID`),
  ADD CONSTRAINT `customers_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `portallogin` (`UserID`),
  ADD CONSTRAINT `customers_ibfk_3` FOREIGN KEY (`CityID`) REFERENCES `city` (`CityID`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`OrderStatusID`) REFERENCES `orderstatus` (`OrderStatusID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`);

--
-- Constraints for table `portallogin`
--
ALTER TABLE `portallogin`
  ADD CONSTRAINT `UserTypeID` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`UserTypeID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ProductTypeID`) REFERENCES `producttype` (`ProductTypeID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`SupplierID`) REFERENCES `suppliers` (`SupplierID`);

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`SupplierID`) REFERENCES `suppliers` (`SupplierID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
