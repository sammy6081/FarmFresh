-- Converted MySQL dump -> Postgres-compatible SQL (init_pg.sql)
BEGIN;

-- avoid issues with FK/trigger checks during import
SET session_replication_role = replica;

-- Drop tables if they already exist (safe for first-run)
DROP TABLE IF EXISTS cart CASCADE;
DROP TABLE IF EXISTS orders CASCADE;
DROP TABLE IF EXISTS products CASCADE;
DROP TABLE IF EXISTS categories CASCADE;
DROP TABLE IF EXISTS users CASCADE;
DROP TABLE IF EXISTS admins CASCADE;

-- Table: admins
CREATE TABLE admins (
  id SERIAL PRIMARY KEY,
  admin_name varchar(200) NOT NULL,
  email varchar(200) NOT NULL,
  mypassword varchar(200) NOT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp
);

INSERT INTO admins (id, admin_name, email, mypassword, created_at) VALUES
(1, 'first admin', 'firstadmin@gmail.com', '$2y$10$geIj3GEOzwXOR632x.FMces3h608eW6dgjYpYMWou4.r/.lNlLKcu', '2025-08-26 06:23:17'),
(2, 'Second Admin', 'secondadmin@gmail.com', '$2y$10$gdh0tUrGVTqlXIH2RYvGtuuBB.gz0h8Qj/Z08459ppzc4emjnevl.', '2025-08-27 15:55:23');

-- Table: cart
CREATE TABLE cart (
  id SERIAL PRIMARY KEY,
  pro_id integer NOT NULL,
  pro_title varchar(200) NOT NULL,
  pro_image varchar(200) NOT NULL,
  pro_price integer NOT NULL,
  pro_qty integer NOT NULL,
  pro_subtotal integer NOT NULL,
  user_id integer NOT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp
);

INSERT INTO cart (id, pro_id, pro_title, pro_image, pro_price, pro_qty, pro_subtotal, user_id, created_at) VALUES
(58, 5, 'FRUITS', 'fruits.jpg', 40, 8, 320, 5, '2025-08-18 14:26:25'),
(59, 6, 'FISH', 'fish.jpg', 40, 21, 840, 5, '2025-08-18 14:26:55');

-- Table: categories
CREATE TABLE categories (
  id SERIAL PRIMARY KEY,
  name varchar(200) NOT NULL,
  image varchar(200) NOT NULL,
  icon varchar(200) NOT NULL,
  description varchar(400) NOT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp
);

INSERT INTO categories (id, name, image, icon, description, created_at) VALUES
(1, 'Ewedu', 'vegetables.jpg', 'bistro-carrot', 'Freshly Harvested Veggies From Local Growers.', '2025-08-08 06:43:05'),
(2, 'MEATS', 'meats.jpg', 'bistro-roast-leg', 'Protein Rich Ingridients From Local Farmers', '2025-08-08 06:43:05'),
(5, 'FISH', 'fish.jpg', 'bistro-fish-1', 'Protein Rich Ingridients From Local Farmers', '2025-08-08 07:29:22'),
(6, 'FRUITS', 'fruits.jpg', 'bistro-apple', 'Variety of Fruits From Local Growers', '2025-08-08 07:29:22'),
(7, 'FROZEN FOODS', 'frozen.jpg', 'bistro-french-fries', 'Protein Rich Ingridients From Local Farmers', '2025-08-08 07:29:22');

-- Table: orders
CREATE TABLE orders (
  id SERIAL PRIMARY KEY,
  name varchar(200) NOT NULL,
  lname varchar(200) NOT NULL,
  company_name varchar(200) NOT NULL,
  address varchar(200) NOT NULL,
  city varchar(200) NOT NULL,
  country varchar(200) NOT NULL,
  zip_code varchar(50) NOT NULL,
  email varchar(200) NOT NULL,
  phone_number varchar(50) NOT NULL,
  order_notes text NOT NULL,
  status varchar(200) NOT NULL DEFAULT 'Sent to Admins',
  price integer NOT NULL,
  user_id integer NOT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp
);

INSERT INTO orders (id, name, lname, company_name, address, city, country, zip_code, email, phone_number, order_notes, status, price, user_id, created_at) VALUES
(14, 'Samuel', 'Akanji', 'webwise', 'No 9, Papa Aare-Ago, Ogbomoso, Oyo State.', 'Ogbomoso', 'Nigeria', '123456', 'akanjisamuel6@gmail.com', '222', ';sefelkmceoi;lmcvev v;oinv', 'Processing', 155, 9, '2025-08-24 14:51:20'),
(15, 'Samuel', 'Akanji', 'company', 'No 9, Papa Aare-Ago, Ogbomoso, Oyo State.', 'Ogbomoso', 'Nigeria', '123456', 'akanjisamuel6@gmail.com', '123456789', 'ljeflje;fldjoijasnmnfiaonifneai;ohjsdnefiifrhoi', 'Processing', 60, 9, '2025-08-24 16:09:52');

-- Table: products
CREATE TABLE products (
  id SERIAL PRIMARY KEY,
  title varchar(200) NOT NULL,
  description text NOT NULL,
  price varchar(10) NOT NULL,
  quantity integer NOT NULL DEFAULT 1,
  image varchar(200) NOT NULL,
  status smallint NOT NULL DEFAULT 1,
  exp_date varchar(200) NOT NULL,
  category_id integer NOT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp
);

