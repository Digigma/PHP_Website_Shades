CREATE DATABASE shades;

USE shades;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'robert@shades.com', 'robert');

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchasing_price` float NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cart` (`id`, `product_id`, `order_id`, `quantity`, `purchasing_price`, `session_id`) VALUES
(97, 46, 0, 1, 45, 'mf0rrvsr6qr8603pv7i09ds6gs');


CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `detail` (`id`, `name`, `email`, `address`, `phone`, `total`) VALUES
(39, 'robert', 'robert@gmail.com', 'robert address', '1234565432', 8599),
(40, 'robertk', 'robertk@gmail.com', 'robert address', '2343234211', 45),
(41, 'robert', 'robert@shades.com', 'robert address', '234213456543', 45);

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `items` (`id`, `name`, `price`, `description`, `quantity`, `img`) VALUES
(41, 'Shades R P1', 99, 'Description about these shades, more description about these shades', 10, 'product1.jpg'),
(42, 'Shades R P2', 101, 'Description about these shades, more description about these shades', 10, 'product2.jpg'),
(43, 'Shades R P3', 109, 'Description about these shades, more description about these shades', 10, 'product3.jpg'),
(44, 'Shades R P4', 89, 'Description about these shades, more description about these shades', 10, 'product4.jpg'),
(46, 'Shades R P5', 49, 'Description about these shades, more description about these shades', 10, 'product5.jpg'),
(47, 'Shades R P5', 69, 'Description about these shades, more description about these shades', 10, 'product6.jpg');

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchasing_price` float NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `quantity`, `purchasing_price`, `session_id`) VALUES
(24, 46, 31, 3, 4500, 'b3of6bqkf5iftlfnmie3niohrg'),
(25, 42, 31, 4, 4500, 'b3of6bqkf5iftlfnmie3niohrg'),
(26, 46, 32, 1, 4500, 'b3of6bqkf5iftlfnmie3niohrg'),
(27, 43, 33, 1, 4599, 'b3of6bqkf5iftlfnmie3niohrg'),
(28, 46, 33, 2, 4500, 'b3of6bqkf5iftlfnmie3niohrg'),
(29, 44, 33, 1, 1200, 'b3of6bqkf5iftlfnmie3niohrg'),
(30, 46, 34, 2, 4500, 'b3of6bqkf5iftlfnmie3niohrg'),
(31, 43, 34, 2, 4599, 'b3of6bqkf5iftlfnmie3niohrg'),
(32, 45, 35, 3, 4500, 'b3of6bqkf5iftlfnmie3niohrg'),
(33, 46, 37, 3, 4500, 'b3of6bqkf5iftlfnmie3niohrg'),
(34, 45, 38, 1, 4500, 'b3of6bqkf5iftlfnmie3niohrg'),
(35, 43, 39, 1, 4099, 'mf0rrvsr6qr8603pv7i09ds6gs'),
(36, 46, 39, 1, 4500, 'mf0rrvsr6qr8603pv7i09ds6gs'),
(37, 46, 40, 1, 45, 'mf0rrvsr6qr8603pv7i09ds6gs'),
(38, 46, 41, 1, 45, 'mf0rrvsr6qr8603pv7i09ds6gs');

ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;
