--gioi han so row lay ra--giup phan trang
SELECT * FROM products LIMIT 10 OFFSET 19
--shorthand of offset
SELECT * FROM products LIMIT 19, 10
--select distinct
SELECT DISTINCT(Country) FROM customers
--sum

SELECT SUM(UnitsInStock) FROM `products` WHERE 1

-- group by and having
SELECT ProductID as id, ProductName as 'Tên SP', SUM(UnitPrice*UnitsInStock) as Total FROM products GROUP BY ProductID HAVING Total > 1000
--like
SELECT * FROM `products` WHERE products.ProductName LIKE '%ha%'

--join two tables
SELECT products.ProductID as id, products.ProductName as 'Tên sản phẩm', products.UnitPrice as 'Giá', products.UnitsInStock as 'Tồn kho', suppliers.CompanyName as 'Nhà cung cấp', suppliers.Address as 'địa chỉ' FROM products JOIN suppliers ON products.SupplierID = suppliers.SupplierID
 
-- alias for tables

SELECT p.ProductID as id, 
	p.ProductName as 'Tên sản phẩm', 
    p.UnitPrice as 'Giá', 
    p.UnitsInStock as 'Tồn kho', 
    s.CompanyName as 'Nhà cung cấp', 
    s.Address as 'địa chỉ' 
FROM products p
	JOIN suppliers s
    ON p.SupplierID = s.SupplierID


 --join 3 tables

 SELECT 
	p.ProductID AS id,
    p.ProductName AS 'ten san pham',
    p.UnitPrice AS gia,
    p.UnitsInStock AS 'ton kho',
    s.CompanyName AS 'nha cung cap',
    s.Address AS 'dia chi',
    c.CategoryName AS 'ten loai'
FROM products AS p
	INNER JOIN suppliers AS s
    ON p.SupplierID=s.SupplierID
    INNER JOIN categories AS c
    ON p.CategoryID=c.CategoryID