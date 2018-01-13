-- cau1

SELECT concat(lower(FirstName),' ',lower(lastName )) as 'FullName',TitleOfCourtesy
 FROM Employees
 

 -- cau2

 SELECT concat(upper(lastName),' ',upper(FirstName)) as 'FullName',TitleOfCourtesy
 FROM Employees
 
 --cau3
 SELECT EmployeeID,LastName,FirstName,Title,City,Country FROM employees
  WHERE Country = 'USA'

  --cau4

  SELECT CustomerID,CompanyName,Address,City,Country FROM customers
   WHERE Country = 'Mexico'

   --cau5
   SELECT CustomerID,CompanyName,address,City,Country FROM customers
   WHERE Country = 'Mexico'