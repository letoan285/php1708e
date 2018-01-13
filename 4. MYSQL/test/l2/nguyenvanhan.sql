-- Câu số 9
SELECT e.EmployeeID,e.LastName,e.FirstName,e.Title,o.OrderDate,SUM(Quantity) as 'Total'
FROM employees e 
JOIN orders o ON e.EmployeeID = o.EmployeeID
JOIN `order details` b ON o.OrderID = b.OrderID 
GROUP BY OrderDate
-- Câu 10
SELECT e.EmployeeID,e.LastName,e.FirstName,e.City,e.Country,SUM(Quantity) as 'Total'
FROM employees e 
JOIN orders o ON e.EmployeeID = o.EmployeeID
JOIN `order details` b ON o.OrderID = b.OrderID 
GROUP BY EmployeeID
-- Câu 11
SELECT e.EmployeeID,e.LastName,e.FirstName,e.HireDate,SUM(Quantity) as 'Total'
FROM employees e 
JOIN orders o ON e.EmployeeID = o.EmployeeID
JOIN `order details` b ON o.OrderID = b.OrderID
GROUP BY HireDate


