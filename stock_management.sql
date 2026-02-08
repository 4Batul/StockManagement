
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Electronics'),
(2, 'Stationery'),
(3, 'Accessories'),
(4, 'Electronics'),
(5, 'Stationery'),
(6, 'Office Equipment'),
(7, 'Accessories'),
(8, 'Computer Parts');

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `cost_price` decimal(10,2) DEFAULT NULL,
  `selling_price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `reorder_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `products` (`product_id`, `product_name`, `category_id`, `supplier_id`, `cost_price`, `selling_price`, `quantity`, `reorder_level`) VALUES
(1, 'Keyboard', 1, 1, 1500.00, 2000.00, 80, 5),
(2, 'Mouse', 1, 1, 800.00, 1200.00, 16, 3),
(3, 'Notebook', 2, 2, 100.00, 150.00, 50, 10),
(4, 'USB Flash Drive 32GB', 1, 3, 1200.00, 1700.00, 30, 7),
(5, 'Laptop Stand', 3, 2, 2500.00, 3200.00, 8, 3),
(6, 'Printer', 3, 4, 25000.00, 30000.00, 4, 2),
(7, 'Notebook A4', 2, 2, 80.00, 120.00, 50, 15),
(8, 'Pen Blue', 2, 2, 20.00, 30.00, 100, 30),
(9, 'Calculator', 2, 1, 900.00, 1300.00, 12, 4),
(10, 'HDMI Cable', 5, 3, 500.00, 800.00, 18, 5),
(11, 'Power Bank', 5, 3, 2200.00, 3000.00, 6, 3),
(12, 'Headphones', 5, 1, 1800.00, 2500.00, 9, 4),
(13, 'Wireless Mouse', 1, 1, 1200.00, 1800.00, 7, 3),
(14, 'Desk Organizer', 4, 2, 600.00, 900.00, 15, 5),
(15, 'Webcam', 1, 3, 3500.00, 4500.00, 5, 2),
(16, 'Router', 1, 4, 4000.00, 5200.00, 6, 3),
(17, 'Webcam HD', 1, 3, 3500.00, 4500.00, 5, 2),
(18, 'UPS Backup', 1, 4, 9000.00, 12000.00, 3, 2),
(19, 'Pen Black', 2, 2, 20.00, 30.00, 90, 30),
(20, 'Highlighter', 2, 2, 60.00, 100.00, 40, 10),
(21, 'Stapler', 2, 2, 300.00, 450.00, 18, 5),
(22, 'Scanner', 3, 4, 18000.00, 23000.00, 3, 2),
(23, 'Projector', 3, 3, 45000.00, 55000.00, 2, 1),
(24, 'Office Chair', 3, 2, 12000.00, 16000.00, 5, 2),
(25, 'Office Desk', 3, 2, 20000.00, 26000.00, 4, 2),
(26, 'Shredder Machine', 3, 3, 15000.00, 19000.00, 3, 2),
(27, 'Laptop Bag', 4, 1, 2500.00, 3200.00, 8, 3),
(28, 'Mouse Pad', 4, 1, 200.00, 350.00, 25, 8),
(29, 'USB Flash Drive 32GB', 5, 3, 1200.00, 1700.00, 25, 7),
(30, 'External Hard Drive 1TB', 5, 3, 8500.00, 11000.00, 5, 2),
(31, 'RAM 8GB', 5, 1, 7000.00, 9000.00, 4, 2),
(32, 'SSD 256GB', 5, 1, 6500.00, 8500.00, 5, 2),
(33, 'Earpods', 1, 3, 4000.00, 4000.00, 2, 1);


CREATE TABLE `stock_in` (
  `stock_in_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL
) 

INSERT INTO `stock_in` (`stock_in_id`, `product_id`, `quantity`, `purchase_date`) VALUES
(3, 2, 5, '2026-01-24'),
(4, 1, 20, '2026-01-24'),
(5, 6, 5, '2026-01-24'),
(6, 1, 20, '2026-01-24'),
(7, 1, 20, '2026-01-24'),
(8, 2, 1, '2026-01-24'),
(9, 5, 0, '2026-01-24');


CREATE TABLE `stock_out` (
  `stock_out_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sale_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `phone`, `email`, `address`) VALUES
(1, 'Tech Supplier', '03001234567', 'tech@gmail.com', 'Karachi'),
(2, 'Office Mart', '03111234567', 'office@gmail.com', 'Lahore'),
(3, 'Tech Hub', '03001234567', 'techhub@gmail.com', 'Karachi'),
(4, 'Office World', '03111234567', 'officeworld@gmail.com', 'Lahore'),
(5, 'Digital Mart', '03221234567', 'digitalmart@gmail.com', 'Islamabad'),
(6, 'Pak Traders', '03331234567', 'paktraders@gmail.com', 'Rawalpindi');

ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `supplier_id` (`supplier_id`);

ALTER TABLE `stock_in`
  ADD PRIMARY KEY (`stock_in_id`),
  ADD KEY `product_id` (`product_id`);

ALTER TABLE `stock_out`
  ADD PRIMARY KEY (`stock_out_id`),
  ADD KEY `product_id` (`product_id`);

ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

ALTER TABLE `stock_in`
  MODIFY `stock_in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `stock_out`
  MODIFY `stock_out_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`supplier_id`);

ALTER TABLE `stock_in`
  ADD CONSTRAINT `stock_in_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

ALTER TABLE `stock_out`
  ADD CONSTRAINT `stock_out_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

