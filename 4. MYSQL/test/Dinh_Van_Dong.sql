SELECT CONCAT(LOwER(lastName),' ',LOWER(FirstName)) as FullName,TitleOfCourtesy FROM `employees` WHERE 1

-- cau2 
SELECT CONCAT(UPPER(lastName),' ',UPPER(FirstName)) as FullName FROM `employees` WHERE 1

-- cau3
SELECT EmployeeID,LastName,FirstName,Title,City,Country FROM `employees` WHERE Country = 'USA'

-- cau4
SELECT CustomerID,CompanyName,ContactName,ContactTitle,Country FROM `customers` WHERE Country like 'UK'

-- cau5
SELECT CustomerID,CompanyName,Address,City,Country FROM `customers` WHERE Country like 'Mexico'