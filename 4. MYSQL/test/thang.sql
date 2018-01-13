SELECT concat(FirstName,LastName) AS 'fullname' ,TitleOfCourtesy FROM employees
SELECT concat(upper(FirstName),upper(LastName)) AS 'fullname' FROM employees
SELECT EmployeeID,LastName,FirstName,Title,City,Country FROM employees
WHERE Country LIKE'%USA%'
SELECT CustomerID, CompanyName,ContactName,ContactTitle,Country FROM customers
WHERE Country LIKE'%UK%'
SELECT CustomerID, CompanyName,Address,City,Country FROM
customers
WHERE Country LIKE'%Mexico%'