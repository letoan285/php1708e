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

  SELECT CustomerID,CompanyName,Address,City,Country FROM Customers
   WHERE Country = 'UK'

   --cau5
   SELECT CustomerID,CompanyName,address,City,Country FROM Customers
   WHERE Country = 'Mexico'

   --cau6

    SELECT CustomerID,CompanyName,Phone as phone,Address as address,City as city,Country FROM Customers
   WHERE Country = 'Sweden'

   --cau7

   SELECT ProductID,ProductName,UnitPrice,UnitsInStock FROM Products
   WHERE UnitsInStock between 5 and 10

   --cau8

   SELECT ProductID,ProductName,UnitPrice,ReorderLevel,UnitsOnOrder FROM Products
   WHERE UnitsOnOrder between 60 and 100

   --cau 9
   SELECT
   e.EmployeeID,
   e.LastName,
   e.FirstName,
   e.Title,
   year(o.OrderDate) as OrderYear,
   count(o.OrderID) as 'total order'
   FROM Employees e
   join Orders o
   on e.EmployeeID = o.EmployeeID
   group by e.EmployeeID
   having OrderYear = 1996

   --cau10
   SELECT 
   e.EmployeeID,
   e.LastName,
   e.FirstName,
   e.City,
   e.Country,
   count(o.OrderID) as 'total order'
   FROM Employees e
   join Orders o
    on o.EmployeeID = e.EmployeeID
    WHERE year(o.OrderDate) = 1998
    group by e.EmployeeID



        --cau14
        SELECT
        concat(FirstName,' ',LastName)as 'FullName',
        TitleOfCourtesy,
        if(TitleOfCourtesy='Mr.','Male','Female') as Sex
        FROM Employees

         --cau15
          SELECT
        concat(FirstName,' ',LastName)as 'FullName',
        TitleOfCourtesy,
        if(TitleOfCourtesy='Mr.'or TitleOfCourtesy='Dr.','Male','Female') as Sex
        FROM Employees

