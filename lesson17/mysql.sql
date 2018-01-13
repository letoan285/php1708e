--1. Insert data into database
INSERT INTO users (name, username, email, password, merried) VALUES 
('Le Van Toan', 'letoan', 'toan@gmail.com', '123456', 1),
('Le Van Manh', 'lemanh', 'manh@gmail.com', '123456', 1),
('Nguyen Thi Hong', 'nguyenhong', 'hong@gmail.com', '123456', 0),
('Nguyen Thi Linh', 'linhnguyen', 'linh@gmail.com', '123456', 0);


--2. update data
UPDATE users SET name = 'Hoang Thuy Linh', username = "linhhoang", email = "linh@gmail.com", married = 1 WHERE id = 4;

-- 3. delete data
DELETE FROM users WHERE id = 1;

--4. SELECT

SELECT * FROM users WHERE id = 1

SELECT * FROM `products` WHERE `product_name` LIKE '%light%'
--the word contain light word

SELECT * FROM `products` WHERE `product_name` LIKE 'light%'
--the word start with ligth word



--trọn tổng giá trị mỗi sản phẩm còn lại trong kho
SELECT 
	ProductID as id, 
	ProductName as 'Tên sản phẩm', 
	sum(UnitPrice*UnitsInStock) as 'Tổng giá trị' 
FROM products 
GROUP BY ProductID

-- select group
select 
	ProductID,
	ProductName,
	sum(UnitPrice*UnitsInStock) as Instock
from products
group by ProductID
having Instock
order by Instock desc, ProductName desc, ProductID asc

--join two table
SELECT products.ProductID as id, 
		products.ProductName as 'Tên sản phẩm', 
		products.UnitPrice as 'Giá bán', 
		products.UnitsInStock as 'Tồn kho', 
		suppliers.CompanyName as 'Nhà cung cấp', 
		suppliers.Address as 'địa chỉ', 
		suppliers.City as 'Thành phố' 
FROM products 
JOIN suppliers 
ON products.SupplierID = suppliers.SupplierID

--join 3 table
SELECT products.ProductID as id, 
	products.ProductName as 'Tên sản phẩm', 
	products.UnitPrice as 'Giá bán', 
	products.UnitsInStock as 'Tồn kho', 
	suppliers.CompanyName as 'Nhà cung cấp', 
	suppliers.Address as 'địa chỉ', 
	suppliers.City as 'Thành phố', 
	categories.CategoryName as 'Danh mục' 
FROM products 
JOIN suppliers 
ON products.SupplierID = suppliers.SupplierID 
JOIN categories 
ON products.CategoryID = categories.CategoryID


-- alias
SELECT p.ProductID as id, 
	p.ProductName as 'Tên sản phẩm', 
	p.UnitPrice as 'Giá bán', 
	p.UnitsInStock as 'Tồn kho', 
	s.CompanyName as 'Nhà cung cấp', 
	s.Address as 'địa chỉ', 
	s.City as 'Thành phố', 
	c.CategoryName as 'Danh mục' 
FROM products p
JOIN suppliers s
ON p.SupplierID = s.SupplierID 
JOIN categories c
ON p.CategoryID = c.CategoryID

--1708 database

INSERT INTO users (firstName, lastName, email, password, year_of_birth, semester, province) VALUES 
('Bùi Quốc', 'Hội', 'hoihobui1996@gmail.com', 'anhyeuem1', '1996', '4', 'Nam Dinh'),
('Phùng Minh', 'Tuấn', 'Tuan@gmail.com', '123456', '1993', '2', 'Quảng Ninh'),
('Vũ Chiến', 'Thắng', 'Vuchienthang@gmail.com','thang1234','1995','9','haiduong'),
('Nguyễn Hoàng', 'Duy', 'duynguyenhoang1296@gmail.com','duy1234','1996','6','Hai Duong'),
('Đậu Tuấn','Anh','natsuboy37@gmail.com','adasjhasjdasd','1995/04/15','1','Nghe An'),
('Nguyễn Duy', 'Tùng', 'tunganh2712@gmail.com', 'anhyeuem1', '1998', '2', 'Lai Chau'),
('Đinh Văn', 'Đông', 'newfolder197@gmail.com','03201320','1997','5','Hai Duong'),
('Nguyễn Văn', 'Hân', 'han@gmail.com', '123456', '1995', '8', 'Nam Dinh'),
("Nguyễn Tùng", "Lâm", "lamcule0110@gmail.com", "lam123", '1996', '5', "Ha Noi"),
('Phùng', 'Việt', 'kusina342@gmail.com', '123456', '1995', '8', 'HN'),
('Nguyễn Đại', 'Việt', '2203viet@gmail.com', '25689', '1997', '6', 'Ha Noi'),
('Nguyễn Văn', 'Hân', 'han@gmail.com', '123456', '1995', '8', 'Nam Dinh');

