Exercise 6: SELECT CustomerID,CompanyName,Phone,Address,City,Country FROM customers WHERE Country LIKE'%Sweden%'

Exercise 7: SELECT ProductID, ProductName, UnitPrice ,UnitsInStock FROM products
WHERE UnitsInStock BETWEEN 5 and 10

Exercise 8: SELECT ProductID, ProductName,UnitPrice,ReorderLevel,UnitsOnOrder FROM products WHERE UnitsOnOrder BETWEEN 60 AND 100

Exercise 9: SELECT DISTINCT(employees.EmployeeID), employees.LastName,employees.FirstName,employees.Title,YEAR(orders.OrderDate) AS 'year',
 orderdetails.quantity AS 'total order' 
FROM employees INNER JOIN orders ON employees.EmployeeID= orders.EmployeeID 
		INNER JOIN orderdetails ON orders.OrderID=orderdetails.OrderID
 WHERE YEAR(orders.OrderDate)=1996 
GROUP BY employees.EmployeeID,employees.LastName,employees.FirstName,employees.Title

Exercise 10: SELECT employees.EmployeeID, employees.LastName,employees.FirstName,employees.City,employees.Country, orderdetails.quantity AS 'total order'
FROM employees INNER JOIN orders ON employees.EmployeeID= orders.EmployeeID 
		INNER JOIN orderdetails ON orders.OrderID=orderdetails.OrderID
WHERE YEAR(orders.OrderDate)=1998
 GROUP BY employees.EmployeeID,employees.LastName,employees.FirstName,employees.City,employees.Country

Exercise 11: SELECT employees.EmployeeID, employees.LastName,employees.FirstName,employees.HireDate, orderdetails.quantity AS 'total order'
FROM employees INNER JOIN orders ON employees.EmployeeID= orders.EmployeeID 
		INNER JOIN orderdetails ON orders.OrderID=orderdetails.OrderID 
WHERE orders.OrderDate BETWEEN '1998-01-01' AND '1998-07-31' 
GROUP BY employees.EmployeeID,employees.LastName,employees.FirstName,employees.HireDate

Exercise 12: SELECT employees.EmployeeID, employees.LastName,employees.FirstName,employees.HireDate,employees.HomePhone, orderdetails.quantity AS 'total order'
 FROM employees INNER JOIN orders ON employees.EmployeeID= orders.EmployeeID 
		INNER JOIN orderdetails ON orders.OrderID=orderdetails.OrderID
 WHERE orders.OrderDate BETWEEN '1997-01-01' AND '1997-06-30'
 GROUP BY employees.EmployeeID,employees.LastName,employees.FirstName,employees.HireDate
Exercise 13: SELECT orders.OrderID,DAY(orders.OrderDate),MONTH(orders.OrderDate),YEAR(orders.OrderDate),orders.Freight,
IF(orders.Freight>=100,'10%','5%') AS 'tax' , IF(orders.Freight>=100,orders.Freight*(10/100)+orders.Freight,orders.Freight*(5/100)+orders.Freight) AS 'Freigth with tax'
FROM orders 
WHERE orders.OrderDate BETWEEN '1996-08-01' AND '1996-08-05'
Exercise 14: SELECT concat(LastName,FirstName) as 'full name' ,TitleOfCourtesy ,
IF(TitleOfCourtesy LIKE'%Mr.%','Male',IF(TitleOfCourtesy LIKE'%Ms.%' or TitleOfCourtesy LIKE'%Mrs.%','Female','NULL')) AS 'sex' 
FROM employees 
WHERE TitleOfCourtesy LIKE '%Mr.%' or TitleOfCourtesy LIKE '%Ms.%' or TitleOfCourtesy LIKE '%Mrs.%'
Exercise 15: SELECT concat(LastName,FirstName) as 'full name' ,TitleOfCourtesy ,IF(TitleOfCourtesy LIKE'%Mr.%'OR TitleOfCourtesy LIKE'%Dr.%','M','F') AS 'sex'
FROM employees
Exercise 16: SELECT concat(LastName,FirstName) as 'full name' ,TitleOfCourtesy ,IF(TitleOfCourtesy LIKE'%Mr.%','Male',IF(TitleOfCourtesy LIKE'%Ms.%' or TitleOfCourtesy LIKE'%Mrs.%','Female','Unknown')) AS 'sex' 
FROM employees 
Exercise 17: SELECT concat(LastName,FirstName) as 'full name' ,TitleOfCourtesy ,IF(TitleOfCourtesy LIKE'%Mr.%','1',IF(TitleOfCourtesy LIKE'%Ms.%' or TitleOfCourtesy LIKE'%Mrs.%','0','2')) AS 'sex' 
FROM employees 