INSERT INTO products (id, title, description, price, quantity, image, status, exp_date, category_id, created_at) VALUES
(1, 'VEGETABLES', 'Freshly Harvested Veggies From Local Growers', '25', 1, 'vegetables.jpg', 1, '2026', 1, '2025-08-09 07:51:27'),
(2, 'MEATS', 'Protein Rich Ingridients From Local Farmers', '30', 1, 'meats.jpg', 1, '2026', 2, '2025-08-09 07:51:27'),
(5, 'FRUITS', 'Variety of Fruits From Local Growers', '40', 1, 'fruits.jpg', 1, '2025', 3, '2025-08-09 09:23:42'),
(6, 'FISH', 'Protein Rich Ingridients From Local Farmers', '40', 1, 'fish.jpg', 1, '2027', 4, '2025-08-09 09:23:42'),
(7, 'FROZEN FOODS', 'Protein Rich Ingridients From Local Farmers', '38', 1, 'frozen.jpg', 1, '2025', 5, '2025-08-09 09:23:42'),
(9, 'Tinko', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit a temporibus minima, sequi nam voluptatem officiis accusamus? Laboriosam, repellat distinctio.', '25', 1, 'meats.jpg', 1, '2028', 2, '2025-08-11 02:01:14'),
(10, 'Efo', 'Iyan lounje, oka loogun, airi rara la n jeko, kenumadile lan je guguru.', '34', 1, 'vegetables.jpg', 1, '2026', 1, '2025-08-11 02:41:55'),
(12, 'Fresh Farm Milk', 'Farm-fresh milk provides essential nutrients like calcium and protein for bone and muscle health, along with vitamins and enzymes that support gut bacteria, immune function, and overall well-being. It can also promote hydration and contribute to heart health by helping to control blood pressure.', '50', 1, 'fresh-farm-milk.jpg', 1, '2026', 19, '2025-08-28 23:56:11');

-- Table: users
CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  fullname varchar(200) NOT NULL,
  email varchar(200) NOT NULL,
  username varchar(200) NOT NULL,
  mypassword varchar(200) NOT NULL,
  image varchar(200) NOT NULL,
  address text DEFAULT NULL,
  city varchar(200) DEFAULT NULL,
  state varchar(200) DEFAULT NULL,
  post_code varchar(50) DEFAULT NULL,
  phone_number varchar(50) DEFAULT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp
);

INSERT INTO users (id, fullname, email, username, mypassword, image, address, city, state, post_code, phone_number, created_at) VALUES
(1, 'First User', 'firstuser@gmail.com', 'firstuser@gmail.com', '$2y$10$SCx645WmviAzdqKY0h09weGqqSTXbNKgeK00nXL.FjZWvAmhq8mfq', 'user.png', '', '', '', '0', '0', '2025-08-07 00:01:10'),
(5, 'First Cook', 'firstcook@gmail.com', 'firstcook@gmail.com', '$2y$10$Kj/BvE.NCZbMgNXdE70oLOWCHqKYdGy9cmIFbtjdPnMif8ipY9hEq', 'user.png', '', '', '', '0', '0', '2025-08-07 08:13:24'),
(7, 'First Cooker', 'firstcooker@gmail.com', 'firstcooker@gmail.com', '$2y$10$geIj3GEOzwXOR632x.FMces3h608eW6dgjYpYMWou4.r/.lNlLKcu', 'user.png', 'No 9, Papa Aare-Ago, Ogbomoso, Oyo State.', 'Ogbomoso', 'Oyo', '0', '0', '2025-08-07 08:21:19'),
(8, 'Akanji Promise', 'olaniyipromise1@gmail.com', 'PeeJay', '$2y$10$a.CRRsylLANGuv5icCkJy.AZiuTqIF06AknKrqENFq/k0CegarF8W', 'user.png', '', '', '', '0', '0', '2025-08-14 17:56:00'),
(9, 'Isaiah', 'isaiah@gmail.com', 'Isaiah', '$2y$10$LYkftBLeB/IO9.f5c7uRIuQiSuVC6UHEgWj2ONicQQYzYjmkkiGWG', 'user.png', '', '', '', '0', '0', '2025-08-21 23:21:34');

-- Ensure sequences are set to next value after inserted ids
SELECT setval(pg_get_serial_sequence('admins', 'id'), COALESCE((SELECT MAX(id) FROM admins), 1));
SELECT setval(pg_get_serial_sequence('cart', 'id'), COALESCE((SELECT MAX(id) FROM cart), 1));
SELECT setval(pg_get_serial_sequence('categories', 'id'), COALESCE((SELECT MAX(id) FROM categories), 1));
SELECT setval(pg_get_serial_sequence('orders', 'id'), COALESCE((SELECT MAX(id) FROM orders), 1));
SELECT setval(pg_get_serial_sequence('products', 'id'), COALESCE((SELECT MAX(id) FROM products), 1));
SELECT setval(pg_get_serial_sequence('users', 'id'), COALESCE((SELECT MAX(id) FROM users), 1));

-- restore normal replication role
SET session_replication_role = DEFAULT;

COMMIT;
